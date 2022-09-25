<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8" /> 
  <meta name="description" content="Web application development" /> 
  <meta name="keywords" content="PHP" /> 
  <meta name="author"   content="Your Name" /> 
  <title>TITLE</title> 
</head> 
<body> 
<h1>Web Programming - Lab 4</h1> 
<?php // read the comments for hints on how to answer each item 
  if (isset ($_POST["___(1)___"])){ // check if form data exists 
    $str = $_POST["___(2)___"]; // obtain the form data 
    $pattern = "/^[A-Za-z ]+$/"; // set regular expression pattern 
    if (_______(3)________) {  // check if $str with regular expression 
  $ans = "";     // initialise variable for the answer 
      $len = _____(4)________; // obtain length of string $str 
for ($i = 0; $i < $len; $i++) {  // checks all characters in $str 
$letter = substr ($str, (5), 1);   // extract 1 char using substr  
// check using strops, is_numeric is used as strops returns a number 
// (position) if found, and false otherwise 
  if ((strpos ("AEIOUaeiou", (6))) === false){  
     $ans = $ans . $letter;   // concatenate letter to answer 
     } 
   } 
   // generate answer after all letters are checked 
      echo "<p>The word with no vowels is ", $ans, ".</p>"; 
    } else {    // string contains invalid characters 
   echo "<p>Please enter a string containing only letters or space.</p>"; 
    } 
  } else {      // no input 
    echo "<p>Please enter string from the input form.</p>"; 
  } 
?> 
</body> 
</html> 