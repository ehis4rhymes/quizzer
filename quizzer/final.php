<?php include 'database.php'; ?>
<?php session_start(); ?>

<?php
   //Get total questions
   $query = "SELECT * FROM `questions`" ;

   //Get results
   $results = $mysqli->query($query) or die($mysqli->error.__LINE__);

   $total = $results->num_rows;

   $score = $_SESSION['score'];
   
   $percent_score = ($score/$total) * 100;

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>PHP Quizzer</title> 
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<header>
			<div class="container">
				<h1>PHP Quizzer</h1>
			</div>
		</header>
		<main>
			<div class="container">
			<h2>You are done!</h2>
			<p>Congrats you have completed the test.</p>
			<p>Final Score: <?php echo $score; ?> / <?php echo $total; ?></p>
			<p>Percentage Score: <?php echo $percent_score; ?>%</p>
			<a href="index.php" class="start">Retake Quiz</a>
			</div>
		</main>
		<footer>
			<div class="container">
				copyright &copy; 2020, PHP Quizzer.
			</div>
		</footer>
	</body>
</html>