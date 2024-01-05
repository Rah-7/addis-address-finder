<?php
include "connect.php";
$keywordfromform = $_GET["keyword"];
// show all addresses with the keyword
echo "<h2>All addresses with the word $keywordfromform</h2>";
$sql = "SELECT id, institution_name, subcity, phone, fax, email, website, detail_address FROM address WHERE institution_name LIKE '%$keywordfromform%'";
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
  
    echo "<i class='fas fa-building'></i> institution name: " . $row["institution_name"] . "<br>";
    echo "<i class='fas fa-map'></i> subcity: " . $row["subcity"] . "<br>";
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
