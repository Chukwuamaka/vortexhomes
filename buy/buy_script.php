<?php

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$data = $firstName . "," . $lastName . "," . $phone . "," . $email;

$file = "buy.csv";

$to = "osujiugochukwu90@gmail.com, osujichukwuamaka@gmail.com";
$title = "New Form Submission from Buy Now Page";
$body = "A new visitor, " . $firstName . ", has completed the Buy Now form. View the changes to the spreadsheet here: http://vortexhomes.000webhostapp.com/markup/buy.csv";

mail($to, $title, $body);


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);

header("Location: ../submitted.html");

?>