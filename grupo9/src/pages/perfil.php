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
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="src/css/perfil.css">
		<script src="src/js/perfil.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
	<body>
		<?php
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
			var_dump($resposta);
			foreach($resposta as $linha){
				echo "tamanho".count($linha);
				if(count($linha)){
					$usuario = $linha;
					echo "oi";
				}
			}
			
		?>
			
		<button>Interesses</button>
		<button>Projetos passados</button>
		<?php
			foreach($projetos as $id){
				$sql = "select * from projetos where id=$id";
				include "../src/bd/select.php";
				$nome = $resposta[0]["nome"];
				echo "<p> $nome </p>";
			}
			
			var_dump($usuario);
		?>
		
		<div class="infos">
		    <img id="persona" src="../../media/persona1.png" height="20%" width="20%">  
		    <h1><?= $usuario["nome"] ?></h1>
		    <h2>Voluntário iniciante</h2>
		    <p id="descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
		    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
		    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
		    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
		    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <button class="bttPerson">Projetos atuais</button>
		    <button class="bttPerson">Interesses</button>
		    <button class="bttPerson">Projetos passados</button>
		    <button class="bttPerson">Conquistas</button>
		</div>
		<div class="tela-atuais">
		    <h1 id="titulo-atuais">Projetos que você está ajudando!</h1>
		    <div class="card">
		        <img src="../../media/foto.jpg" alt="Avatar" style="width:100%">
		        <div class="day">Dia 27/08/2018 - Icaraí</div>
		        <div class="container">
		            <h4><b>Nome do Evento</b></h4> 
		            <p>Descrição linda aqui</p> 
		        </div>
		    </div>
		</div>
		<div class="tela-premios">
		    <h1 id="titulo-premios">Conquistas</h1>
		    <div class="premios">
		        <i class="fas fa-trophy"></i>
		        <i class="fas fa-trophy"></i>
		        <i class="fas fa-trophy"></i>
		        <i class="fas fa-trophy"></i>
		        <i class="fas fa-trophy"></i>
		    </div>
		</div>

		<footer>
		    <p>Projeto desenvolvido durante a HackNit</p>
		    <img src="../../media/Logo_niteroi.png" alt="Logo Niteroi" style="width:15%">
		</footer>
	</body>
</html>

<?php } // } 
	catch(Exception $e) {
		echo 'Exceção capturada: ',  $e->getMessage(), "\n";
	}
?>
