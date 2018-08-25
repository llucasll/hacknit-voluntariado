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
		<link rel="stylesheet" type="text/css" href="../css/perfil.css">
		<script src="../js/perfil.js"></script>
	</head>
	<body>
		<!-- <img src="" alt="Logo" height="20%" width="20%"> -->
		<button>Projetos atuais</button>
		
		<?php
			$sql = "select * from atribuicoes where usuario=$id";
			//echo getcwd();
			include "../bd/select.php";
			//print_r($resposta[1]);
			$projetos = array();	
			foreach($resposta as $linha){
				if(count($linha)){
					//print_r($linha);
					$projetos[] = $linha["projeto"];
				}
			}
			
			foreach($projetos as $id){
				$sql = "select * from projetos where id=$id";
				include "../bd/select.php";
			}
		?>
				
		<p> <?= $resposta[0]["nome"] ?> </p>
			
		<button>Interesses</button>
		<button>Projetos passados</button>
		<div class="trofeis">
			<div class="premio">
				<i class="fas fa-star"></i>
				<p>Primeiro Projeto</p>
				<i class="fas fa-trophy"></i>
				<p>Um Mês de Participação</p>
				<i class="fas fa-medal"></i>
				<p>Partcipou de cinquenta projetos</p>


			</div>
			


		</div>
	</body>
</html>

<?php } // } 
	catch(Exception $e) {
		echo 'Exceção capturada: ',  $e->getMessage(), "\n";
	}
?>
