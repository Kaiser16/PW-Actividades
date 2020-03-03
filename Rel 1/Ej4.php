<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
	<h1>Ejercicio 4</h1>
	<?php
	echo "<table border=1>";
	for($i = 1; $i <= 10; $i++)
	{
		if($i % 2 == 0)
			echo "<tr bgcolor=#DDDD5>";
		else
			echo "<tr bgcolor=#FF2D00>";
		for($j = 1; $j <= 10; $j++)
			echo "<td>",$i*$j,"</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>