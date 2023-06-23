<?php
# INICIALIZA O REPOSITÓRIO
require_once __DIR__ . '/../../src/infraestrutura/repositorio-utilizador.php';

# MIDDLEWARE PARA GARANTIR QUE APENAS ADMNISTRADORES ACESSES ESTA PÁGINA
require_once __DIR__ . '/../../src/middleware/middleware-utilizador.php';

# FAZ O CARREGAMENTO DE TODOS OS UTILIZADORES PARA MOSTRAR AO ADMINISTRADOR
$utilizadores = lerTodosUtilizadores();

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = ' - Painel de Administração';
require_once __DIR__ . '/../templates/header.php';
?>

<main class="bg-light">
  <section class="py-4">
    <div class="d-flex justify-content">
      <a href="/admin/utilizador.php"><button class="btn btn-success px-4 me-2">Adicionar Local</button></a>
      <a href="/admin/Admin.php"><button class="btn btn-info px-2 me-2">Sair Administração</button></a>
      <form action="/src/controlador/aplicacao/controlar-autenticacao.php" method="post">
        <button class="btn btn-danger px-4" type="submit" name="utilizador" value="logout">Fazer Logout</button>
      </form>
    </div>
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
  <section>
    <div class="table-responsive">
      <table class="table">
        <thead class="table-secondary">
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Localização</th>
            <th scope="col">Descrição</th>
            <th scope="col">Telemóvel</th>
            <th scope="col">Email</th>
            <th scope="col">Gerenciar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          # VARRE TODOS OS UTILIZADORES PARA CONSTRUÇÃO DA TABELA
          foreach ($ as $infolocais) {
          ?>
            <tr>
              <th scope="row"><?= $infolocais['nome'] ?></th>
              <td><?= $infolocais['apelido'] ?></td>
              <td><?= $infolocais['nif'] ?></td>
              <td><?= $infolocais['telemovel'] ?></td>
              <td><?= $infolocais['email'] ?></td>
              <td><?= $infolocais['administrador'] == '1' ? 'Sim' : 'Não' ?></td>
              <td>
                <div class="d-flex justify-content">
                  <a href="/src/controlador/admin/controlar-infolocais.php?<?= 'infolocais=atualizar&id=' . $infolocais['id'] ?>"><button type="button" class="btn btn-primary me-2">Atualizar</button></a>
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#deletar<?= $infolocais['id'] ?>">Apagar</button>
                </div>
              </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="deletar<?= $infolocais['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Apagar Local</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Esta operação não poderá ser desfeita. Tem certeza que deseja apagar este Local?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <a href="/src/controlador/admin/controlador-infolocais.php?<?= 'infolocais=deletar&id=' . $infolocais['id'] ?>"><button type="button" class="btn btn-danger">Confirmar</button></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim Modal -->
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>
</main>
<?php
# CARREGA O RODAPE PADRÃO
require_once __DIR__ . '/../templates/footer.php';
?>