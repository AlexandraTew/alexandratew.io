<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "alex.d.tew@gmail.com";  
    $subject = "Contact form submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect to a thank-you page
    header("Location: thankyou.html");
    exit;
}
?>
