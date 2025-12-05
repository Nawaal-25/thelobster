<?php
session_start();
require('connection.php');

header('Content-Type: application/json');

if (!isset($_SESSION['User_Id'])) {
    echo json_encode(['error' => 'User not logged in']);
    exit;
}

$userId = $_SESSION['User_Id'];

$query = "
SELECT 
    c.Variant_Id, 
    c.Quantity,
    pv.Size,
    pv.Stock,
    p.Product_Name,
    p.Price,
    p.Image_Url
FROM cart c
JOIN product_variant pv ON c.Variant_Id = pv.Variant_Id
JOIN products p ON pv.Product_Id = p.Product_ID
WHERE c.User_Id = ?
";

$stmt = $con->prepare($query);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

$cartItems = [];

while ($row = $result->fetch_assoc()) {
    $image_url = str_replace("\\", "/", $row['Image_Url']); // converts backslashes to forward slashes
    if ($row['Stock'] > 0) { // ✅ show only available items
        $cartItems[] = [
            "variant_id" => $row['Variant_Id'],
            "name" => $row['Product_Name'],
            "size" => $row['Size'],
            "price" => $row['Price'],
            "image" => $row['Image_Url'],
            "quantity" => $row['Quantity'],
            "stock" => $row['Stock']
        ];
    }
}

echo json_encode($cartItems);
?>
