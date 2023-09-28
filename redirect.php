<?php
include 'dbconfig.php';

$short_code = $_GET['code'];

$sql = "SELECT original_url FROM urls WHERE short_code='$shortened_url'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $original_url = $row["original_url"];
    header("Location: $original_url");
} else {
    echo "Short URL not found!";
}

$conn->close();
?>
