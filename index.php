<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form action="paniekantw.php" method="POST">
		<h1>Mad Libs</h1>
	<ul>
	<li>
		<a href="index.php">Er Heerst Paniek....</a>
		<a href="onkunde.php">Onkunde</a>
	</li>
	</ul>

		<div id="container">
			<div id="content">
				<h2>Er heerst paniek....</h2>
				
				<p>Welk dier zou je nooit als huisdier willen hebben? 
				<input name="dier" type="input" id="inpt" placeholder="Dieren">
				</p>
					<br>
				<p>Wie is de belangrijkste persoon in le leven? 
				<input name="naam" type="input" id="inpt" placeholder="Naam">
				</p>
					<br>
				<p>In welk land zou je graag willen wonen? 
				<input name="land" type="input" id="inpt" placeholder="Landnaam">
				</p>
					<br>
				<p>Wat doe je als je je verveeld? 
				<input name="verveel" type="input" id="inpt" placeholder="Activiteit">
				</p>
					<br>
				<p>Met wel speelgoed speelde je als kind het liefst?
				<input name="toy" type="input" id="inpt" placeholder="Speelgoed">
				</p>
					<br>
				<p>Bij welke docent spijbelde je het liefst? 
				<input name="doc" type="input" id="inpt" placeholder="Persoon">
				</p>
					<br>
				<p>Als je €100.000,- had wat zou je dan kopen? 
				<input name="buy" type="input" id="inpt" placeholder="Product">
				</p>
					<br>
				<p>Wat is je favoriete bezigheid?
				<input name="bezig" type="input" id="inpt" placeholder="Activiteit">
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