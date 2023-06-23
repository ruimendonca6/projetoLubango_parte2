<?php
# NOTA: O FORMULÁRIO UTILIZADOR ESTÁ SENDO USADO PARA CRIAÇÃO E ALTERAÇÃO DE UTILIZADORES
# PARA ISSO FUNCIONAR, EXISTE UM TRATAMENTO VIA GET/REQUEST ALTERANDO O VALOR DO BOTÃO DE NOME name="utilizador" 

# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES ACESSE O SITIO
require_once __DIR__ . '/../src/middleware/middleware-administrador.php';

# ACESSA DE FUNÇÕES AUXILIADORAS. 
# NOTA: O SIMBOLO ARROBA SERVE PARA NÃO MOSTRAR MENSAGEM DE WARNING, POIS A FUNÇÃO ABAIXO TAMBÉM INICIA SESSÕES
@require_once __DIR__ . '/../src/auxiliadores/auxiliador.php';

# PROVENIENTE DE FUNÇÕES AUXILIADORAS. CARREGA O UTILIZADOR ATUAL
$utilizador = utilizador();



# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = ' - Utilizador';
require_once __DIR__ . '/../aplicacao/compunents/header.php';
?>

<body>

    <?php

    require_once __DIR__ . '/../aplicacao/compunents/navbar.php';

    ?>

    <div class="p-4 mb-2 text-dark">
        <h1 class="text-center">O Administrador <?= $utilizador['nome'] ?? null ?> acedeu ao painel <br> de controlo.</h1>
    </div>

    <div class="container mb-4 d-flex vw-100">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="/recursos/img/utilizadores.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Utilizadores</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/admin/editarUtilizador.php" class="btn btn-primary">Atualizar/Apagar</a>
                    <a href="/admin/editarUtilizador.php" class="btn btn-primary">Inserir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/recursos/img/cristo-rei3.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Locais Turísticos</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/admin/editarLocais.php" class="btn btn-primary">Atualizar/Apagar</a>
                    <a href="/admin/editarLocais.php" class="btn btn-primary">Inserir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/recursos/img/pulu-cama.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Alojamentos<br>e<br>Restaurantes</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/admin/editarAloj.php" class="btn btn-primary">Atualizar/Apagar</a>
                    <a href="/admin/editarAloj.php" class="btn btn-primary">Inserir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/recursos/img/blog.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Blog</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/admin/editarBlog.php" class="btn btn-primary">Atualizar/Apagar</a>
                    <a href="/admin/editarBlog.php" class="btn btn-primary">Inserir</a>
                </div>
            </div>
        </div>

    </div>

    <?php

    require_once __DIR__ . '/../aplicacao/compunents/footer.php';

    ?>