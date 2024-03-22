<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<title>Using string functions</title> 
</head> 
<body> 
<h1>Lab03 Task 3 - Standard Palindrone</h1> 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phrase = $_POST['phrase'];

    // Remove all non-alphanumeric characters and convert to lowercase
    $cleaned = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $phrase));
    $reversed = strrev($cleaned);

    if ($cleaned === $reversed) {
        echo "<p>'$phrase' is a standard palindrome!</p>";
    } else {
        echo "<p>'$phrase' is not a standard palindrome.</p>";
    }
} else {
    echo "<p>Please submit a phrase to check for a standard palindrome.</p>";
}
?>
</body> 
</html> 