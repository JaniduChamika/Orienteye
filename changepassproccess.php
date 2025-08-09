<?php
require "connection.php";

use PHPMailer\PHPMailer\PHPMailer;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
if (isset($_GET["email"])) {

    $e = $_GET["email"];
    if (empty($e)) {
        echo "Please enter your email address";
    } else {
        $rs = Database::search("SELECT * FROM `employee` WHERE `email` = '" . $e . "'");

        if ($rs->num_rows == 1) {

            $uni = uniqid();
            $code = substr($uni, -6);
            Database::iud("UPDATE `employee` SET `v_code`='" . $code . "' WHERE `email`='" . $e . "'");
            // echo 'Success';
            //email code

            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'you email ';
            $mail->Password = 'you password';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('you email ', 'Orianteye Solutions');
            $mail->addReplyTo('you email ', 'Orianteye Solutions');
            $mail->addAddress($e);
            $mail->isHTML(true);
            $mail->Subject = 'Orianteye Solutions change Password Verification Code';
            $bodyContent = '<h1 style="color:red">Your Verification Code:' . $code . '</h1>';
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Success';
            }
        } else {
            echo "Email address not found";
        }
    }
} else {
    echo "Please enter your email address";
}
