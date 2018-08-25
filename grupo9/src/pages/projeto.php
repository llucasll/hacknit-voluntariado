<?php
	$id = $_REQUEST['id'] = 0;
	if(!isset($_REQUEST['id'])){
		$redirect = "../index.php";
		header("location: $redirect");
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
		<?php
			$sql = "select * from projetos where id=$id";
			include "../src/bd/select.php";
		?>
		
		<h1><?= $resposta[0]["nome"] ?></h1>
		<p><?= $resposta[0]["inicio"] ?></p>
		<p><?= $resposta[0]["localidade"] ?></p>
		<p><?= $resposta[0]["descricao"] ?></p>
		<i id="check" class="fas fa-check-circle"></i>
	</body>
</html>

<?php } ?>
