<?php

$fullName = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$data = $fullName . "," . $phone . "," . $email . "," . $subject . "," . $message;

$file = "contact.csv";

$to = "osujiugochukwu90@gmail.com, osujichukwuamaka@gmail.com";
$title = "New Form Submission from Contact Us Page";
$body = "A new user, " . $fullName . ", has completed the Contact Us form. View the changes to the spreadsheet here: http://vortexhomes.000webhostapp.com/markup/contact.csv";

mail($to, $title, $body);

file_put_contents($file, $data . PHP_EOL, FILE_APPEND);

header("Location: submitted.html");

?>