<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databasename";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$latlong = mysqli_real_escape_string($conn, $_GET['latlong']);


$sql = "INSERT INTO wadmin (latlong)
VALUES ('$latlong')";

if ($conn->query($sql) === TRUE) {

    header('Location: wrong.php');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>