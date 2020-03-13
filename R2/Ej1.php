<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>
	<h2 align="center">NOTICIAS</h2>
	<?php
	$dbhost = 'localhost';
	$database = 'lindavista';
	$user = 'cursophp';
	$pass = '';
	$port = '3308';
	$conexion = mysqli_connect($dbhost,$user,$pass,$database,$port) or die ("Fallo con la conexion a la bd");
	$res = mysqli_query($conexion,"SELECT * FROM noticias");
	$nrows = mysqli_num_rows($res);
	if($nrows != 0)
	{
	?>
		<table border = '1' align="center">
			<tr>
				<td>
					TITULO
				</td>
				<td>
					NOTICIA
				</td>
				<td>
					BORRAR
				</td>
			</tr>
	<?php
			$i=1;
			while($row = mysqli_fetch_assoc($res)){
				echo "<tr>";
					echo "<td>";
					echo $row['titulo'];
					echo "</td>";
					echo "<td>";
					echo $row['noticia'];
					echo "</td>";
					echo "<td>";
						echo "<input type=checkbox name=eliminar[] value=".$row['id_noticia'].">";
					echo "</td>";
				echo "</tr>";
				$i++;
			}
	?>
		</table><br>
		<?php
	}
	else echo "No existen noticias";
	mysqli_close($conexion);
	?>
</body>
</html>