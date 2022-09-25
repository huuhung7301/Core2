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
<h1>Web Programming Form - Lab 6</h1> 
<form action = "guestbooksave.php" method = "POST" > 
  <fieldset>
  <legend>Enter your details to sign our guest book</legend>
  <label for="item">Name: </label>
  <input type="text" id="item" name="item"><br>

  <label for="qty">E-Mail: </label>
  <input type="text" id="qty" name="qty"><br><br>
  
  <input type="submit" value="sign">
  <input type="reset" value="reset">
  </fieldset>
</form> 
</body> 
</html> 
