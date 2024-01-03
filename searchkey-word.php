
<?php
include "connect.php";
$keywordfromform = $_GET["keyword"];
// show all addresses with the keyword
echo "<h2>Show all addresses with the word '$keywordfromform'</h2>";
$sql = "SELECT id, institution_name, subcity, phone, fax, email, website, detail_address FROM address WHERE institution_name LIKE '%$keywordfromform%'";
$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . "<br>";
    echo "institution name: " . $row["institution_name"] . "<br>";
    echo "subcity: " . $row["subcity"] . "<br>";
    echo "phone: " . $row["phone"] . "<br>";
    echo "fax: " . $row["fax"] . "<br>";
    echo "email: " . $row["email"] . "<br>";
    echo "website: " . $row["website"] . "<br>";
    echo "detail address: " . $row["detail_address"] . "<br><br>";
  }
} else {
  echo "0 results";
}

$mysqli->close();
?>

