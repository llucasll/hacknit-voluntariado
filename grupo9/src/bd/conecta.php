<?php
	/* Exemplo de código para abrir conexão com banco de dados */

	$host = "localhost";
	$user = "root";
	$senha = "llucasll";
	$banco = "voluntariado";

	/* abre a conexão */
	$link = new mysqli($host,$user,$senha, $banco);
	
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
