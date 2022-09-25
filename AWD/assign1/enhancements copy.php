<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="COS100011 Assignment 1">
	<meta name="keywords"    content="COS100011, Assignment 1, Creating Web Applications">
	<meta name="author"      content="Scorlib Perjuangan Lexrin">
	<meta name="viewport"	 content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<title>Enhancements 1</title>
</head>
<body>
	<?php
		$page = "enhancementsPage";
		include_once("includes/header.inc");
		include_once("includes/nav.inc");
	?>

	<main>
		<h1 class="align-center" id="ehm-title">Enhancements of Assignment 3 (PHP, MySQL)</h1>
		<!-- First enhancement -->
		<section>
			<h2>Advanced manager reports</h2>			<!-- enhancement title -->
			<p class="align-center">					<!-- enhancement content -->
				Provide more advance options for manager reports, including: <br>
				<br><strong>1. Showing best selling product: </strong><br>I identified each individual product in order purchases using the strpos function,
				and then I incremented the appropriate product counter variable.<br>
					   Finally, I utilize two temporary variables to store the values for the best-selling product's name and the number of times it was sold.<br>
				<br><strong>2. Showing the customer has the highest bill:</strong><br>a mixture of in array() and array search()
				methods that allow me to change the list of customers and connect that list with a list of each customer's spending. <br>
					   Then, using two arrays, a for loop was used to find the client with the highest bill.<br>
				<br><strong>3. Calculate the average profit per transaction:</strong><br>Get the order cost and increment the number of orders by loading each record into an associative array.<br>
					   Total order cost divided by the number of orders yielded the average profit per transaction.<br>
				<br><strong>4. Showing the number of orders corresponding to status:</strong><br>Each entry is loaded into an associative array, and the order status is incremented and shown.<br>
			</p><br>
			<p class="align-center">View enhancement at the bottom of <a href="manager.php">manager page</a></p>		<!-- enhancement location -->
		</section>
		<br><br><br>

		<!-- Second enhancement -->
		<section>
			<h2>Sort orders by selected field:</h2>			<!-- enhancement title -->
			<p class="align-center">						<!-- enhancement content -->
				Allow the user to sort the table by a specific field. If the field is chosen again, the ascending and descending order can be toggled.
				This is accomplished with a session flag that may switch between ascending and descending order between sessions. When combining multiple sorting criteria,
				the sort query is carefully adjusted to avoid syntactic errors.<br>
			</p>
			<p class="align-center">View enhancement in <a href="manager.php">manager page</a></p>		<!-- enhancement location -->
		</section>
		<br>

		<a href="enhancements2.php"><button id="switchEnhancement">View enhancements of assignment 2</button></a>		<!-- button for switching enhancements.html and enhancements2.html -->
		<br><br>
	</main>

	<?php
		include_once("includes/footer.inc");
	?>
</body>
</html>
