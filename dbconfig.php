<?php
$servername = "localhost";
$username = "root"; // MY MySQL username
$password = ""; // MY MySQL password
$dbname = "urls";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
