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
<h1>Web Programming - Lab 5</h1> 
<?php // read the comments for hints on how to answer each item 
  if ($_POST["item"] && $_POST["qty"]) {      // check if both form data exists 
    $item = $_POST["item"];    // obtain the form item data 
    $qty  = $_POST["qty"];    // obtain the form quantity data 
    if (!file_exists("../../data/lab05")) {
      umask(0007); 
      $dir = "../../data/lab05"; 
      mkdir($dir, 02770); 
    }
    $filename = "../../data/lab05/guestbook.txt"; // assumes php file is inside lab05 
    $handle = fopen($filename, "a"); // open the file in append mode 
    $data = "$item ".$qty."\n";      // concatenate item and qty delimited by comma 
    fwrite($handle, $data);     // write string to text file 
    fclose($handle);       // close the text file 
    echo "<p>Thank you for signing our guest book!</p> ";    // generate shopping list 
  } else {         // no input 
    echo "<p>You must enter your first and last name!</p>"; 
    echo "<p>Use the Browser’s ‘Go Back’ button to return to the form.</p>"; 
  } 
    echo "<a href='guestbookshow.php'>Show guest book.</a>";
?> 
</body> 
</html> 