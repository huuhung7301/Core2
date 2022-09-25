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
        <span> - Post job result - </span>
    </h1> 
</section>

<?php 
  if (isset($_POST["id"]) && isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["date"]) && isset($_POST["position"]) && isset($_POST["contract"]) && isset($_POST["location"]) && (isset($_POST["post"]) || isset($_POST["mail"])))  // check if all form data exists 
  {     
    $id = $_POST["id"];    
    $title  = $_POST["title"];
    $des = $_POST["description"];    
    $date  = $_POST["date"];
    $position = $_POST["position"];    
    $contract  = $_POST["contract"];
    $location = $_POST["location"];
    if(isset($_POST["post"]))    
      {$post = $_POST["post"];}
    else
      {$post = "null";}
    if(isset($_POST["mail"])) 
      {$mail = $_POST["mail"];}
    else 
      {$mail = "null";}    
    
        // create the directory
    if (!file_exists("../../data/jobposts")) {
      umask(0007); 
      $dir = "../../data/jobposts"; 
      mkdir($dir, 02770); 
    }
    $filename = "../../data/jobposts/jobs.txt"; // assumes php file is inside lab05
    $handle = fopen($filename, "r");
    $idcheck=0;
    while (! feof ($handle)) 
    {
      $onedata = fgets($handle); // read a line from the text file 
      $data = explode("\t", $onedata);
      if(trim("$data[0]"," ")== trim("$id", " "))
      {
        $idcheck=1;
      }
    }
    fclose($handle);
    if($idcheck==0)
      {
        $handle = fopen($filename, "a"); // open the file in append mode 
        $data = "\n$id\t$title\t$des\t$date\t$position\t$contract\t$location\t$post\t$mail";      // concatenate item and qty delimited by comma 
        fwrite($handle, $data);     // write string to text file 
        fclose($handle);       // close the text file 
        echo "<p>Job posted successfully!</p>";
        echo "<a href='index.php'>Home page</a>";
      }
      else{
        echo "<p>Input ID already existed</p>";
      }
    // generate shopping list 
  } else {         // no input 
    echo "<p>All fields are mandatory, return to the Home page or Post Job Vacancy page</p>";
    echo "<a href='index.php'>Home page</a>";
    echo "<a href='postjobform.php'>Post Job Form</a>";

  } 
?>
<?php
    include_once("footer.inc");
?> 
</body> 
</html> 