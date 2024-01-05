<?php
// retrieve all data from the "address" table
 
$sql = "SELECT id, institution_name, subcity, phone, fax, email, website, detail_address FROM address";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . "  institution name: " . $row["institution_name"] ."  subcity: "  . $row["subcity"] . "  phone: " . $row["phone"] . "  fax:  " . $row["fax"] 
      . "  email:  " . $row["email"] . "  website:  " . $row["website"] . "  detail address:  " . $row["detail_address"] . "<br>";
  }
} else {
  echo "0 results";
}



$mysqli->close();
?>
 
 

