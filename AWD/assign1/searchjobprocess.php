<! This project belongs to Pham Huu Hung - Close 8/9/22 ––> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8" /> 
  <meta name="description" content="Web application development" /> 
  <meta name="keywords" content="PHP" /> 
  <meta name="author"   content="Pham Huu Hung" /> 
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>TITLE</title> 
</head> 
<body>
<?php
    include_once("header.inc");
?>
<section class="iana" id="enhancement2">
    <h1>    
        <span> - Search job result - </span>
    </h1> 
</section>

<?php
  if (isset($_GET["title"])) 
  {      // check if all form data exists 
    $title  = $_GET["title"];

    $position = (isset($_GET["position"])) ? $_GET["position"] : "null";
    $contract = (isset($_GET["contract"])) ? $_GET["contract"] : "null";
    $post = (isset($_GET["post"])) ? $_GET["post"] : "null";
    $mail = (isset($_GET["mail"])) ? $_GET["mail"] : "null";
    $location = (isset($_GET["location"])) ? $_GET["location"] : "null";

    if (file_exists("../../data/jobposts")) {
      $filename = "../../data/jobposts/jobs.txt"; // assumes php file is inside lab05 
      $handle = fopen($filename, "r"); // open the file in read mode 
      echo "<p>Jobs found:</p>";
      $alldata = array();
      $adate = array();

      while (! feof ($handle)) 
      {              // loop while not end of file 
        $s = true;  //5 check criteria
        $p = true;
        $c = true;
        $a = true;
        $l = true;

        $onedata = fgets($handle); // read a line from the text file 
        $data = explode("\t", $onedata);
        strpos(trim("$data[1]"," "), trim("$title", " "));

        if (strpos(trim("$data[1]"," "), trim("$title", " ")) === false) //return false if search title not found
        {$s=false;}

        if (($position != "null") && (trim($position," ") != trim($data[4]," "))) //position is false
        {$p=false;}

        if ($contract != "null" && trim($contract," ") != trim($data[5]," "))//contract is false
        {$c=false;}

        if (($post != "null" && trim($post," ") != trim($data[7]," "))||($mail != "null" && trim($mail," ") != trim($data[8]," ")))//post or mail is false
        {$a=false;}

        if ($location != "" && trim($location, " ") != trim($data[6], " ")) //location is false
        {$l=false;}
        if ($s == true && $p == true && $c == true && $a == true && $l == true)
          {
            $alldata [] = $data;
            $adate [] = $data[3];
          } 
        } //copy to a new array if all condition pass
      fclose($handle);       // close the text file
      sort($adate);
      $today = date("Y-m-d"); //set the today date
      foreach ($adate as $a) //double loop to print with sorted date
      {
        foreach ($alldata as $all) {   // loop using for each
          if(trim($all[3])==trim($a) && trim($all[3]) > $today)
          {
            echo "<p>Job Title: $all[1] </p>";
            echo "<p>Description: $all[2] </p> ";
            echo "<p>Closing Date: $all[3]</p>";
            echo "<p>Position: $all[4] </p>";
            echo "<p>Contract: $all[5] </p>";
            echo "<p>Application by: $all[7], $all[8] </p>";
            echo "<p>Location: $all[6] </p>";
            echo "<br><br>";
          }
        }
      }
 
      echo "<a href='index.php'>Home page</a>";
      echo "<a href='searchjobform.php'>Search for another job vacancy</a>";
      // generate shopping list 
    }
    else {
      echo "<p>No file found, please return to home page or search job page</p>";
      echo "<a href='index.php'>Home page</a>";
      echo "<a href='postjobform.php'>Search Job Page</a>";
    }
  } 
  else {         // no input 
    echo "<p>You have not input title of the job, please return</p>";
    echo "<a href='index.php'>Home page</a>";
    echo "<a href='postjobform.php'>Search Job Page</a>";
  } 
?>
<?php
    include_once("footer.inc");
?> 
</body> 
</html> 