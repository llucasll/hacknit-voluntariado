<?php
	$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
	if(!$id){
		$redirect = "../index.php";
		header("location:$redirect");
	}
	else{
	?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="src/css/projeto.css">
		<script src="src/js/projeto.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
	<body>
		<h1>Nome do projeto</h1>
		<p>25/08/2018 (sábado) 9:00</p>
		<p>Local</p>
		<p>Descrição do projeto</p>
		<i id="check" class="fas fa-check-circle"></i>
	</body>
</html>

<?php } ?>
