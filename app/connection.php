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
echo "Connected successfully";




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

// Check that user sent some data when creating account 
// if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass'])){

//   $name=preg_replace('/[^a-zA-Z0-9\ ]/','',$_POST['name']);
//   $email=preg_replace('/[^a-zA-Z0-9\ ]/','',$_POST['email']);
//   $pass=preg_replace('/[^a-zA-Z0-9\ ]/','',$_POST['pass']);

//     /* Escape your input: use htmlspecialchars to avoid most obvious XSS attacks.
//      * Note: Your application may still be vulnerable to XSS if you use variables in an attribute without proper quoting.
//      */

//     $name=htmlspecialchars($name);
//     $email=htmlspecialchars($email);
//     $pass=htmlspecialchars($pass);

//   // $name = $_POST['name'];
//   // $email = $_POST['email'];
//   // $pass = $_POST['pass'];

//   $sql = "INSERT INTO users (name, email, pass) VALUES ('{$name}', '{$email}', '{$pass}')";

//   if ($conn->query($sql)) {
//     echo "New user added successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }

// }
?>

