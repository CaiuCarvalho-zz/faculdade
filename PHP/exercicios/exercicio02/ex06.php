<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio 06</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Exdercicio 06</h1>

	<?php include_once 'menu.php' ?>

	<p>
		Crie um programa que gere um número aleatório entre -10 e 10 até que encontre
		um número igual a zero. No final, mostre a soma dos números gerados.
	</p>


	<?php 

	$soma = 0;
	do {
		$x = rand (-10, 10);

		$soma += $x;
		echo "Valor atual de: $x <br>";

	} while ($x != 0);

	echo "A soma dos valores gerados: $soma";



	 ?>
</body>
</html>