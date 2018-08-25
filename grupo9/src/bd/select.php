<?php
	include "conecta.php";

	/* enviando a consulta para o banco de dados */
	$resposta = mysql_query($sql);
	
	if(!$resposta){
		/* erro ao executar a consulta */
		echo mysql_error();
	}
	
	/* fecha a conexão */
	mysql_close($link);
?>

