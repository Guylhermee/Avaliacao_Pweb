<?php

	session_start();

	$nome = $_POST['campo_nome'];

	$telefone = $_POST['campo_telefone'];

	$_SESSION['nome'] = $nome;
	
	$_SESSION['telefone'] = $telefone;

?>

<a href="dados.php"> Visualizar Dados Cadastrais </a>