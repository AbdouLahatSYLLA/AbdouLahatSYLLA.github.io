<?php

$count = 1;
$VISITEURS = [];

$nom = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sujet = $_POST['subject'];
$text = "visiteur $count : { nom : $nom , email : $email , message = \n $message }";
echo $text ;
$to = "lahat044@gmail.com";
$headers = "From: $email" . "\r\n" .
     "Reply-To: $to" . "\r\n" .
     'X-Mailer: PHP/';

     mail($to, $sujet, $message, $headers);
?>