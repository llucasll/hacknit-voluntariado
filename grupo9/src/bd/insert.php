<?php
	include "conecta.php";

	$maiuscula = $_REQUEST["maiuscula"];
	$minuscula = $_REQUEST["minuscula"];
	$nome = $_REQUEST['nome'];
	$sql = "insert into $maiuscula (nome) values ('$nome')";

	/* enviando a consulta para o banco de dados */
	$resposta = mysqli_query($sql);
	if($resposta){
		/* Deu Certo */
		header("location: ../$minuscula.php");
	}
	else{
		/* erro ao executar a consulta */
		echo mysqli_error();
	}

	/* fecha a conexão */
	mysqli_close($link);
?>
