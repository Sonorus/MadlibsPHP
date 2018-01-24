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
		<p>Er zijn veel mensen die niet kunnen <?php echo $_POST['skill']?>.
			</p><br>
		<p>Neem nou <?php echo $_POST['persoon']?>.
			</p><br>
		<p>Zelfs met de hulp van een <?php echo $_POST['vak']?> of zelfs <?php echo $_POST['num']?> kan <?php echo $_POST['persoon']?> niet <?php echo $_POST['skill']?>.
			</p><br>
		<p>Dat heeft niet te maken met een gebrek aan <?php echo $_POST['beig']?>, maar met een te veel aan <?php echo $_POST['seig']?>.
			</p><br>
		<p>Te veel <?php echo $_POST['seig']?> leidt tot <?php echo $_POST['over']?> en dat is niet goed als je wilt <?php echo $_POST['skill']?>.
			</p><br>
		<p>Helaas voor <?php echo $_POST['persoon']?>
			</p><br>
		</div>
	</div>
		<div id="footer">
		<p>deze website is gemaakt door: Mike Roest</p>
	</div>
</form>
</body>
</html>