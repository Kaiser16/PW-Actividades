<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>
	<h1>Ejercicio 6</h1>
	<?php
	define('TAM', 4);
	echo "<table border=1>";
	for($i = 1; $i <= TAM; $i++)
	{
		echo "<tr>";
		for ($j = 1; $j <= TAM; $j++) 
		{ 
			echo "<td>",pow($i,$j),"</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>