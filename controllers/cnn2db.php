<?php
$servername = "localhost";
$database = "Negocio";
$username = "root";
$password = "password";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "a huevo mijo";
mysqli_close($conn);
?>