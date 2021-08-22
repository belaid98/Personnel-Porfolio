<?php

  if(!empty($_POST["envoyer"])) {

    $nom = $_POST['name'];
    $mail = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $toEmail = "waelbelaid205@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, $subject, $message, $mailHeaders)) {
      $mail_msg = "Vos informations de contact ont été reçues avec succés.";
      $type_mail_msg = "success";
    }else{
      $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
      $type_mail_msg = "error";
    }






?>