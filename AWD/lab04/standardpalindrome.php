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
  if (isset ($_POST["str"])){ // check if form data exists 
    $str = $_POST["str"]; // obtain the form data 
    $rev = strrev($str);
    if(strcmp(strtolower($str), strtolower($rev))==true)
    {
      echo "The text you entered '$str' is a perfect palindrome";
      echo "<br/>$str - $rev";
    }
    else
    {
      echo "The text you entered '$str' is not a perfect palindrome";
    }
  }
  else
    echo "Please enter a string";
?> 
</body> 
</html> 