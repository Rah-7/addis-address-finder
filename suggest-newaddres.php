
<?php
include "connect.php";
$institution_name = $_GET["institution_name"];
$new_detail_address = $_GET["new_detail_address"];

// Show all suggested addresses with institution name

echo "<h2>Try to suggest new address:</h2>";
echo "<p>institution_name: " . $institution_name . "</p>";
echo "<p>new_detail_address: " . $new_detail_address . "</p>";

$sql = "INSERT INTO suggested_address_list(id, institution_name, new_detail_address)
        VALUES (NULL, '$institution_name', '$new_detail_address')";

if ($mysqli->query($sql)) {
    // If the suggestion was successfully inserted into the database
    $insertedId = $mysqli->insert_id;
    $query = "SELECT institution_name, new_detail_address
              FROM suggested_address_list
              WHERE id = $insertedId";
    $result = $mysqli->query($query);

    // Display the inserted data
    if ($result && $row = $result->fetch_assoc()) {
        echo "<p>Institution Name: " . $row['institution_name'] . "</p>";
        echo "<p>Suggested Detail Address: " . $row['new_detail_address'] . "</p>";
        
        // Thank you message
        echo "<p>Your edit suggestion has been submitted successfully. Thank you for your contribution!</p>";
    } else {
        echo "Error retrieving inserted data";
    }
} else {
    echo "Error: " . $mysqli->error;
}

$mysqli->close();
?>
<a href="index.php">Return to main page</a>
