<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Przesyłanie metodą GET</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
	<div id="container">
		<form action="odbior.php" method="get">
			Podaj liczbę:
			<input type="text" name="pole_1" />
			<input type="submit" name="wyslij"  value="Wyślij" />
		</form>
	</div>
</body>
</html>