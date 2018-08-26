<?php
	$username = $_REQUEST['username'];
	$psw = $_REQUEST['psw'];
	$age = $_REQUEST['age'];
	$email = $_REQUEST['email'];
	$description = $_REQUEST['description'];
	$phone = $_REQUEST['phone'];

	$sql = "insert into `usuarios` (nome, senha, idade, email, descricao, telefone) values(\"$username\", \"$psw\", $age, \"$email\", \"$description\", $phone);";
	echo $sql;
	/* enviando a consulta para o banco de dados */
	require "../bd/conecta.php";
	$r = mysqli_query($link, $sql);
	
	//echo gettype($resposta);
	/* fecha a conexão */
	mysqli_close($link);
	
	if($r){
		$sql = "select * from usuarios where email=\"$email\"";
		include "../bd/select.php";
		
		//header("location: ../../index.html");
		//echo "resp: ";
		//echo gettype($resposta);
		
		$id = $resposta[0]["id"];
				//print_r($linha);
		header("location: ../../page/perfil.php?id=$id");
	}
	else{
		echo "Erro.";
		print_r($r);
		/* erro ao executar a consulta */
		echo mysqli_error();
	}

	/* fecha a conexão */
	mysqli_close($link);
?>
