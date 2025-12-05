<?php
require('connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// include PHPMailer
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if(isset($_POST['send_link'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email'");
    
    if(mysqli_num_rows($result) > 0){
        $token = bin2hex(random_bytes(16)); // secure random token
        $expiry = date("Y-m-d H:i:s", strtotime("+15 minutes"));
        
        mysqli_query($con, "UPDATE users SET Reset_Token='$token', Reset_Token_Exp='$expiry' WHERE Email='$email'");
        
        $reset_link = "http://localhost/Masih/ResetPassword.php?token=$token";
        
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'photosync625@gmail.com'; // use your SMTP email
            $mail->Password = 'zezc isls zwdl hmnk'; // use app password, not Gmail login password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            
            $mail->setFrom('photosync625@gmail.com', 'Lobster');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Request';
            $mail->Body = "
                <h3>Hi,</h3>
                <p>Click the link below to reset your password (valid for 15 minutes):</p>
                <a href='$reset_link'>$reset_link</a>
            ";
            
            $mail->send();
            echo "✅ Reset link has been sent to your email.";
        } catch (Exception $e) {
            echo "❌ Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "⚠️ No account found with this email.";
    }
}
?>
