<?php
include 'config.php';

$short_code = $_GET['code'];

$sql = "SELECT original_url FROM url_mappings WHERE short_code='$short_code'";
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
