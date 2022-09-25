<! This project belongs to Pham Huu Hung - Close 8/9/22 ––> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="COS100011 Assignment 1">
	<meta name="keywords"    content="COS100011, Assignment 1 - Creating Web applications">
	<meta name="author"      content="Pham Huu Hung">
	<meta name="viewport"	 content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> 
	<script src="scripts/quiz.js"></script>
	<script src="scripts/enhancements.js"></script>
    <title>Quiz</title>

</head>
<body>
    <?php //include header
    include_once("header.inc");
    ?>
    <section class="iana" id="enhancement2">
        <h1>    
            <span> - About page - </span>
        </h1> 
    </section>

    <h1>About page presenting what I have done</h1>
    <ul>
        <?php
        $v = phpversion(); //the function to know php version
        echo "<li>The PHP version instaled in mercury: $v</li>";
        ?>
    <li>I have completed all tasks</li>
    <li>I only focus on what can give me points for this project, so I did not expand anything</li>
    </ul>
    <br>
    <h2>Screenshot Image:</h2>
    <img src="style/screenshot.png" alt="screenshot" width="500" height="333">

    <p>I did not join the discussion, as I start this assignment really late and a lot of questions have been answered</p>

    <a href= 'index.php'>Return to Home Page</a>
    
    <?php
    include_once("footer.inc");
    ?>
</body>
</html>
