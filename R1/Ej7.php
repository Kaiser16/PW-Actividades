<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>
	<h1>Ejercicio 7</h1>
	<?php
	$i = 0;
	$j = 0;
	while ($i!= 10)
	{
		if($j%2 == 0)
		{
			$a[$i] = $j;
			$i++;
		}
		$j++;
	}
	for($i = 0; $i < 10; $i++)
	{
		echo $a[$i]."<br>";
	}
	?>
</body>
</html>