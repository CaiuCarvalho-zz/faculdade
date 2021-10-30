<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicios 03</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Exercício 03</h1>

	<?php include_once 'menu.php' ?>

	<p>
	João nasceu pesando 2,5 Kg, e seu irmão gêmeo José, 2,7 Kg. Sabendo que os
	irmãos engordam, respectivamente, 215g e 210g a cada semana, daqui a quantas
	semanas ambos terão 5kg ou mais?
	</p>

	<?php 

	$peso_joao = 2.5; //kg
	$peso_jose = 2.7; //kg

	$semanas_joao = 0;
	$semanas_jose = 0;

	while ($peso_joao <= 5 || $peso_jose <= 5)
		{	
			$peso_joao += 0.215;
			$peso_jose += 0.210;
			$semanas_joao++;
			$semanas_jose++;
		}
	

	echo "Peso final de João: $peso_joao kg<br>";
	echo "Peso final de Jose: $peso_jose kg<br>";
	echo "Tempo decorrido pelo João: $semanas_joao semanas<br>";
	echo "Tempo decorrido pelo Jose: $semanas_jose semanas";


	?>
</body>
</html>