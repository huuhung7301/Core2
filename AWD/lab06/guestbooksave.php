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
    if (!file_exists("../../data/lab06")) {
      umask(0007); 
      $dir = "../../data/lab06"; 
      mkdir($dir, 02770); 
    }
    $filename = "../../data/lab06/guestbook.txt"; // assumes php file is inside lab05
    if (file_exists("../../data/lab06/")) { 
    $itemdata = [];                    // create an empty array 
    $handle = fopen($filename, "r");          // open the file in read mode 
    while (! feof ($handle)) {              // loop while not end of file 
      $onedata = fgets($handle);          // read a line from the text file 
      if ($onedata != "") {               // ignore blank lines 
        $data = explode(',', $onedata);                    // explode string to array 
        $alldata [] = $data;      // create an array element 
        $itemdata[] = $data [0];          // create a string element 
      }   
    } 
    fclose ($handle); 

    $handle = fopen($filename, "a"); // open the file in append mode 

    $newdata = !(in_array($item, $itemdata)); // check if item exists in array
   } 
    else { 
      $newdata = true;   // file does not exists, thus it must be a new data 
    } 
    if ($newdata) { 
        $handle = fopen($filename, "a");   // open the file in append mode 
        $data = $item . ", " . $qty . "\n"; // concatenate item and qty delimited 
                                           //               by comma 
        fputs($handle, $data);             // write string to text file 
        fclose ($handle);                  // close the text file 
    
  
    $alldata [] = array($item, $qty);  // add data to array 
    
      echo "<p>Guest list added</p>"; 
      echo "<p>Thank you for signing our guest book!</p> ";    // generate shopping list 
      $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
      if (preg_match($pattern, $qty)) { 
        echo "<p>Email address is valid.</p>"; 
      } else { 
        echo "<p>Email address is not valid.</p>"; 
      } 
  } else { 
      echo "<p> Already exists in guest list </p>"; 
    } 
  } else {         // no input 
    echo "<p>You must enter your name and email!</p>"; 
    echo "<p>Use the Browser’s ‘Go Back’ button to return to the form.</p>"; 
  } 
    echo "<a href='guestbookshow.php'>Show guest book.</a>";
?> 
</body> 
</html> 