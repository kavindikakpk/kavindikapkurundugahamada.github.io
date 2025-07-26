<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = "kavindikakpk@gmail.com";

    // Email subject
    $email_subject = "New Contact Form Submission: " . $subject;

    // Email body
    $email_body = "You have received a new message from your portfolio contact form.\n\n" .
                  "Here are the details:\n" .
                  "Name: $name\n" .
                  "Email: $email\n" .
                  "Subject: $subject\n" .
                  "Message:\n$message";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.'); window.location.href = 'index.html';</script>";
    }
} else {
    echo "<script>alert('Invalid request.'); window.location.href = 'index.html';</script>";
}
?>