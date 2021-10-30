<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 04</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Exercício 04</h1>

	<?php include_once 'menu.php' ?>

	<p>
		Crie um algoritmo que execute um loop por 10 vezes. A cada execução deste loop,
		gere um valor aleatório entre 1 e 10. Após todas as execuções. Mostre a quantidade
		de valores pares gerados, e a quantidade de valores ímpares.
	</p>

	<?php 

	$qntd_par = 0;
	$qntd_impar = 0;

	for ($c = 0; $c < 10 ; $c++) 
	{ 
		$random = rand(1, 10);

		if ($random % 2 == 0) 
		{
			$qntd_par++;
		}
		else
		{
			$qntd_impar++;
		}
	}

	echo "<h4>Total de pares encontrados: $qntd_par</h4>";
	echo "<h4>Total de impares encontrados: $qntd_impar<h4>";
	
	?>
</body>
</html>