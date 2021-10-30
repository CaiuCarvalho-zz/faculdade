<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 03</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h2>Exercicio 03</h2>

	<?php include_once 'menu.php'; ?>

	<p>Faça um programa que receba o salário e o tempo (em anos) de serviço de um
	funcionário. Com base no valor do salário e no tempo e serviço, mostre qual será o
	valor da gratificação que esse funcionário receberá:</p>

	<form action="ex03.php" method="post">
		
		<p>
			<label>Informe seu salario: </label>
			<input type="number" name="salario" min="1"	max="100000" required placeholder="1500">
		</p>

		<p>
			<label>Informe a quantos anos você prestou serviço:</label>
			<input type="number" name="anos" min="1" max="60" required placeholder="3">
		</p>

		<p><button type="submit" name="calcular">Enviar</button></p>

	</form>

	<?php 

	if (isset($_POST['calcular']))
	{

		$salario 	= $_POST['salario'];
		$ano 		= $_POST['ano'];

		if ($salario <= 1500 && $ano <= 3)
			{
				echo "Sua gratificação será de R\$230,00";
			}	
			else if ($salario <= 1500 && $ano > 3 && $ano <= 6) 
			{
				echo "Sua gratificação será de R\$330,00";
			}
			elseif ($salario <= 1500 && $ano > 6) 
			{
				echo "Sua gratificação será de R\$350,00";
			}
			elseif ($salario > 1500 && $ano <= 3)
			{
				echo "Sua gratificaçã será de R\$200,00";
			}
			else
			{
				echo "Sua gratificaçã será de R\$300,00";
			}		
	}


	 ?>
</body>
</html>