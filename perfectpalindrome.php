<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<title>Using string functions</title> 
</head> 
<body> 
<h1>Lab03 Task 2 - Perfect Palindrone</h1> 
<?php
if (isset($_POST["input"])) { // check if form data exists
    $phrase = $_POST["input"];
    $cleaned = strtolower(str_replace(" ", "", $phrase));
    $reversed = strrev($cleaned);

    if($cleaned == $reversed){
        echo "<p>The phrase is a perfect palindrome.</p>";
    } else {
        echo "<p>The phrase is not a perfect palindrome.</p>";
    }
}
?>
</body> 
</html> 