<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 10</title>
</head>
<body>
	<h1>Ejercicio 10</h1>
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
				if($i == 6)
				{
					$i = 0;
					echo "</tr>";
					echo "<tr>";
				}
				$i++;
				echo "<td>";
				echo "<a href=imagenes/$archivo><img src='imagenes/$archivo' width=100 height=100></a>";
				echo "</td>";
			}
		}
		$img = $_POST['imagen'];
		echo "</tr>";
		echo "<tr>";
		echo "<td>";
		echo "<a href=$img><img src ='$img' width=100 height=100></a>";
		echo "</tr>";
		echo "</table>";
		closedir($dir);
	}
	?>

</body>
</html>