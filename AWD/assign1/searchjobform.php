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
    <?php
    include_once("header.inc");
    ?>
    <section class="iana" id="enhancement2">
        <h1>    
            <span> - Search job form - </span>
        </h1>
        
    </section>

    <section>
        <h1 class="align-center">Job Vacancy Posting System</h1>
            <!-- Form -->
            <form class="container" method="GET" action="searchjobprocess.php" id="postjobform">
                    <p>
                        <label for="title">Job title:</label>
                        <input type="text" name="title" id="title" maxlength="30" size="30"
                            pattern="[a-zA-Z.-]{1,30}" required="required" />
                    </p>

                    <p>Position:</p>
                    <input type="radio" id="fulltime" name="position" value="fulltime">
                    <label for="fulltime">Full Time</label><br>
                    <input type="radio" id="parttime" name="position" value="parttime">
                    <label for="parttime">Part Time</label><br>

                    <p>Contract:</p>
                    <input type="radio" id="ongoing" name="contract" value="fulltime">
                    <label for="ongoing">On-going</label><br>
                    <input type="radio" id="fixedterm" name="contract" value="parttime">
                    <label for="fixedterm">Fixed Term</label><br>

                    <p>Application by:</p>
                    <input type="checkbox" id="post" name="post" value="post">
                    <label for="post">Post</label><br>
                    <input type="checkbox" id="mail" name="mail" value="mail">
                    <label for="mail">Mail</label><br>

                    <label for="location">Location:</label>
                    <select name="location" id="location">
                      <option></option>
                      <option value="VIC">VIC</option>
                      <option value="NSW">NSW</option>
                      <option value="QLD">QLD</option>
                      <option value="WA">WA</option>
                      <option value="SA">SA</option>
                      <option value="TAS">TAS</option>
                    </select>

                <!-- Submit button -->
                <input class="button" type="submit" value="Search"/>
            </form>
            <a href="index.php">Return to Home Page</a>
    </section>

    <!-- Footer -->
    <?php
    include_once("footer.inc");
    ?>
</body>
</html>
