<?php
$code = $_GET['code'];

// Read the URLs from the file and find the corresponding URL for the code
$lines = file('urls.txt');
foreach ($lines as $line) {
    list($saved_code, $url) = explode(',', trim($line));
    if ($saved_code === $code) {
        header("Location: $url");
        exit();
    }
}

// If code not found, redirect to homepage
header('Location: index.php');
?>