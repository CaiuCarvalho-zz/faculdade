<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Exercicio 01</h1>

	<?php include_once 'menu.php'; ?>

	<h3>Crie um algoritmo que leia a idade de uma pessoa e com base nessa idade o
	algoritmo deve informar se essa pessoa pode votar, não pode votar ou se o
	voto é facultativo. Para isso leve em consideração a seguinte tabela.</h3>

	<form action="ex1.php" method="post">
		<p>
			<label>Informe o ano de nascimento</label><br>
			<input type="number" name="nascimento" required>
		<p/>

		<p>
			<label>Informe o ano atual</label><br>
			<input type="number" name="ano_atual" required>
		</p>
		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	<form/>
	
	<?php 

	if (isset($_POST['enviar']))

	{

		$nascimento =$_POST['nascimento'];
		$ano_atual =$_POST['ano_atual'];

		$idade = $ano_atual - $nascimento;

		if ($idade <= 15) 
		{
			$condicao = "um";
		}
		else if ($idade > 15 && $idade <= 17)
		{
			$condicao = "dois";
		}
		else
		{
			$condicao = "tres";
		}

		echo "<p>Você faz parte da condição $condicao";
	}


	 ?>	


</body>
</html>