<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];
$message = $_POST['message'];

// Set up email content
$to = 'networkrmxx@gmail.com';
$subject = 'Personal Portfolio Form Submission';
$body = "Name: $name\nEmail: $email\nProject: $project\nMessage: $message";
$headers = 'From: ' . $email;

// Send the email
if (mail($to, $subject, $body, $headers)) {
  // Email sent successfully
  echo 'Email sent successfully.';
} else {
  // Error sending email
  echo 'Error sending email.';
}
