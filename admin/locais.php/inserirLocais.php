<?php

require_once __DIR__ . '/../../src/middleware/middleware-administrador.php';

require_once __DIR__ . '/../../src/infraestrutura/user.php';

$titulo = ' - Inserir Informações';
require_once __DIR__ . '/../../aplicacao/compunents/header.php';
?>

<body>
    <?php

    require_once __DIR__ . '/../../aplicacao/compunents/navbar.php'

    ?>

    <div class="p-4 mb-2 bg-info text-white">
        <h1 class="text-center">Inserir Informações</h1>
    </div>

    <div class="container d-flex flex-column bg-light">
        <div class="content">
            <main class="">
                <section class="py-4">
                    <a href="/admin/Admin.php"><button type="button" class="btn btn-secondary px-5">Voltar</button></a>
                </section>
                <section>
                    <?php
                    # MOSTRA AS MENSAGENS DE SUCESSO E DE ERRO VINDA DO CONTROLADOR-UTILIZADOR
                    if (isset($_SESSION['sucesso'])) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                        echo $_SESSION['sucesso'] . '<br>';
                        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        unset($_SESSION['sucesso']);
                    }
                    if (isset($_SESSION['erros'])) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                        foreach ($_SESSION['erros'] as $erro) {
                            echo $erro . '<br>';
                        }
                        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                        unset($_SESSION['erros']);
                    }
                    ?>
                </section>
                <section class="pb-4">
                    <form enctype="multipart/form-data" action="/src/controlador/admin/controlador-locais.php" method="post">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Imagem</label>
                            <input accept="image/*" type="file" class="form-control" id="inputGroupFile01" name="img" />
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Titulo</span>
                            <input type="text" class="form-control" name="titulo" maxlength="100" size="100" value="<?= isset($_REQUEST['titulo']) ? $_REQUEST['titulo'] : null ?>" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Texto</span>
                            <input type="text" class="form-control" name="texto" maxlength="400" size="400" value="<?= isset($_REQUEST['texto']) ? $_REQUEST['texto'] : null ?>" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Links</span>
                            <input type="text" class="form-control" name="links" maxlength="100" size="100" value="<?= isset($_REQUEST['links']) ? $_REQUEST['links'] : null ?>" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Localização</span>
                            <input type="text" class="form-control" name="localização" maxlength="100" size="100" value="<?= isset($_REQUEST['localização']) ? $_REQUEST['localização'] : null ?>" required>
                        </div>
                        <div class="d-grid col-4 mx-auto mb-5">
                            <input type="hidden" name="id" value="<?= isset($_REQUEST['id']) ? $_REQUEST['id'] : null ?>">
                            <input type="hidden" name="img" value="<?= isset($_REQUEST['img']) ? $_REQUEST['img'] : null ?>">
                            <button class="w-100 btn btn-lg btn-success mb-2" type="submit" name="info" value="criar" <?= isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'atualizar' ? 'value="atualizar"' : 'value="criar"' ?>>Inserir</button>
                        </div>
                    </form>
                </section>
            </main>
        </div>

    </div>

    <?php

    require_once __DIR__ . '/../../aplicacao/compunents/footer.php'

    ?>