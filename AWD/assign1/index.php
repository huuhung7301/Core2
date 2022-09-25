<! This project belongs to Pham Huu Hung - Close 8/9/22 ––> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="COS100011 Assignment 1">
	<meta name="keywords"    content="COS100011, Assignment 1 - Creating Web Applications">
	<meta name="author"      content="Pham Huu Hung">
	<meta name="viewport"	 content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="scripts/enhancements.js"></script>
	<title>Home</title>
</head>

<body>
	<?php
	include_once ("header.inc");
	?>
	<section class="iana" id="enhancement2">
		<h1>	
			<span> - Job Vacancy Posting System - </span>
		</h1>

		<form action="postjobform.php">
			<button type="submit" value="post job">
			Post a job vacancy</button>
		</form>
		<form action="searchjobform.php">
			<button type="submit" value="search job">
			Search a job vacancy</button>
		</form>
		
	</section>

	<article>
		<p>Name: Pham Huu Hung (Simon)</p>
		<p>Student ID: 102643407</p>
		<p>Email: 102643407@swin.edu.au</p>
		<br>
		<p>I declare that this assignment is my individual work. I have not worked 
		collaboratively nor have I copied from any other student’s work or from any other source.”</p>
	</article>

	<a href='about.php'>About this assignment</a>
	<br>
    <?php
	include_once ("footer.inc");
	?>

</body>
</html>
