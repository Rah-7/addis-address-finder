<?php
include "connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact_table (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($mysqli->query($sql)) {
        // If the suggestion was successfully inserted into the database
        $insertedId = $mysqli->insert_id;
        $query = "SELECT name, email, message FROM contact_table WHERE id = $insertedId";
        $result = $mysqli->query($query);

        // Display the inserted data
        if ($result && $row = $result->fetch_assoc()) {
            echo "<p>name: " . $row['name'] . "</p>";
            echo "<p>email: " . $row['email'] . "</p>";
            echo "<p>message: " . $row['message'] . "</p>";

            // Thank you message
            echo "<h2>Thank you, " . $name . "!</h2>";
            echo "<p>Your message has been received.</p>";
        } else {
            echo "Error retrieving inserted data";
        }
    } else {
        echo "Error: " . $mysqli->error;
    }

    $mysqli->close();
}
?>

<a href="index.php">Click here to return to the main page</a>
