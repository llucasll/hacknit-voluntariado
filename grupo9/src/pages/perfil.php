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
		<link rel="stylesheet" type="text/css" href="src/css/perfil.css">
		<script src="src/js/perfil.js"></script>
	</head>
	<body>
		<!-- <img src="" alt="Logo" height="20%" width="20%"> -->
		<button>Projetos atuais</button>
		<button>Interesses</button>
		<button>Projetos passados</button>
	</body>
</html>

<?php } ?>
