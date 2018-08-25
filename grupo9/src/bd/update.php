<?php
	include "conecta.php";

	$maiuscula = $_REQUEST["maiuscula"];
	$minuscula = $_REQUEST["minuscula"];
	$id = $_REQUEST["id"];
	$nome = $_REQUEST["nome"];


	$sql = "update $maiuscula set nome = '$nome' where id_$minuscula = $id";

	/* enviando a consulta para o banco de dados */
	$resposta = mysqli_query($sql);
	if($resposta)
        	header("location: ../$minuscula.php");
	else{
		/* erro ao executar a consulta */
		echo mysqli_error();
	}

	/* fecha a conexão */
	mysqli_close($link);

?>
