<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 04</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h2>Exercicio 02</h2>

	<?php include_once 'menu.php'; ?>

	<p>Faça um programa que receba o salário e a quantidade de filhos de um
	funcionário. Com base no valor do salário e na quantidade de filhos, calcule e
	mostre qual será o novo valor do salário que esse funcionário receberá, já incluído
	o valor do auxílio-escola.</p>

	<form action="ex04.php" method="post">
		<p>
			<label>Informe o salário em reais: </label>
			<input type="number" name="salario" min="1" required placeholder="Ex: 2500,00">
		</p>

		<p>
			<label>Informe a quantidade de filhos: </label>
			<input type="number" name="filhos" placeholder="Ex: 2">
		</p>

		<p><button type="submit" name="calcular">calcular</button></p>

	</form>

	<?php 

	if (isset($_POST['calcular']))
	{
	 
		$salario = $_POST['salario'];
		$filhos  = $_POST['filhos'];

		if ($salario <= 2300.00 && $filhos <= 2)
		{
			$auxilio = 50;
		}
		elseif ($salario <= 2300.00 && $filhos > 2)
		{
			$auxilio = 70;
		}
		elseif ($salario > 2300.00 && $salario <= 2500.00 && $filhos <= 2)
		{
			$auxilio = 40;
		}
		elseif ($salario > 2300.00 && $salario <= 2500.00 && $filhos > 2)
		{
			$auxilio = 60;
		}
		elseif ($salario > 2500.00 && $filhos <= 2)
		{
			$auxilio = 30; 
		}
		else
		{
			$auxilio = 20;
		}

		$salario_final = $salario + $auxilio * $filhos;

		if ($filhos >= 1)
		{
			echo "O seu salário final com o valor de R\$ $auxilio para seus(s) filho(s) é de $salario_final";
		}
		else
		{
			echo "Você não receberá auxilio-escola";
		}

	}




	 ?>





</body>
</html>