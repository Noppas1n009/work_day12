<?php
$servername = "localhost";
$username = "it64309010009";
$password = "it123456";
$dbname = "it64309010009";

$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8mb4");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// $sql = "SELECT * FROM demo";
// $result = mysqli_query($conn, $sql);

$sql=mysqli_query($conn,"SELECT * FROM demo");

if (mysqli_num_rows($sql) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($sql)) {
    echo "id: ".$row["id"]." - Name: ".$row["name"]." - Address: ".$row["address"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>