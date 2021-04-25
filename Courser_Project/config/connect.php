<?php
 // connect to the database
  $dbservername = "localhost";
  $dbUsername   = "root";
  $dbPassword   = "";
  $dbName       = "coursere_loginsystem";

  $conn = mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbName);

  if(!$conn){
	   echo "Error: Unable to connect to MySQL." . PHP_EOL;
     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
     exit;
}
?>
