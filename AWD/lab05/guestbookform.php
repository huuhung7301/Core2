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
<h1>Web Programming Form - Lab 5</h1> 
<form action = "guestbooksave.php" method = "POST" > 
  <fieldset>
  <legend>Enter your details to sign our guest book</legend>
  <label for="item">First Name</label>
  <input type="text" id="item" name="item"><br>

  <label for="qty">Last Name</label>
  <input type="text" id="qty" name="qty"><br><br>
  
  <input type="submit" value="Submit">
  </fieldset>
</form> 
</body> 
</html> 