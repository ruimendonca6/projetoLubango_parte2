<?php
# MIDDLEWARE PARA GARANTIR QUE APENAS UTILIZADORES NÃO AUTENTICADOS VEJAM A PÁGINA DE LOGIN
require_once __DIR__ . '/../src/middleware/middleware-nao-autenticado.php';

# DEFINI O TÍTULO DA PÁGINA
$titulo = ' - Login';

# INICIA CABECALHO
include_once __DIR__ . '/compunents/header.php';

?>

<body class="container vh-100 d-flex align-items-top-left justify-content-top-left text-top-left bg-light">
<nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="/index.php">
        <img class="logo w-50 mt-2 ms-2 " src="/recursos/img/logo_angola2.png" alt="Logo Angola" />
    </a>
</nav>
  <div class="w-75">
    <main>
      <section>
        <?php
        # MOSTRA AS MENSAGENS DE ERRO CASO LOGIN SEJA INVÁLIDO
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
      <form action="/src/controlador/aplicacao/controlar-autenticacao.php" method="post">
        <h1 class="h3 mb-3 fw-normal">LOGIN</h1>
        <div class="form-floating mb-2">
          <input type="email" class="form-control" id="Email" placeholder="Email" name="email" maxlength="255" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email'] : null ?>">
          <label for="Email">Endereço de Email</label>
        </div>
        <div class="form-floating mb-2">
          <input type="password" class="form-control" id="palavra_passe" placeholder="Palavra Passe" name="palavra_passe" maxlength="255" value="<?= isset($_REQUEST['palavra_passe']) ? $_REQUEST['palavra_passe'] : null ?>" >
          <label for="palavra_passe">Palavra Passe</label>
        </div>
        <div class="checkbox mb-3">
          <label><input type="checkbox" value="lembra-me">Lembrar-me</label>
        </div>
        <button class="w-100 btn btn-lg btn-success mb-2" type="submit" name="utilizador" value="login">Entrar</button>
      </form>
      <a href="/"><button class="w-100 btn btn-lg btn-info">Voltar</button></a>
   
    <?php
    include_once __DIR__ . '/compunents/footer.php';
    ?>
     </main>