<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<meta name="description" content="Web Programming :: Lab 2" /> 
<meta name="keywords" content="Web,programming" /> 
<title>Using variables, arrays and operators</title> 
</head> 
<body> 
<h1>Web Programming - Lab 2</h1> 
<form action="" method="post">
  <p><label for="a">Input a number:</label></p>
  <textarea id="a" name="a" rows="4" cols="50">
  </textarea>
  <br>
  <input type="submit" value="Submit">
</form>

<?php 
  $num=$_POST['a'];
  if(is_numeric($num))
  {
    if(is_int($num))
    {
      if($num%2 == 0)
      {
        echo "The variable $num contains an even number";
      }
      else echo "The variable $num does not contain an even number";
    }
    $round = round($num);
    if($round%2 == 0)
    {
      echo "The variable $round contains an even number";
    }
    else
    {
      echo "The variable $round does not contain an even number";
    }
  }
  else
  {
    echo"You did not enter a number";
  }
?> 
</body> 
</html>