<?php
	include "conecta.php";

	$nome = $_REQUEST['nome'];
	$sql = "insert into $tabela ($colunas) values ('$valores');";

	/* enviando a consulta para o banco de dados */
	$resposta = mysqli_query($sql);
	if($resposta){
		/* Deu Certo */
		header("location: ../index.php");
	}
	else{
		/* erro ao executar a consulta */
		echo mysqli_error();
	}

	/* fecha a conexão */
	mysqli_close($link);
?>
