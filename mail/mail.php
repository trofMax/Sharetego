<?php

$recepient = "yaniv.segal@sharetego.com";
$siteName = "Sharetego";

$name = trim($_POST["name"]);
$lastName = trim($_POST["lastName"]);
$email = trim($_POST["email"]);
$subject = trim($_POST["subject"]);
$message = trim($_POST["message"]);
$message = "Name: $name \nLast Name: $lastName \nEmail: $email \nSubject: $subject \nMessage: $message";

$pagetitle = "From Sharetego \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>