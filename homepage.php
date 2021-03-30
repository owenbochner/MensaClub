<!DOCTYPE html>
<html>
	<head>
		<title>Mensa Club</title>
		<link href="homepage.css" rel="stylesheet">
	</head>
	<body>

		<div class="header">
			<img class="float" src="logo.png" alt="logo" height="80" width="80" >
			<h1>Mensa Club</h1>
		</div>

        <?php
        if(isset($_COOKIE['user'])) {
        ?>
		<div class="navbar">
  			<a href="tests.php">Take Our Tests</a>
  			<a href="leaderboard.php">Leader Board</a>
  			<a href="signout.php">Sign Out</a>
		</div>

        <?php
        }
        else {
        ?>

        <div class="navbar">
  			<a href="signup.php">Sign Up To Take Our Tests</a>
  			<a href="leaderboard.php">Leader Board</a>
  			<a href="signin.php">Sign In</a>
		</div>
        
        <?php
        }
        ?>

		<div class="card">
     	 	<center><h2>CAN YOU BE A PART OF MENSA?</h2>
      		<img src="testing.png" height="300" width="500">
      			</center>
      		<br>
      		<br>
      		<b><h2>How you qualify</h2></b>
      		<p>Mensa is the largest and oldest high IQ society in the world. It is a non-profit organization open to people who score at the 98th percentile or higher on a standardised, supervised IQ or other approved intelligence test.</p>
      		<h2>What do our tests consist of?</h2>
      		<p>6 levels of difficulty that test for comprehension, attention, and reasoning skills. An intelligence quotient is a total score derived from a set of standardized tests or subtests designed to assess human intelligence. The abbreviation "IQ" was coined by the psychologist William Stern for the German term Intelligenzquotient, his term for a scoring method for intelligence tests at University of Breslau he advocated in a 1912 book. Historically, IQ was a score obtained by dividing a person's mental age score, obtained by administering an intelligence test, by the person's chronological age, both expressed in terms of years and months. The resulting fraction was multiplied by 100 to obtain the IQ score. For modern IQ tests, the raw score is transformed to a normal distribution with mean 100 and standard deviation 15. This results in approximately two-thirds of the population scoring between IQ 85 and IQ 115 and about 2.5 percent each above 130 and below 70. Scores from intelligence tests are estimates of intelligence.</p>
    	</div>
  	
  
			

<?php include("footer.html") ?>
	
