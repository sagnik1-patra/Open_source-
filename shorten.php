<?php
include 'dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $original_url = $_POST["url"];
    $shortened_url = generateUniqueCode();

    $sql = "INSERT INTO urls (short_code, original_url) VALUES ('$shortened_url', '$original_url')";

    if ($conn->query($sql) === TRUE) {
        echo "Shortened URL: http://short.url/{$shortened_url}";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

function generateUniqueCode() {
    $length = 6;

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';

    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $code;
}

?>
