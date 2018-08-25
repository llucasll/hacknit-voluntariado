<?php
	include "conecta.php";

	if ($result=mysqli_query($link, $sql)){
		// Fetch one and one row
		$resposta = array();
		while ($row=mysqli_fetch_assoc($result)){
			$resposta[] = $row;
		}
		// Free result set
		mysqli_free_result($result);
	}
	else{
		/* erro ao executar a consulta */
		echo mysqli_error($link);
	}
	
	/* fecha a conexão */
	mysqli_close($link);
?>

