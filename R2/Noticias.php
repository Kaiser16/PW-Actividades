<!DOCTYPE html>
<html>
<head>
	<title>Noticias</title>
</head>
<body>
	<form method="post" action="Noticias.php">
		<input type="submit" name="pmostrar" value="Noticias">
		<input type="submit" name="pinsertar" value="Insertar Noticia">
	</form>

	<?php  
	$dbhost = 'localhost';
	$database = 'lindavista';
	$user = 'cursophp-ad';
	$pass = 'php.hph';
	$port = '3308';
	?>

	<?php
	error_reporting(E_ALL & ~E_NOTICE);
	$borrar = $_REQUEST['borrar']; 
	if(isset($borrar)){
		$conexion = mysqli_connect($dbhost,$user,$pass,$database,$port) or die ("Fallo con la conexion a la bd");
		$res = mysqli_query($conexion,"SELECT * FROM noticias");
		$idborrar = $_POST['eliminar'];
		$nborrar = count($idborrar);
		foreach ($idborrar as $value) {
			$query = "delete from noticias where id_noticia = ".$value;
			mysqli_query($conexion,$query) or die("F Borrar");
		}
		mysqli_close($conexion);
	}
	?>

	<?php
	$enviada = false; 
	error_reporting(E_ALL & ~E_NOTICE);
	$noticia = $_REQUEST['enviarn'];
	if(isset($noticia))
	{
		$enviada = true;
		$conexion = mysqli_connect($dbhost,$user,$pass,$database,$port) or die ("Fallo con la conexion a la bd");
		mysqli_query($conexion,"INSERT INTO noticias (id_noticia,titulo,noticia) VALUES (NULL,'".$_POST['titulo']."','".$_POST['noticia']."')") or die ("Error al insertar");
		mysqli_close($conexion);

	}
	?>

	<?php
	if(isset($_REQUEST['pinsertar']) || isset($_REQUEST['enviarn']))
	{
	?>
		<h2>Insertar Nueva Noticia</h2>
		<form method="post" action="Noticias.php">
			Titulo:* <input type="text" name="titulo" required><br>
			<br>Noticia:*
			<br><textarea name='noticia'></textarea><br>
			<br><input type="submit" name="enviarn" value="Enviar Noticia"><br>
			<hr><div class="footnote">Los campos con (*) deben ser completados</div>
		</form>
	<?php
		if($enviada == true)
		{
			echo "<hr><div class=footnote><h3>Noticia enviada</h3></div>";
			echo "Titulo: ".$_POST['titulo'];
			echo "<br>Noticia: ".$_POST['noticia'];
		}
	}
	else
	{
	?>
		<h2 align="center">NOTICIAS</h2>
	<?php
		$conexion = mysqli_connect($dbhost,$user,$pass,$database,$port) or die ("Fallo con la conexion a la bd");
		$res = mysqli_query($conexion,"SELECT * FROM noticias");
		$nrows = mysqli_num_rows($res);
		if($nrows != 0)
		{
	?>
		<form method="post" action="Noticias.php">
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
		<input type="submit" name="borrar" value="Borrar">
		</form>
		<?php
		}
		else echo "No existen noticias";
		mysqli_close($conexion);
	}
	?>
</body>
</html>