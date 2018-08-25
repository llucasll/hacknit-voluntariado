<?php
	include "conecta.php";

	$maiuscula = $_REQUEST["maiuscula"];
	$minuscula = $_REQUEST["minuscula"];
	$nome = $_REQUEST['nome'];
	$sql = "insert into $maiuscula (nome) values ('$nome')";

	/* enviando a consulta para o banco de dados */
	$resposta = mysql_query($sql);
	if($resposta){
		/* Deu Certo */
		header("location: ../$minuscula.php");
	}
	else{
		/* erro ao executar a consulta */
		echo mysql_error();
	}

	/* fecha a conexão */
	mysql_close($link);
?>
