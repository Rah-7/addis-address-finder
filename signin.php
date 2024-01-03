<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form input values
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate and process the form data
    // ...

    // Redirect or display a success message
    header('Location: signin-success.php');
    exit();
}
?>