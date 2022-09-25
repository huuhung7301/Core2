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
    $filename = "../../data/lab06/guestbook.txt"; // assumes php file is inside lab05 
    $handle = fopen($filename, "r"); // open the file in read mode 
     while (! feof($handle)) {    // loop while not end of file 
            $data = fgets($handle);       // read a line from the text file 
            echo "<p>", stripslashes($data), "</p>";    // generate HTML output of the data 
          } 
    fclose($handle);;       // close the text file 
  echo "<a href='guestbookshow.php'>Show guest book.</a>";
?> 
</body> 
</html> 