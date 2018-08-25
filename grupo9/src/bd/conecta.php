<?php
	/* Exemplo de código para abrir conexão com banco de dados */

	$host = "localhost";
	$usuario = "root";
	$senha = "llucasll";
	$banco = "voluntariado";

	/* abre a conexão */
	$link = mysql_connect($host,$usuario,$senha);
	if(!$link)
	{
		/* não conseguiu abrir a conexão */
		echo mysql_error();
		die();
	}

	/* seleciona o banco de dados */
	if(!mysql_select_db($banco))
	{
		/* erro ao selecionar o banco de dados */
		echo mysql_error();
		mysql_close($link);
		die();
	}
?>
