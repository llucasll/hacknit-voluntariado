<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" type="text/css" href="../src/css/cadastro.css">
		<link rel="stylesheet" type="text/css" href="../src/css/resultado.css">
		<link rel="stylesheet" type="text/css" href="../src/css/compartilhado.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
        <meta charset="UTF-8"/>
        <title>Cadastre-se</title>
    </head>
    <body>
   	    <div class="conteudo">

			<?php include "../src/compartilhado/header.php"; ?>        
		    
		    <fieldset class="cadastro">
				<!-- formulário de cadastro do voluntário --> 
				<div class="cadastro">
					<form action="../src/interno/cadastrar.php" method="POST">
						<input type="text" name="username" placeholder="Nome" maxlength="200"><br>
						<input type="password" name="psw" type="password" placeholder="Senha" maxlength="200"><br>
						<input type="text" name="age" placeholder="Idade" maxlength="2"><br>
						<input type="text" name="email" placeholder="Email" type="email" maxlength="100"><br>
						<input type="text" name="description" placeholder="Descrição" maxlength="500"><br>
						<input type="text" name="phone" placeholder="Telefone" maxlength="14"><br>
						
						<button type="submit">Cadastrar</button>
				
				
					</form>
				</div>
		    </fieldset>
		    
		    <?php include "../src/compartilhado/footer.php"; ?>
	    </div>
    </body>
</html>
