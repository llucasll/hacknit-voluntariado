<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Busca</title>
</head>

<body>
    
    <!-- div para a página resultado de busca, essa div não é necessária para a personalização 
da página se pode usar o body ou .html -->
    <div class="buscaLateral">
        <!--div para a caixa lateral que se localizará a esquerda para que a busca 
    possa continuar na página de resultados -->
        <form action="tela_de_resultado" method="POST">
            <div>
                <input type="checkbox" class="filter" name="education" value="false" unchecked />
                <label for="education">Educação</label>
                <input type="checkbox" class="filter" name="health" value="false" unchecked />
                <label for="health">Saúde</label>
                <input type="checkbox" class="filter" name="meioambiente" value="false" unchecked />
                <label for="meioambiente">Meio Ambiente</label>
                <input type="checkbox" class="filter" name="security" value="false" unchecked />
                <label for="seguranca">Segurança</label>

            </div>
            <button id="submit">Limpar filtros</button>
        </form>

        <div class="content">
            <div class="card-body">
                <div class="card">
                    <div class="card-image">
                        <img src="anyimage.jpg">
                        <span class="card-title">Project Title</span>
                    </div>
                    <div class="card-content">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-image">
                        <img src="anyimage.jpg">
                        <span class="card-title">Project Title</span>
                    </div>
                    <div class="card-content">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-image">
                    <img src="anyimage.jpg">
                    <span class="card-title">Project Title</span>
                </div>
                <div class="card-content">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum."</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>


    </div>
</body>

</html>
