<?php
if (isset($_POST['email'])) {
    $name = $_POST['firstname'] . " " . $_POST['lastname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "contact.AJBphotography@gmail.com"; // Your receiving email address
    $subject = "Website Contact: $subject";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: contact@ajbphotographs.com\r\nReply-To:$email"; // Use a domain-based email to avoid spam filters

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Error: Message could not be sent.";
    }
}
?>
