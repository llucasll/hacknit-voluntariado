<?php
	/* Exemplo de código para abrir conexão com banco de dados */

	$host = "localhost";
	$user = "root";
	$senha = "llucasll";
	
	/*
	$banco = "sys";

	/* abre a conexão *
	$link = new mysqli($host,$user,$senha, $banco);
	
	$sql = file_get_contents("../src/bd/voluntariado.sql"); //"drop database if exists voluntariado; create database voluntariado;";

	/* check connection *
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	/* enviando a consulta para o banco de dados *
	$resposta = mysqli_query($link, $sql);
	if(!$resposta){
		/* erro ao executar a consulta *
		echo mysqli_error($link);
	}
	
	/* fecha a conexão *
	mysqli_close($link);
	*/
	$banco = "voluntariado";
	$link = new mysqli($host,$user,$senha, $banco);
	header("Content-type: text/html; charset=utf-8");
	
	/* check connection */
	if (mysqli_connect_errno($link)) {
		printf("Connect failed: %s\n", mysqli_connect_error($link));
		exit();
	}

?>
