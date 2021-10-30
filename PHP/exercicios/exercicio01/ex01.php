<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 01 - 1</title>
	<link rel="stylesheet" type="text/css" href="css/esilo.css">
</head>
<body>

	<h2>Exercicio 01</h2>

	<?php include_once 'menu.php'; ?>

	<h2>Faça um algoritmo que leia o nome de uma pessoa e a sua altura. Leve em
	consideração que a altura será lida em centímetros, por exemplo 177 e não 1,77.
	Com base na altura deve ser dada uma mensagem dizendo se a pessoa é de
	estatura “Baixa”, “Média” ou “Alta”. Para isso considere a seguinte tabela:</h2>

	<form action="ex01.php" method="post">
		
		<p>
			<label>Informe seu nome: </label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Informe sua altura (cm): </label><br>
			<input type="number" name="altura" min="1" max="200" required>
		</p>

		<p>
			<button type="submit" name="calcular">calcular</button>
		</p>

	</form>

	<?php 

	if (isset($_POST['calcular']))
	{
	
		$nome = $_POST['nome'];
		$altura = $_POST['altura'];

		if ($altura <= 159) 
		{
			echo "<p>Parabens $nome, você faz parta da classe BAIXA";
		}
		elseif ($altura >= 160 && $altura <= 172)
		{
			echo "<p>Parabens $nome, você faz parte da classe MÉDIA!";
		}
		else
		{
			echo "<p>Parabens $nome, você faz parte da classe ALTA!!";
		}

	}

	 ?>

</body>
</html>