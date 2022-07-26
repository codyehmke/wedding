<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Our Wedding</title>
		<link href="styles.css" rel="stylesheet" type="text/css"/>
		<link href="pictures.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" type="image/png" href="img/favicon2.png" />
		<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	</head>
<body>
<?php
require_once("header.php");
?>
<div>
	<img src="img/us7.jpg" class="us7">
</div>

	<div class="secondbase">
		<div class="hometxt" style="color: #00405C";>
			<div>
				<p>Thank you for being a friend of ours, 
					we are so blessed and grateful to have so many wonderful friends in our lives.
					We hope to at the very least return the favor. As we join hands in marriage we
					also hope to never fail to extend our hands to you and be there for you in need.
					Thank you, for being there for us and lifting our spirits throughout our lives!</p>
			</div>
		</div>
	</div>
	<div class="thirdbase">
		<div class="infotxt">
			<div>
				<h1 id="infotitle">Time</h1>
				<h2>October 1st, Saturday</h2>
				<h2>1:30pm-5:00pm</h2>
			</div>
			<br><br>
			<div>
				<h1 id="infotitle">Location</h1>
				<h2>Wylie Northeast Church</h2>
				<h2>100 W Oak st, Wylie</h2>
			</div>
		</div>
	</div>
	<div class="hometxt" style="color: #00405C";>
		<div>
			<div>
				<img src="img/us3.jpg" class="us7">
			<p>We are excited to see you!</p>
			</div>
		</div>
	</div>
</div>

<?php
require_once("footer.php");
?>

</div>
<footer class="foot">
	<p>Designed by yours truly, Cody</p>
</footer>
</body>
</html>
