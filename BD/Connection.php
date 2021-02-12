<?php
$servername = "localhost";
$database = "TejidoDigital";
$username = "root";
$password = "";
// Create connection
$Connection = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$Connection) {
      die("Connection failed: " . mysqli_connect_error());
}
?>