<!DOCTYPE html> 
<html lang="en"> 
<head> 
 <title>My First PHP webpage</title> 
  <meta charset="utf-8"> 
  <meta name="description" content="AWD"> 
  <meta name="keywords" content="HTML, CSS, JavaScript"> 
  <meta name="author" content="Simon"> 
</head> 
<body>
<h1>Forestville Credit Union</h1> 
<h2>CD Rates</h2>

<?php 
/* Use of abs() and pow() built-in functions, and echo statement. */ 
echo"<ul>";
  echo "<li> 4.35% (36-Month Term CD)</li>"; 
  echo "<li> 3.85% (12-Month Term CD)</li>"; 

  /* Use of decbin() and bindec() functions. */ 
  echo "<li> 2.65% (6-Month Term CD)</li>"; 
  echo"</ul>";
?> 

<?php
  echo "<p>$1,000 munium deposit.</p>";
  echo "<p>My name is Simon</p>";
  echo "Today is " . date("Y/m/d") . "<br>";
?>
</body>
</html>