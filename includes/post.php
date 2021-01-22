<?php

if(isset($_POST['submit'])){

    require 'PHPMailerAutoload.php';

    // Send mail
    $mail = new PHPMailer();

    // Data received from POST request
    $name = stripcslashes($_POST['contactName']);
    $emailAddr = stripcslashes($_POST['contactEmail']);
    $subject = stripcslashes($_POST['contactSubject']);  
    $comment = stripcslashes($_POST['contactMessage']);
  
    // SMTP Configuration
    $mail->SMTPAuth = true; 
    $mail->IsSMTP();
    $mail->Host = "smtp.demo.com"; // SMTP server
    $mail->Username = "****@*****.com";
    $mail->Password = "***********";
    $mail->SMTPSecure = 'tls';   
    $mail->Port = 25; 

    $mail->AddAddress('****@*****.com');
    $mail->From = "****@*****.com";
    $mail->FromName = "Website Contact Form - " . $name;
    $mail->Subject = $subject;

    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';    
    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $mail->MsgHTML("Name:" . $name . "<br /><br />Email:" . $emailAddr. "<br /><br />Subject:" . $subject. "<br /><br />" . $comment);

    $message = NULL;
    if(!$mail->Send()) {
        $message = "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $message = "Message sent!";
    }

}
?>