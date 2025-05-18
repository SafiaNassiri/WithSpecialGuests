<?php
// This code works when the contact form is sent.
// It gets the name, email, and message from the form,
// cleans the data to keep it safe,
// sends an email with the message to the band,
// and then sends you back to the contact page saying if it worked or not.

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $to = "yourband@email.com"; //this is a stand in
  $subject = "New Contact Form Message";
  $body = "From: $name\nEmail: $email\n\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    header("Location: /contact.php?success=1");
  } else {
    header("Location: /contact.php?error=1");
  }
  exit;
}
