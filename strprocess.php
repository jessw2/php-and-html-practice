<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<title>Using string functions</title> 
</head> 
<body> 
<h1>Web Development – Lab 3</h1> 
<?php
  if (isset($_POST["input"])) { // check if form data exists
    $str = $_POST["input"]; // obtain the form data
    $pattern = "/^[A-Za-z ]+$/"; // set regular expression pattern
    if (preg_match($pattern, $str)) { // check if $str with regular expression
      $ans = ""; // initialise variable for the answer
      $len = strlen($str); // obtain length of string $str
      for ($i = 0; $i < $len; $i++) { // checks all characters in $str
        $letter = substr($str, $i, 1); // extract 1 char using substr
        // check using strpos, is_numeric is used as strpos returns a number (position) if found, and false otherwise
        if (!is_numeric(strpos("AEIOUaeiou", $letter))) {
          $ans = $ans . $letter; // concatenate letter to answer
        }
      }
      // generate answer after all letters are checked
      echo "<p>The word with no vowels is ", $ans, ".</p>";
    } else {
      echo "<p>Please enter a string containing only letters or space.</p>";
    }
  } else {
    echo "<p>Please enter string from the input form.</p>"; // no input
  }
?>

</body> 
</html> 