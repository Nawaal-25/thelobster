<?php
session_start();
include 'connection.php';
require('src/Razorpay.php');
use Razorpay\Api\Api;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // -------------------- GET FIELDS --------------------
    $Full_Name = $_POST['Full_Name'] ?? '';
    $Email     = $_POST['Email'] ?? '';
    $Phone     = $_POST['Phone'] ?? '';
    $Address   = $_POST['Address'] ?? '';
    $City      = $_POST['City'] ?? '';
    $State     = $_POST['State'] ?? '';
    $Postal    = $_POST['Postal'] ?? '';
    $Payment   = $_POST['Payment'] ?? 'Razorpay';

    // Your product amount
    $amount_rupees = 1499;
    $amount_paise = $amount_rupees * 100;

    // -------------------- VALIDATION --------------------
    if (empty($Full_Name) || empty($Email) || empty($Phone)) {
        echo json_encode(["status" => "error", "msg" => "Missing required fields"]);
        exit;
    }

    // -------------------- INSERT ORDER INTO DB --------------------
    $sql = "INSERT INTO orders 
            (Full_Name, Email, Phone, Address, City, State, Postal, Payment, Amount)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $con->prepare($sql);
    if (!$stmt) {
        echo json_encode(["status" => "error", "msg" => $con->error]);
        exit;
    }

    $stmt->bind_param(
        "ssssssssi",
        $Full_Name, 
        $Email, 
        $Phone, 
        $Address, 
        $City, 
        $State, 
        $Postal, 
        $Payment,
        $amount_rupees
    );

    $stmt->execute();

    if ($stmt->affected_rows <= 0) {
        echo json_encode(["status" => "error", "msg" => "Insert Failed: " . $stmt->error]);
        exit;
    }

    $local_order_id = $stmt->insert_id; 
    $stmt->close();


    // -------------------- IF PAYMENT TYPE = COD --------------------
    // if ($Payment === "COD") {

    //     // set status to Pending automatically (default)
    //     echo json_encode([
    //         "status" => "cod",
    //         "msg" => "Cash on Delivery Order Placed",
    //         "local_order_id" => $local_order_id
    //     ]);

    //     exit;
    // }


    // -------------------- CREATE RAZORPAY ORDER --------------------
    $api = new Api("rzp_test_RhewhkHD8nUN3q", "Zn6KedAl8bOAW2Je1qE7A6tL");

    $razorpayOrder = $api->order->create([
        'receipt' => "ORDER_" . $local_order_id,
        'amount'  => $amount_paise,
        'currency'=> 'INR',
        'payment_capture' => 1
    ]);

    // Get Razorpay order_id safely
    $razorpay_order_id = $razorpayOrder['id'];


    // -------------------- UPDATE LOCAL DB WITH RAZORPAY ID --------------------
    $update_sql = "UPDATE orders SET Razorpay_order_Id = ? WHERE Order_Id = ?";
    $update_stmt = $con->prepare($update_sql);

    if (!$update_stmt) {
        echo json_encode(["status" => "error", "msg" => $con->error]);
        exit;
    }

    $update_stmt->bind_param("si", $razorpay_order_id, $local_order_id);
    $update_stmt->execute();
    $update_stmt->close();

    $con->close();

    // -------------------- SEND RESPONSE TO JAVASCRIPT --------------------
    echo json_encode([
        "status" => "success",
        "order_id" => $razorpay_order_id,
        "amount_rupees" => $amount_rupees,
        "local_order_id" => $local_order_id
    ]);

    exit;
}
?>
