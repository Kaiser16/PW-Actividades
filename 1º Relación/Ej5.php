<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>
	<h1>Ejercicio 5</h1>
	<?php
	define('TAM',10);
	echo "<table border=1>";
	for($i = 1; $i <= TAM; $i++)
	{
		if($i % 2 == 0)
			echo "<tr bgcolor=#c3c3c3>";
		else
			echo "<tr>";
		for($j = 1; $j <= TAM; $j++)
			echo "<td>",$i*$j,"</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>