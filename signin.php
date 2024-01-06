<?php
include "connect.php";
$user_name = $_POST["username"];
$password = $_POST["password"];

// Show all sign-in information
echo "<h2>Welcome $user_name</h2>";

$sql = "SELECT * FROM users_list WHERE user_name = '$user_name' AND password = '$password'";
$result = $mysqli->query($sql);

if ($result && $result->num_rows == 1) {
    echo "Sign in successful!";
} else {
    echo "Incorrect username or password.";
}

$mysqli->close();
?>

<a href="index.php">Click here to return to the main page</a>

