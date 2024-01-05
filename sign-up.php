<?php
include "connect.php";
$user_name = $_POST["user_name"];
$email = $_POST["email"];
$password = $_POST["password"];

// Show all signup information
echo "<h2>Try to signup:</h2>";
echo "<p>user name: " . $user_name . "</p>";
echo "<p>email: " . $email . "</p>";
echo "<p>password: " . $password . "</p>";

$sql = "INSERT INTO users_list (user_name, email, password)
        VALUES ('$user_name', '$email', '$password')";

if ($mysqli->query($sql)) {
    // If the signup was successfully inserted into the database
    $insertedId = $mysqli->insert_id;
    $query = "SELECT user_name, email, password
              FROM users_list 
              WHERE id = $insertedId";
    $result = $mysqli->query($query);

    if ($result && $result->num_rows > 0) {
        // Display the inserted data
        $row = $result->fetch_assoc();
        echo "<p>user_name: " . $row['user_name'] . "</p>";
        echo "<p>email: " . $row['email'] . "</p>";
        echo "<p>password: " . $row['password'] . "</p>";
        // Thank you message
        echo "<p>Thank you for signing up!</p>";
    } else {
        echo "Error retrieving inserted data";
    }
} else {
    echo "Error: " . $mysqli->error;
}

$mysqli->close();
?>
<a href="index.php">Click here to return to the main page</a>

