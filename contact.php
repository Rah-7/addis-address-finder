
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Perform validation and processing of form data here
    // ...

    // Send an email to the site admin
    $to = "admin@example.com";
    $subject = "New message from contact form";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    mail($to, $subject, $body, $headers);

    // Display a success message to the user
    echo "Thank you for contacting us!";
} else {
    // Redirect the user to the contact page if accessed directly
    header("Location: contact.html");
    exit();
}
?>