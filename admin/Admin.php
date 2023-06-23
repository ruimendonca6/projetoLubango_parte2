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

    require_once __DIR__ . '/../admin/templates/navbarAdmin.php';

    ?>

    <div class="p-4 mb-2 text-dark">
        <h1 class="text-center">O Administrador <?= $utilizador['nome'] ?? null ?> acedeu ao painel <br> de controlo.</h1>
    </div>

    <div class="container mb-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="/recursos/img/adult-busy-cellphone-1083622-1200x675.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Utilizadores</h5>
                    <p class="card-text">Aqui irá poder gerir os vários Utilizadores que se irão registra na plataforma.</p>
                    <a href="/admin/editarUtilizador.php" class="btn btn-primary">Atualizar/Apagar</a>
                    <a href="/admin/editarUtilizador.php" class="btn btn-primary">Inserir</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="/recursos/img/cristo-rei3.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Locais Turísticos</h5>
                    <p class="card-text">Aqui irá gerir todos os Locais Turísticos da cidade do Lubango.</p>
                    <a href="/admin/locais.php/AllLocais.php" class="btn btn-primary">Atualizar/Apagar</a>
                    <a href="/admin/locais.php/inserirLocais.php" class="btn btn-primary">Inserir</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="/recursos/img/pulu-cama.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Alojamentos<br>e<br>Restaurantes</h5>
                    <p class="card-text">Aqui irá gerir todos os Alojamentos e Restaurantes da cidade do Lubango.</p>
                    <a href="/admin/aloj.php/editarAloj.php" class="btn btn-primary">Atualizar/Apagar</a>
                    <a href="/admin/aloj.php/inserirAloj.php" class="btn btn-primary">Inserir</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="/recursos/img/Blog_construcao-civil.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Blog</h5>
                    <p class="card-text">Aqui irá gerir todos os Registos de Ocorrência.</p>
                    <a href="/admin/editarBlog.php" class="btn btn-primary">Atualizar/Apagar</a>
                    <a href="/admin/editarBlog.php" class="btn btn-primary">Inserir</a>
                </div>
            </div>
        </div>
    </div>
</div>


    </div>

    <?php

    require_once __DIR__ . '/../aplicacao/compunents/footer.php';

    ?>