<!DOCTYPE html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<meta name="description" content="Web Application Development :: Lab 1" /> 
<meta name="keywords" content="Web,programming" /> 
<title>Using if and while statements</title> 
</head> 
<body> 
<?php 
  include ("mathfunctions.php"); 
?> 
<h1>Web Programming - Lab 3</h1> 
<?php 
  if (isset ($_GET["year"])) {  // check if form data exists 
    $year = $_GET["year"];  // obtain the form data 
    if ($year % 400 == 0)
         print("It is a leap year");
      else if ($year % 100 == 0)
         print("It is not a leap year");
      else if ($year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
     }
    else {      // no input 
    echo "<p>Something is wrong.</p>"; 
  } 
?> 


</body> 
</html> 