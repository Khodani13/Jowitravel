<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form fields are set and not empty
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {
        // Sanitize user input to prevent injection attacks
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

        // Your email address where you want to receive the messages
        $to = "your_email@example.com";

        // Email subject
        $subject = "New message from $name";

        // Email body
        $body = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Phone: $phone\n";
        $body .= "Message:\n$message";

        // Send email
        if (mail($to, $subject, $body)) {
            echo "<p>Thank you for your message. We will get back to you soon!</p>";
        } else {
            echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
        }
    } else {
        echo "<p>Please fill in all the required fields.</p>";
    }
}
?>
