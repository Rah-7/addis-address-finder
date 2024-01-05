<?php
include "connect.php";

// Get the username and password from the form submission
$user_name = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users_list WHERE user_name = '$user_name' AND password = '$password'";
$result = $mysqli->query($sql);

// Check if the query returned exactly one row
if ($result && $result->num_rows == 1) {
    $row = $result->fetch_assoc();

    // Store the signed-in username in the session variable
    session_start();
    $_SESSION['username'] = $row['user_name'];

    // Redirect the user to the main page
    header("Location: index.php");
    exit();
} else {
    echo "Incorrect username or password.";
}

$mysqli->close();
?>
<a href="index.php">Click here to return to the main page</a>
