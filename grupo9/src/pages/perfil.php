<?php
	ini_set('display_errors', 1);
	try{
		$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
	/*if(!$id){
		$redirect = "../index.php";
		header("location:$redirect");
	}
	else{*/
	
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../src/css/perfil.css">
		<script src="../src/js/perfil.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
	<body>
		<?php
			// busca no banco de dados
			$sql = "select * from atribuicoes where usuario=$id";
			//echo getcwd();
			include "../src/bd/select.php";
			//print_r($resposta[1]);
			$projetos = array();	
			foreach($resposta as $linha){
				if(count($linha)){
					//print_r($linha);
					$projetos[] = $linha["projeto"];
				}
			}
			
			$sql = "select * from usuarios where id=$id";
			include "../src/bd/select.php";
			foreach($resposta as $linha)
				if(count($linha))
					$usuario = $linha;
			
			foreach($projetos as $id){
				$sql = "select * from projetos where id=$id";

				include "../src/bd/select.php";
				$nome = $resposta[0]["nome"];
			}
		?>
		
		<header>
		<img id="persona" src="../media/titulo.png" height="20%" width="20%">  
		</header>
		<!-- nome do usuario, descrição e titulo -->
		<div class="infos">
		    <img id="persona" src="../media/persona1.png" height="20%" width="20%">  
		    <h1><?= $usuario["nome"] ?></h1>
		    <h2>Voluntário iniciante</h2>
		    <p id="descricao"><?= $usuario["descricao"] ?></p>
		</div>
		<div class="tela-atuais">
		
		<!-- projetos dos quais o usuario participa -->
		    <h1 id="titulo-atuais">Projetos que você está ajudando!</h1>
		    <div class="card">
		        <img src="../media/foto.jpg" alt="Avatar" style="width:100%">
		        <div class="day">Dia 27/08/2018 - Icaraí</div>
		        <div class="container">
		            <h4><b>Nome do Evento</b></h4> 
		            <p>LOREM IPSUM</p> 
		        </div>
		    </div>
		</div>

		<div class="tela-premios">
		
		<!-- premiaçao que os usuarios recebem de acordo com seu engajamento  -->
		    <h1 id="titulo-premios">Conquistas</h1>
		    <div class="premios">
				<i class="fas fa-star"></i>
				<p>Primeiro Projeto</p>
				<i class="fas fa-medal"></i>
				<p>Um Mês de Participação</p>
				<i class="fas fa-trophy"></i>
				<p>Partcipou de cinquenta projetos</p>


			</div>	

		</div>
		
		
			

		<footer>
		    <p>Projeto desenvolvido durante a HackNit</p>
		    <img src="../media/Logo_niteroi.png" alt="Logo Niteroi" style="width:15%">
		</footer>

	</body>
</html>

<?php } // } 
	catch(Exception $e) {
		echo 'Exceção capturada: ',  $e->getMessage(), "\n";
	}
?>
