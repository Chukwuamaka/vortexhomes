<?php

$fullName = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$property_name = $_POST['property_name'];
$message = $_POST['message'];
$data = $fullName . "," . $phone . "," . $email . "," . $property_name . "," . $message;

$file = "enquiry.csv";

$to = "osujiugochukwu90@gmail.com, osujichukwuamaka@gmail.com";
$title = "New Property Enquiry";
$body = "A new visitor, " . $fullName . ", has completed the Property Enquiry form for " . $property_name . ". View the changes to the spreadsheet here: http://vortexhomes.000webhostapp.com/markup/enquiry.csv";

mail($to, $title, $body);

file_put_contents($file, $data . PHP_EOL, FILE_APPEND);

header("Location: submitted.html");

?>