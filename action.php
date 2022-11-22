<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];
$subject = "New Contact Details from Lighthouse";

$mailheader = "From:".$name.  "<".$email.">\r\n";
$body = "Name: " .$name . "\r\n". "Number: " .$number. "\r\n". "Email: " .$email. "\r\n" ."Request: " .$message ;
// $body = "test";
$recipient = "tlhmi@tlhmi.org";

mail($recipient, $subject, $body, $mailheader) or die("Error!");

// header("Location: contact")

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index">homepage</a>.</p>
        
    </div>
</body>
</html>
';


?>