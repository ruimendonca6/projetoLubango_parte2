<?php
# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES AUTENTICADOS ACESSEM ESTE SITIO
require_once __DIR__ . '/src/middleware/middleware-nao-autenticado.php';

# ACESSA DE FUNÇÕES AUXILIADORAS. 
# NOTA: O SIMBOLO ARROBA SERVE PARA NÃO MOSTRAR MENSAGEM DE WARNING, POIS A FUNÇÃO ABAIXO TAMBÉM INICIA SESSÕES
@require_once __DIR__ . '/src/auxiliadores/auxiliador.php';

# PROVENIENTE DE FUNÇÕES AUXILIADORAS. CARREGA O UTILIZADOR ATUAL
$utilizador = utilizador();

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = '- Aplicação';
include_once __DIR__ . '/aplicacao/compunents/header.php';
?>

<body>
  <main>
    <section class="header ">

      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="/index.php">
          <img class="logo w-50 mt-2 ms-2" src="/recursos/img/logo_angola2.png" alt="Logo Angola" />
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          
        </div>
      </nav>




      <div class="text-box  text-white text-center">
        <h1>Visite o Lubango</h1>
        <p>Venha conhecer a Cidade do Conhecimento e a sua rica cultura.</p>
        <p>Para ter acesso a mais informações, tal como locais turísticos, alojamentos e restaurantes, crie a sua conta ou faça login.</p>
        <a href="/aplicacao/login.php" button type="button" class="btn btn-outline-danger"> Login</button></a>
        <a href="/aplicacao/registo.php" button type="button" class="btn btn-outline-warning">Criar Conta</button></a>
      </div>
    </section>
    <footer class="text-center fixed-bottom">
      <!-- Grid container -->
      <div class="container p-4 pb-0 bottom">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="https://www.facebook.com/profile.php?id=100010214474906" target="_blank" role="button"><i class="fab fa-facebook-f"></i></a>

          <!-- Instagram -->
          <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="https://www.instagram.com/rui_mendonca_6/" target="_blank" role="button"><i class="fab fa-instagram"></i></a>

          <!-- Linkedin -->
          <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="https://www.linkedin.com/in/rui-mendon%C3%A7a-626333252/" target="_blank" role="button"><i class="fab fa-linkedin-in"></i></a>
          <!-- Github -->
          <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="https://github.com/ruimendonca6" target="_blank" role="button"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center text-white p-3">
        <p>Instituto Politécnico de Viana do Castelo</p>
        <p>Projeto Final de Programação Web</p>
        <p>Professores António José Viana, Marcelo Antunes Fernandes, Wenderson Wanzeller</p>
        <a class="text-white" href="https://github.com/ruimendonca6" target="_blank">Rui Mendonça</a>
      </div>
      <!-- Copyright -->
    </footer>

  </main>
  <script src="https://kit.fontawesome.com/a7c0b02132.js" crossorigin="anonymous"></script>
</body>