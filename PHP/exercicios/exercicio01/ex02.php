<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicios 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h2>Exercicio 02</h2>

	<?php include_once 'menu.php'; ?>

	<p>Crie um algoritmo que leia o salário de uma pessoa e com base nesse salário, faça
	o cálculo e imprima o valor do desconto de INSS. Para isso leve em consideração
	a seguinte tabela:</p>

	<form action="ex02.php" method="post">

		<p>
			<label>Informe seu salário (Ex: 1450):</label><br>
			<input type="number" name="salario" min="1" max="100000" required>
		</p>

		<p>
			<button type="submit" name="calcular">Calcular</button>
		</p>

	</form>

	<?php

	if (isset($_POST['calcular']))
	{
		$salario = $_POST['salario'];

		if ($salario <= 750) 
		{
			$contri = $salario *7/100;
		}
		elseif ($salario > 750 && salario <= 900)
		{
			$contri = $salario *8/100;
		}
		elseif ($salario > 900 && $salario <= 1200)
		{
			$contri = $salario *9/100;
		}
		else
		{
			$contri = $salario *10/100;
		}	
		
		echo"<p>Sua porcentagem de contribuição será de: R\$ $contri</p>";
	}

	?>


</body>
</html>