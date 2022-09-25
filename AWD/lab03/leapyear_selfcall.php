<!DOCTYPE html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<meta name="description" content="Web Application Development :: Lab 1" /> 
<meta name="keywords" content="Web,programming" /> 
<title>Using if and while statements</title> 
</head> 
<body> 
<h1>Web Programming - Lab 3</h1> 
<form action = "leapyear_selfcall.php" method = "GET" > 
   <label for="year">Input a number:</label>
  <input type="text" id="year" name="year"><br><br>
  <input type="submit" value="Submit"> 
</form> 

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