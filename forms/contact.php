<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = 'jasheshan011@gmail.com'; // Replace with your email address
    $headers = "From: $email\r\n";
    $message = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "success"; // You can customize this response as needed
    } else {
        echo "error"; // You can customize this response as needed
    }
} else {
    // Handle invalid requests
    echo "Invalid request";
}
?>
