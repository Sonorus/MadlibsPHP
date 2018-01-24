<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form action="onkundeantw.php" method="POST">
		<h1>Mad Libs</h1>
	<ul>
	<li>
		<a href="index.php">Er Heerst Paniek....</a>
		<a href="onkunde.php">Onkunde</a>
	</li>
	</ul>

		<div id="container">
			<div id="content">
				<h2>Onkunde</h2>

				<p>Wat zou je graag willen kunnen?
				<input name="skill" type="input" id="inpt" placeholder="Skill">
				</p>
					<br>
				<p>Met welke persoon kun je goed opschieten?
				<input name="persoon" type="input" id="inpt" placeholder="Naam">
				</p>
					<br>
				<p>Wat is je favoriete getal?
				<input name="num" type="input" id="inpt" placeholder="Nummer">
				</p>
					<br>
				<p>Wat heb je altijd bij je als je op vakantie gaat?
				<input name="vak" type="input" id="inpt" placeholder="Spul">
				</p>
					<br>
				<p>Wat is je beste persoonlijke eigenshap?
				<input name="beig" type="input" id="inpt" placeholder="Beste Eigenschap">
				</p>
					<br>
				<p>Wat is je slechtste persoonlijke eigenshap?
				<input name="seig" type="input" id="inpt" placeholder="Slechtste Eigenschap">
				</p>
					<br>
				<p>Wat is het ergste wat je is overkomen?
				<input name="over" type="input" id="inpt" placeholder="Ergste">
				</p>
					<br>
				<p>
				<label>&nbsp;</label>
				<input type="submit" value="Versturen" />
				</p>
			</div>
		</div>
	</div>
		<div id="footer">
		<p>deze website is gemaakt door: Mike Roest</p>
	</div>
</form>	
</body>
</html>