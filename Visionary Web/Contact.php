<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "Jamarfrazier52@gmail.com";
    $subject = "New Tattoo Form Submission";
    $name = $_POST["Name"];
    $phone = $_POST["Phone"];
    $message = $_POST["Message"];
    
    $body = "Name: $name\nPhone: $phone\nMessage: $message";
    
    // You may need to configure your server's mail settings.
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
