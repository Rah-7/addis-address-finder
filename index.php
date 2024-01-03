<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
 <h1>WELCOME TO  ADDIS ADDRESS FINDER</h1>
 
 <?php
include "connect.php";
//include "searchall.php";
?>

 <form action="searchkey-word.php">
 Please enter institution name search for:<br><br>
  <input type="text" id="fname" name="keyword"><br><br>
 
  <input type="submit" value="Submit">
</form>


 
 <?php
 //include "searchkey-word.php";
 $mysqli->close();
 
 ?>
 
 
 	</body>
	</html>

  