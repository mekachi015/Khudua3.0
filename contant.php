<?php

$to = "abielmakoti@gmail.com";
$subject = "Inquiry from Khudua.co.za";

$fullname = $_POST['fullname'];
$cellphone = $_POST['cellphone'];
$email = $_POST['email'];
$questions = $_POST['questions'];


$message = "Full Name: $fullname\n";
$message .= "Cell phone number : $cellphone\n";
$message .= "Email Address: $email\n";
$message .= "Questions/Comments : \n$questions";

//send mail
mail($to, $subject, $message);

//Redirect to website after submission
?>