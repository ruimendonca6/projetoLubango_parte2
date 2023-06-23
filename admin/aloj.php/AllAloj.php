<?php

require_once __DIR__ . '/../../src/middleware/middleware-administrador.php';

require_once __DIR__ . '/../../src/infraestrutura/user.php';

$titulo = ' - Gerir Informações';
require_once __DIR__ . '/../../aplicacao/compunents/header.php';
?>

<body>

    <?php

    require_once __DIR__ . '/../../aplicacao/compunents/navbar.php'

    ?>

    <h1 class="text-center p-2">Gerir Informações da Página</h1>

    <div class="container d-flex flex-column bg-light">
        <div class="content">
            <a href="/admin/Admin.php"><button type="button" class="btn btn-secondary px-5 me-2 mb-2 mt-2">Voltar</button></a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Img</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Texto</th>
                            <th scope="col">Links</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $InfoAlojamentos_Restaurantes = lerAlojamento();

                        foreach ($InfoAlojamentos_Restaurantes as $Infoalojamento) {
                        ?>
                            <tr>
                                <th><?php echo $Infoalojamento['id']; ?></th>
                                <td><?php echo $Infoalojamento['img']; ?></td>
                                <td><?php echo $Infoalojamento['titulo']; ?></td>
                                <td><?php echo $Infoalojamento['texto']; ?></td>
                                <td><?php echo $Infoalojamento['links']; ?></td>
                                <td>
                                    <a href="../../src/controlador/admin/controlador-alojamento.php?<?= 'info=atualizar&id=' . $Infoalojamento['id'] ?>">
                                        <button type="button" class="btn btn-info">Editar</button>
                                    </a>

                                    <a href="../../src/controlador/admin/controlador-alojamento.php?<?= 'info=deletar&id=' . $Infoalojamento['id'] ?>"><button class="btn btn-danger" type="submit">Excluir</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <?php

    require_once __DIR__ . '/../../aplicacao/compunents/footer.php'

    ?>