<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 14</title>
</head>
<body>
	<h1>Mi descripción</h1>
	<?php
	$name = $_POST['name'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	$born = $_POST['born'];
	$live = $_POST['live'];
	$grade = $_POST['grade'];
	$gradeyear = $_POST['gradeyear'];
	echo "Hola, me llamo ".$name." tengo ".$age." años y soy ".$sex.".<br>"."Nací en ".$born." y ahora vivo en ".$live." estudio ".$grade." y este es mi ".$gradeyear."º año.";
	?>
</body>
</html>