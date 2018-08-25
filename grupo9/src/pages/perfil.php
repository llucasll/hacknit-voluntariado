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
		<link rel="stylesheet" type="text/css" href="src/css/perfil.css">
		<script src="src/js/perfil.js"></script>
	</head>
	<body>
		<!-- <img src="" alt="Logo" height="20%" width="20%"> -->
		<button>Projetos atuais</button>
		
		<?php
			$sql = "select * from atribuicoes where usuario=$id";
			echo getcwd();
			include "../src/bd/select.php";
			//print_r($resposta);
			$funcoes = array();
			foreach($resposta as $linha)
				$funcoes[] += $linha["funcao"];
			
			$projetos = array();
			foreach($funcoes as $linha){
				$tmp = $linha["projeto"];
				$sql = "select * from funcoes where projeto=$tmp";
				include "../src/bd/select.php";
				$projetos[] += $resposta[0]["projeto"];
			}
			
			$projetos = array();
			foreach($funcoes as $tmp){
				$sql = "select * from projetos where id=$tmp";
				include "../src/bd/select.php";
			}
		?>
				
				<p> <?= $resposta[0]["nome"] ?> </p>
			
		<button>Interesses</button>
		<button>Projetos passados</button>
	</body>
</html>

<?php } // } 
	catch(Exception $e) {
		echo 'Exceção capturada: ',  $e->getMessage(), "\n";
	}
?>
