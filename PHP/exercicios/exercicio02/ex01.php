<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 01</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Exercicio 01</h1>

	<?php include_once 'menu.php' ?>

	<h2>
		Faça um algoritmo que percorra um intervalo de valores entre 1 e 100. Calcule e
		mostre na tela:<br>
		<li>A quantidade de valores pares <br></li>
		<li>A soma dos valores pares <br></li>
		<li>A média dos valores ímpares</li>
	</h2>


	<?php 

	$soma_par = 0;
	$soma_impar = 0;
	$quant_impar = 0;

	$cont = 0;

		for ($cont = 1; $cont <= 100; $cont++)
		{
			if ($cont % 2 == 0) 
			{
				echo $cont . ", ";
				$soma_par += $cont;
			}
			if ($cont % 2 != 0)
			{
				$soma_impar += $cont;
				$quant_impar++;
			}
		}

	

	echo "A soma dos valores pares é igual a: " . $soma_par;
	echo "A média dos valores impares é igual a: " . $soma_impar / $quant_impar;

	?>

</body>
</html>