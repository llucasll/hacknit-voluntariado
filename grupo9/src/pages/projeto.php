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
		<link rel="stylesheet" type="text/css" href="../css/verProjeto.css">
		<script src="src/js/projeto.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
	<body>
		<header>
		</header>
		<?php
			$sql = "select * from projetos where id=$id";
			include "../bd/select.php";
		?>

		<div class='apresentação'>
			<div class=imagem>
				<img id="logo" src="<?= $resposta[0]["imagem"] ?>" style="float:center" height="50%" width="50%"></div>
			</div>

		</div>
		
		
		<h1><?= $resposta[0]["nome"] ?></h1>
		<p><?= $resposta[0]["inicio"] ?></p>
		<p><?= $resposta[0]["localidade"] ?></p>
		<p><?= $resposta[0]["descricao"] ?></p>
		<i id="check" class="fas fa-check-circle"></i>
	</body>
</html>

<?php } ?>
