<?php
	include "conecta.php";

	/* enviando a consulta para o banco de dados */
	$resposta = mysqli_query($link, $sql);
	
	if(!$resposta){
		/* erro ao executar a consulta */
		echo mysqli_error($link);
	}
	
	/* fecha a conexão */
	mysqli_close($link);
?>

