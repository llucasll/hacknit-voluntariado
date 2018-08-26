

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="../css/resultado.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Resultado</title>
</head>

<body>
    
    <!-- div para a página resultado de busca, essa div não é necessária para a personalização 
    da página se pode usar o body ou .html -->
   
    <div class="conteudo">
        <header>
            <img src="../../media/titulo.png"  style="width:15%">
        </header>
        <!--div para a caixa lateral que se localizará a esquerda para que a busca 
        possa continuar na página de resultados -->
    
        <div class ="buscaLateral">
        <!-- filtro para busca -->
            <form class="form" action="tela_de_resultado.php" method='POST'>
                    <h3>Área:</h3>
                    <input type="radio" class="filter" name="interesse" value="educacao" unchecked />Educação<br>
                    <input type="radio" class="filter" name="interesse" value="saude" unchecked />Saúde<br>
                    <input type="radio" class="filter" name="interesse" value="ambiente" unchecked />Meio Ambiente<br>
                    <input type="radio" class="filter" name="interesse" value="seguranca" unchecked />Segurança<br>
                    <h3>Dias da semana:</h3>
                    <input type="radio" class="filter" name="dia" value="dom" unchecked />Domingo<br>
                    <input type="radio" class="filter" name="dia" value="seg" unchecked />Segunda<br>
                    <input type="radio" class="filter" name="dia" value="ter" unchecked />Terça<br>
                    <input type="radio" class="filter" name="dia" value="qua" unchecked />Quarta<br>
                    <input type="radio" class="filter" name="dia" value="qui" unchecked />Quinta<br>
                    <input type="radio" class="filter" name="dia" value="sex" unchecked />Sexta<br>
                    <input type="radio" class="filter" name="dia" value="sab" unchecked />Sábado<br>
                    <button type="submit" style="align-content: center">Pesquisar</button><br>
                    <button id="clear" onclick="checkboxClear()">Limpar filtros</button>                                         
            </form>
            </div>
            <?php
            if(isset($_POST["dia"])){
                $tmp2 = $_POST["dia"];
            }else{
                $tmp2 = NULL;
            }
            if(isset($_POST["interesse"])){
                $tmp = $_POST["interesse"];
            }else{
                $tmp = NULL;
            }
			$sql = "select * from projetos where ((categoria = '$tmp') OR (diaDeSemana = '$tmp2'))";
			include "../bd/select.php";
			
			foreach($resposta as $linha){
				if(count($linha)){				
					// gerador de resultados
					?><div class="card">
                    <img src="<?= $linha["imagem"] ?>" alt="Avatar" style="width:100%">
                <div class="day"><?= utf8_encode($linha["inicio"]) ?></div>
                <div class="container">
                    <h4><?= utf8_encode($linha["nome"]) ?></h4> 
                    <p><?= utf8_encode($linha["descricao"]) ?></p> 
                    <a href="../../page/projeto.php?id=<?= $linha["id"] ?>" ><Button id="ver">Ver projeto</button></a>
                </div>
            </div><?php
					
					
				}
			}
			?>
            
        </div>
        <footer>
                <p>Projeto desenvolvido durante a HackNit</p>
                <img src="../../media/Logo_niteroi.png" alt="Logo Niteroi" style="width:10%">
            </footer>
    </div>
    
    
   
    
</body>
</html>
