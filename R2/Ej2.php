<!DOCTYPE html>
<html>
<head>
	<title>
		Ejercicio 2
	</title>
</head>
<body>
	<?php
	$dbhost = 'localhost';
	$database = 'lindavista';
	$user = 'cursophp';
	$pass = '';
	$port = '3308';
	$conexion = mysqli_connect($dbhost,$user,$pass,$database,$port) or die ("Fallo con la conexion a la bd");
	$res = mysqli_query($conexion,"select * from votos") or die("Fallo Select");
	$nfilas = mysqli_num_rows($res);
	if($nfilas == 0)
	{
	?>
	<h3>No Existen votaciones</h3>
	<?php
	}
	else
	{
	error_reporting(E_ALL & ~E_NOTICE);
	$votar = $_POST['votar'];

	if(isset($votar))
	{
		$a = $_POST['voto'];
		echo $a;
		echo "<br>";
		echo $_POST['idvotacion'];
		$resq = mysqli_query($conexion,"select * from votos where id_votacion =".$_POST['idvotacion']) or die("Query fail");
		$rowres = mysqli_fetch_assoc($resq);
		$vupdate = $rowres[$a]+1;
		mysqli_query($conexion,"update votos set ".$a." = ".$vupdate." where id_votacion = 0") or die("fallo update");
	}
	?>
	<table border="1">
	<tr>
		<td>ID</td>
		<td>A</td>
		<td>B</td>
		<td>C</td>
		<td>N.Votos</td>
	</tr>
	<tr>
	<?php 
	$row = mysqli_fetch_assoc($res);
	foreach ($row as $value) {
		echo "<td>";
			echo $value;
		echo "</td>";
	}
	?>
	</tr>
	</table>
	<br>
	<form method="post" action="Ej2.php">
	<select name="idvotacion">
	<option value=0>0
	<?php  
	for($i = 1; $i < $nfilas;$i++)
	{
	echo "<option value=".$i.">".$i;
	}
	?>
	</select>
	 Votar: 
	A <input type="radio" name="voto" value="a" required>
	B <input type="radio" name="voto" value="b" required>
	C <input type="radio" name="voto" value="c" required>
	<br>
	<br><input type="submit" name="votar" value="votar">
	</form>
	<?php
	}
	?>
</body>
</html>