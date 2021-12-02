<?php
$servername = "202.29.229.253";
$username = "it64309010009";
$password = "it123456";
$dbname = "it6430901009";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// $sql = "SELECT * FROM demo";
// $result = mysqli_query($conn, $sql);

$sql=mysqli_query($conn,"SELECT * FROM demo");

if (mysqli_num_rows($sql) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: ".$row["id"]." - Name: ".$row["name"]." - Address: ".$row["address"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>