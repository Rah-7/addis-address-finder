<?php
include "connect.php";
$subcity_name = $_GET["subcity_name"];
$wereda = $_GET["wereda"];

// Show all addresses with the subcity and wereda
echo "<h2>Show all addresses in $subcity_name, $wereda</h2>";
echo "<p>subcity_name: " . $subcity_name . "</p>";
echo "<p>wereda: " . $wereda . "</p>";

$sql = "SELECT id, subcity_name, wereda, phone, fax, email, website, detail_address FROM subcity_list WHERE subcity_name LIKE '%$subcity_name%' AND wereda LIKE '%$wereda%'";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<?php
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {

        echo "<i class='fas fa-building'></i> subcity name: " . $row["subcity_name"] . "<br>";
        echo "<i class='fas fa-map'></i> wereda: " . $row["wereda"] . "<br>";
        echo "<i class='fas fa-phone'></i> phone: " . $row["phone"] . "<br>";
        echo "<i class='fas fa-fax'></i> fax: " . $row["fax"] . "<br>";
        echo "<i class='fas fa-envelope'></i> email: " . $row["email"] . "<br>";
        echo "<i class='fas fa-globe'></i> website: " . $row["website"] . "<br>";
        echo "<i class='fas fa-address-card'></i> detail address: " . $row["detail_address"] . "<br><br>";
    }
} else {
    echo "0 results";
}

$mysqli->close();
?>
<a href="index.php">Return to main page</a>
</body>
</html>
