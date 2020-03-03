<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 11</title>
</head>
<body>
	<?php
	$type = $_POST['moneda'];
	$sol = $_POST['euros'];
	if($type == 1)
	{
		echo "Libras: ".$sol*0.87;
	}
	else
	{
		echo "Dolares: ".$sol*1.11;
	}
	?>
</body>
</html>