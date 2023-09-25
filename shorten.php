<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['url'];

    // Generate a unique code (you can use a library or algorithm for this)
    $code = generateUniqueCode();

    // Save the URL and code to a database or file (for simplicity, we'll use a file)
    file_put_contents('urls.txt', "$code,$url\n", FILE_APPEND);

    // Return the shortened URL
    $shortened_url = "http://example.com/$code";
    echo "Shortened URL: <a href=\"$shortened_url\">$shortened_url</a>";
} else {
    header('Location: index.php');
}
?>