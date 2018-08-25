<?php
	/* Exemplo de código para abrir conexão com banco de dados */

	$host = "localhost";
	$usuario = "root";
	$senha = "llucasll";
	$banco = "voluntariado";

	/* abre a conexão */
	$link = mysqli_connect($host,$usuario,$senha);
	if(!$link)
	{
		/* não conseguiu abrir a conexão */
		echo mysqli_error();
		die();
	}

	/* seleciona o banco de dados */
	if(!mysqli_select_db($link, $banco))
	{
		/* erro ao selecionar o banco de dados */
		echo mysqli_error();
		mysqli_close($link);
		die();
	}
?>
