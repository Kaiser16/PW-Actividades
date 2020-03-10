<!DOCTYPE html>
<html>
<head>
	<title>Insertar Noticia</title>
</head>
<body>
	<?php 
		if($_POST)
		{
			$dbhost = 'localhost';
		$database = 'lindavista';
		$user = 'root';
		$pass = '';
		$port = '3308';
		$conexion = mysqli_connect($dbhost,$user,$pass,$database,$port) or die ("Fallo con la conexion a la bd");
		mysqli_query($conexion,"INSERT INTO noticias (id_noticia,titulo,noticia) VALUES (NULL,'".$_POST['titulo']."','".$_POST['noticia']."')") or die ("Error al insertar");
		mysqli_close($conexion);
			exit();
		}
	?>
	<h2>Insertar Nueva Noticia</h2>
	<form method="post" action="InsertarNoticias.php">
		Titulo:* <input type="text" name="titulo" required><br>
		<br>Noticia:*
		<br><textarea name='noticia'></textarea><br>
		<br><input type="submit" value="Enviar Noticia"><br>
		<hr><div class="footnote">Los campos con (*) deben ser completados</div>
	</form>

</body>
</html>