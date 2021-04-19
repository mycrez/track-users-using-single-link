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

$device = mysqli_real_escape_string($conn, $_POST['device']);
$useragent = mysqli_real_escape_string($conn, $_POST['useragent']);
$versions = mysqli_real_escape_string($conn, $_POST['versions']);


$sql = "INSERT INTO wadmin (device, useragent, versions)
VALUES ('$device', '$useragent', '$versions')";

if ($conn->query($sql) === TRUE) {

    header('Location: view_receipt.php');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>