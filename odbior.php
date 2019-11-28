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

	<?php
		$g="*";   
		$ilosc = $_GET['pole_1'];
			for($i=1;$i<=$ilosc;$i++)
				{
					$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
					$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
			for($j=1;$j<=$i;$j++)
				{
					echo '<span style="color: '.$color.';">*</span>';
				}
					echo'<br/>';
				}
	?>
</body>
</html>