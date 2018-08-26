<?php
	$id = $_REQUEST['id'];// = 0;
	if(!isset($_REQUEST['id'])){
		$redirect = "../index.php";
		header("location: $redirect");
	}
	else{
		$sql = "select * from projetos where id=$id";
		include "../src/bd/select.php";
		/*
		//echo gettype($resposta);
		$nome = $resposta[0]["nome"];
		$descricao = $resposta[0]["descricao"];
		$objetivo = $resposta[0]["objetivo"];
		$categoria = $resposta[0]["categoria"];
		$metodologia = $resposta[0]["metodologia"];
		$capacitacao = $resposta[0]["capacitacao"];
		$cronograma = $resposta[0]["cronograma"];
		$horario = $resposta[0]["horario"];
		$inicio = $resposta[0]["inicio"];
		$fim = $resposta[0]["fim"];
		$localidade = $resposta[0]["localidade"];
		$img = $resposta[0]["imagem"];
		$relevancia = $resposta[0]["relevancia"];
		*/
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../src/css/verProjetos.css">
		<script src="../src/js/projeto.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<a href = "../index.html">
				<img src="../media/titulo.png" style="width:15%">
			</a>
		</header>
		<?php
		?>

		<div class="apresentacao">
			<img src="<?= $resposta[0]["imagem"] ?>" >
			<div class="informacoes">
				<h2><?= utf8_encode($resposta[0]["nome"]) ?></h2>
				<p><?= utf8_encode($resposta[0]["descricao"]) ?></p>
				<div class="info">
					<p class="dados"><?= utf8_encode($resposta[0]["localidade"]) ?></p>
					<p class="dados"><?= $resposta[0]["inicio"] ?></p>
				</div>
				<i class="fas fa-check-circle"></i>
			</div>
		</div>
		
		<footer>
			<p>Projeto desenvolvido durante a HackNit</p>
			<img src="../media/Logo_niteroi.png" style="width:10%">
		</footer>
		
	</body>
</html>

<?php } ?>
