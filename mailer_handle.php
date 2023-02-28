<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $email=$_POST["email"];

try {
      $mail = new PHPMailer(true);
      $mail->SMTPDebug = 0; //Enable verbose debug output
      $mail->isSMTP(); //Send using SMTP
      $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
      $mail->SMTPAuth = true; //Enable SMTP authentication
      $mail->Username = 'kalash.jain@innoraft.com'; //SMTP username
      $mail->Password = 'fvkkexdjizksvdpn'; //SMTP password
      $mail->SMTPSecure = 'ssl'; //Enable implicit TLS encryption
      $mail->Port = 465;
      $mail->setFrom('kalash.jain@innoraft.com');
      $mail->addAddress($email);
      $mail->isHTML(true); //Set email format to HTML
      $mail->Subject = 'Here is the subject';
      $body = "hello";
      $mail->Body = $body;
      $mail->AltBody = $body;
      $mail->send();
      echo 'Message has been sent';
     
     
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     
    }
  
}
  ?>