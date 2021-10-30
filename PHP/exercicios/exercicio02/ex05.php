<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercio 05</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Exercício 05</h1>

	<?php include_once 'menu.php' ?>
	<p>
		Crie um programa utilizando uma estrutura de repetição que execute x vezes, onde
		a quantidade de execuções está relacionada ao fato de serem encontrados 12
		valores pares gerados aleatoriamente dentro do intervalo entre 1 e 6. Mostrar ao
		final a quantidade total de execuções.
	</p>

	<?php 

	$cont = 0;
	$qntd_par = 0;

	while ($qntd_par < 12)
	{
		$random = rand(1,6);

		if ($random % 2 == 0)
		{
			$qntd_par++;
		}
		$cont++; //aumenta o contador de EXECUÇÕES
	};

	echo "O laço executou $cont vezes";

	?>
</body>
</html>