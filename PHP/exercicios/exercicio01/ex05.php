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

	<p>Elabore um algoritmo que leia o nome de um funcionário, a quantidade de
	dependentes até 14 anos e o valor do salário base. Com nessas informações deve
	ser calculado o valor do INSS e o valor do salário família (conforme é apresentado
	nas tabelas). Escrever no final o valor do salário líquido, que seria nesse caso:
	salário base – valor inss + valor salário família.</p>

	<form action="ex05.php" method="post">
		<p>
			<label>Informe o valor em reais do seu salario</label>
			<input type="number" name="salario" min="1" required placeholder="Ex: 2500.00">
		</p>

		<p>
			<label>Informe quantos filhos tem(até 14 anos de idade): </label>
			<input type="number" name="filhos" required placeholder="Ex: 3">
		</p>

		<p><button type="submit" name="enviar">enviar</button></p>

	</form>

	<?php 

	if (isset($_POST['enviar']))
	{
		$salario = $_POST['salario'];
		$filhos  = $_POST['filhos'];

		if ($salario <= 800.00)
		{
			$aliquota = salario * 7/100;
		}
		elseif ($salario > 800.00 && $salario <= 1200.00)
		{
			$aliquota = salario * 8/100;
		}
		elseif ($salario > 1200.00 && $salario <= 1500.00)
		{
			$aliquota = salario * 9/100;
		}
		else
		{
			$aliquota = 135;
		}

		if ($salario <= 1450.00)
		{
			$salario_final = $salario - $aliquota ($filhos*250.00);
		}
		elseif ($salario > 1450.00 && $salario <= 2600.00)
		{
			$salario_final = $salario - $aliquota ($filhos*200.00);
		}
		else
		{
			$salario_final = $salario - $aliquota;
		}

		if ($filhos >= 1)
		{
		echo "<p>Seu salário com desconto de R\$$aliquota do INSS, e mais o valor do bolsa-escola dos seus filhos é de R\$$salario_final</p>";
		}
		else
		{
			echo "<p>Seu salário com desconto de R\$$aliquota do INSS é de R\$$salario_final</p>";
		}

		var_dump($salario);
		var_dump($salario_final);
		
	}

	 ?>

</p>
</body>
</html>