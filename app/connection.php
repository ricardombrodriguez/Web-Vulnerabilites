<?php
$servername = "spoton";
$username = "admin";
$password = "admin";
$databasename = "spoton";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

/////////////////// para imprimir dados da base de dados ///////////////////

/* $sql = "SELECT * FROM trips";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " " . $row[2]. "<br>";
  }
} else {
  echo "0 results";
} */

////////////////////////////////////////////////////////////////////////////

if (isset($_POST['searchbtn'])) {
  $string = $_POST['searchitem'];

  $conn->query("SELECT * FROM trips") or die($conn->error);
} 
?>

