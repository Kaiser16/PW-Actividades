<!DOCTYPE html>
<html>
<head>
	<title>Noticias</title>
</head>
<body>
	<h2>NOTICIAS</h2>
	<?php
	$dbhost = 'localhost';
	$database = 'Noticiario';
	$user = 'root';
	$pass = '';
	$port = '3308';
	$conexion = mysqli_connect($dbhost,$user,$pass,$database,$port) or die ("Fallo con la conexion a la bd");
	$res = mysqli_query($conexion,"SELECT * FROM noticias");
	?>
	<table border = 1>
		<tr>
			<td>
				ID
			</td>
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
		while($row = mysqli_fetch_assoc($res)){
			echo "<tr>";
				foreach ($row as $value) {
					echo "<td>";
					echo $value;
					echo "</td>";
				}
			echo "</tr>";
		}
		?>
	<?php
	mysqli_close($conexion);
	?>
</body>
</html>