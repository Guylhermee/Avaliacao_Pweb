<?php
	session_start();
	
	echo "Seu nome: ". $_SESSION['nome']; 
	echo "<br>"
	echo "Seu telefone: ". $_SESSION['telefone'];

	session_unset();
	
	session_destroy();
?>