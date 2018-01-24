<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form action="process.php" method="" ="POST">

		<h1>Mad Libs</h1>
	<ul>
	<li>
		<a href="index.php">Er Heerst Paniek....</a>
		<a href="onkunde.php">Onkunde</a>
	</li>
	</ul>
	<div id="container">
		<div id="content">
		<p>Er heerst paniek in het koningkrijk <?php echo $_POST['land'] ?>.
			</p><br>
			<p>
				Koning <?php echo $_POST['doc']?> is ten einde raad en als koning <?php echo $_POST['doc']?> ten einde raad is, dan roep hij zijn ten-einde-raadsheer <?php echo $_POST['naam']?>
			</p><br> 
			<p>
				"<?php echo $_POST['naam']?>! Het is een ramp! Het is een schande! "
			</p><br>
			<p>
				"Sire, Majesteit, Uwe Luidurchtigheid, wat is er aan de hand?"
			</p><br>
			<p>
				"Mijn <?php echo $_POST['dier']?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net Lego voor hem gekocht!"
			</p><br>
			<p>
				"Majesteit, uw <?php echo $_POST['dier']?> komt vast vanzelf terug?"
			</p><br>
			<p>
				"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['bezig']?> leren?"
			</p><br>
			<p>
				"Maar Sire, daar kunt u toch uw <?php echo $_POST['buy']?> voor gebruiken"
			</p><br>
			<p>
				"<?php echo $_POST['naam']?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
			</p><br>
			<p>
				" <?php echo $_POST['bezig']?>, Sire "
			</p><br>

			</div>
		</div>
	</div>
		<div id="footer">
		<p>deze website is gemaakt door: Mike Roest</p>
	</div>
</form>
</body>
</html>