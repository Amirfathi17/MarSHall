<?php

$user = $_POST['email'];
$passwords = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my-db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users(ID, username, passwords) VALUES ('','$user','$passwords')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>