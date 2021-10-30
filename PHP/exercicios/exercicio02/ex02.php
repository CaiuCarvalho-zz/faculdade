<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio 02</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Exercicio 02</h1>

	<?php include_once 'menu.php' ?>

	<p>
		Crie um algoritmo que mostre a tabuada de um valor qualquer (a sua escolha),
		mostrando os resultados da multiplicação deste valor de 1 até 10.
		Ex (tabuada do 2):<br>
		2 x 1 = 2<br>
		2 x 2 = 4<br>
		2 x 3 = 6<br>
		...<br>
		2 x 10 = 20
	</p>


	<?php 

	$cont = 0;
	$num = rand(1, 100);

	echo "<h4>Tabuada de: $num</h4>";
	for ($cont = 1; $cont <= 10 ; $cont++) 
	{ 
		echo $cont * $num . ", ";
	}
 ?>

</body>
</html>