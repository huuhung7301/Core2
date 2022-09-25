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
<h1>Web Programming Form - Lab 4</h1> 
<form action = "standardpalindromeself.php" method = "POST"> 
  <label for="str">Input a string:</label>
  <input type="text" id="str" name="str"><br><br>
  <input type="submit" value="Submit"> 
</form>  
<?php // read the comments for hints on how to answer each item 
  if (isset ($_POST["str"])){ // check if form data exists 
    $str = $_POST["str"]; // obtain the form data 
    $str2 = strtolower(preg_replace("([^A-Za-z0-9])", "", $str ));
    $rev = strtolower(strrev($str2));
    if($rev==$str2)
    {
      echo "The text you entered '$str' is a standard palindrome";
      echo "<br/>$str - $rev";
    }
    else
    {
      echo "The text you entered '$str' is not a standard palindrome";
    }
  }
  else
    echo "Please enter a string";
?> 
</body> 
</html> 