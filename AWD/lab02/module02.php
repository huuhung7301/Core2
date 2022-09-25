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
<?php 
  $marks = array (85, 85, 95); // declare and initialise array 
  $marks[1] = 90;
  $sum=0;    // modify second element 
  foreach ($marks as &$value) {
    $sum += $value;
}
  $ave = $sum / count($marks); // compute average 
  ($ave >= 50)    // checks status 
   ? $status = "PASSED" 
   : $status = "FAILED" ; 
 
  echo "<p>The average score is $ave. You $status</p>"; 
?> 
</body> 
</html>