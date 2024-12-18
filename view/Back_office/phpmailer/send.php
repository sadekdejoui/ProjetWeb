<?php
use PHPMailer\PHPMailer\PHPmailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ajimiyousef@gmail.com';   //your gmail
    $mail->Password = 'jbfw slzm anhe acqp';    //your gmail app password
    $mail->SMTSecure = 'ssl' ;
    $mail->Port = 465;

    $mail->setForm('ajimiyousef@gmail.com');    //your gmail

    $mail-> addAdress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $POST["subject"];
    $mail->Body = $POST["message"];

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'index.php'
    </script>
    "

}
