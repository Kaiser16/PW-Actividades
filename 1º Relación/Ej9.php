<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 9</title>
</head>
<body>
	<h1>Ejercicio 9</h1>
	<?php
	if($dir = opendir('imagenes'))
	{
		echo "<table border=1>";
		echo "<tr>";
		$i = 0;
		while(false !== ($archivo = readdir($dir)))
		{
			if($archivo!="." && $archivo!="..")
			{
				if($i == 2)
				{
					$i = 0;
					echo "</tr>";
					echo "<tr>";
				}
				$i++;
				echo "<td>";
				echo "<a href=imagenes/$archivo><img src=imagenes/$archivo></a>";
				echo "</td>";
			}
		}
		echo "</tr>";
		echo "</table>";
		closedir($dir);
	}
	?>

</body>
</html>