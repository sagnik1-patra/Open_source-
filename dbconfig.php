<?php
$servername = "localhost";
$username = "root"; // MY MySQL username
$password = ""; // MY MySQL password
$dbname = "url";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
