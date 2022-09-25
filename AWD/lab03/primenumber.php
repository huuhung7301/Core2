<!DOCTYPE html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<meta name="description" content="Web Application Development :: Lab 1" /> 
<meta name="keywords" content="Web,programming" /> 
<title>Using if and while statements</title> 
</head> 
<body> 
<h1>Web Programming - Lab 3</h1> 
<?php 
  if (isset ($_GET["year"])) {  // check if form data exists 
    $year = $_GET["year"];
    if (is_prime($year))
    {
    echo "<p>It is a prime number.</p>"; 
    }  // obtain the form data 
    else {      // no input 
    echo "<p>It is not a prime number.</p>"; 
  }
} 

  function is_prime($n){
    $num=0;
    for($i = 2; $i < ($n/2+1); $i++) {
      if($n % $i == 0){
        $num++;
        break;
      }
    }

    if ($num == 0){
      return true;
    } else {
      return false;
    }
  }
?> 

</body> 
</html> 