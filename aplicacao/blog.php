<?php
# CARREGA MIDDLEWARE PARA GARANTIR QUE APENAS UTILIZADORES AUTENTICADOS ACESSEM ESTE SITIO
require_once __DIR__ . '/../src/middleware/middleware-utilizador.php';

# ACESSA DE FUNÇÕES AUXILIADORAS. 
# NOTA: O SIMBOLO ARROBA SERVE PARA NÃO MOSTRAR MENSAGEM DE WARNING, POIS A FUNÇÃO ABAIXO TAMBÉM INICIA SESSÕES
@require_once __DIR__ . '/../src/auxiliadores/auxiliador.php';

# PROVENIENTE DE FUNÇÕES AUXILIADORAS. CARREGA O UTILIZADOR ATUAL
$utilizador = utilizador();

# Header
include_once __DIR__ . "/compunents/header.php";


?>

<section class="sub-header3">
<?php
# Navbar
  require_once __DIR__ . "/compunents/navbar.php";
  ?>

<h1>BLOG</h1>
<p class="d-flex h justify-content-center text-white text-center p-4">Faça aqui a sua participação de ocorrência, ora seja um problema, uma mudança ou uma sugestão que possamos vir a tratar para tornar a cidade do Lubango um sítio feliz para se viver.</p>
</section>

<section class="blog-content">

    <div class="row">
        <div class="blog-center">
          
            <h1>Participação de Ocorrências</h1>
            
        </div>
    </div>

    <div class="part-box">
        <h3>Escreva aqui a sua participação de ocorrência.</h3>
        <form class="part-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="form-group">
                <textarea rows="5" class="form-control" placeholder="Ocorrência"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submeter</button>
        </form>
    </div>
</section>



 <?php
# FOOTER
require_once __DIR__ . "/compunents/footer.php";
 ?>


</body>