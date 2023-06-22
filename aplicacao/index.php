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


<section class="header">
  <?php

  # Navbar
  require_once __DIR__ . "/compunents/navbar.php";

  ?>
  <div class="text-box text-center">
    <h1 class="d-flex h justify-content-center text-white text-center p-4">Bem-Vindo, <?= $utilizador['nome'] ?? null ?></h1>
    <p class="d-flex h justify-content-center text-white text-center p-4">Venha conhecer a Cidade do Conhecimento e a sua rica cultura.</p>
    <p class="d-flex h justify-content-center text-white text-center p-4">Agora tem acesso à história cultural e geográfica da cidade e também dos variados alojamentos, restaurantes e eventos.</p>
    <a href="https://www.google.com/maps/place/Lubango,+Angola/@-14.9106332,13.5285005,13z/data=!3m1!4b1!4m6!3m5!1s0x1ba34b79115f7f23:0xcaa20e87e439fb10!8m2!3d-14.9186136!4d13.5321234!16zL20vMDJuODVq?entry=ttu" target="_blank" type="button" class="btn btn-outline-danger">Localização</button></a>
  </div>
</section>


<section class="cidade" >
  <h1 class="h1">Cidade do Lubango</h1>
  <p class="p">Lubango é uma cidade e município de Angola, capital da província da Huíla.</p>
  <a href="https://www.google.com/maps/place/Lubango,+Angola/@-14.9106332,13.5285005,13z/data=!3m1!4b1!4m6!3m5!1s0x1ba34b79115f7f23:0xcaa20e87e439fb10!8m2!3d-14.9186136!4d13.5321234!16zL20vMDJuODVq?entry=ttu" target="_blank" type="button" class="btn btn-outline-danger">Localização</button></a>
  <div class="row">
    <div class="cidade-col">
      <h3 class="h3">História</h3>
      <p>A cidade do Lubango, antes de ser erguida, estava num território sob influência do soba do Lubango, cuja ombala se localizava no distrito urbano atualmente conhecido como Munhino. Na chegada dos europeus ao sul de Angola, permaneceu por muito tempo como local de passagem para as incursões coloniais rumo às nascentes da bacia do Cunene, não havendo, até fins do século XIX, nenhuma posição fixa colonial. Desenvolveu-se sobretudo a partir da "colónia de Sá da Bandeira", tomando esse nome entre 1884 e 1975, enquanto o município foi sempre denominado Lubango. Após a independência do país, tanto a cidade como o município tomam definitivamente o nome de Lubango.</p>
    </div>
    <div class="cidade-col">
      <h3 class="h3">Etimologia</h3>
      <p>O nome "Lubango" vem da redução do nome do rei tribal (soba) dos muílas que tinha o nome de Calubango (ou Kaluvango), que foi o líder local que recebeu a primeira expedição europeia nas suas terras. A área sob o seu domínio passou a ser denominada Terras do Calubango e, com o tempo, Terras de Lubango.</p>
    </div>
    <div class="cidade-col">
      <h3 class="h3">População</h3>
      <p>Segundo as projeções populacionais de 2018, elaboradas pelo Instituto Nacional de Estatística, conta com uma população de 876 339 habitantes e área territorial de 3 147 km², sendo o mais populoso município da província, da região sul de Angola e o sexto mais populoso do país, o primeiro fora da província de Luanda.</p>
    </div>
  </div>
</section>

<div class="locais">
  <h1>Locais turísticos</h1>
  <p>Estes são os locais turísticos mais visitados da cidade.<br>Para ficar a conhecer melhor estes e outros locais turísticos da cidade do Lubango vá até <a href="/aplicacao/locais.php"><u>LOCAIS TURÍSTICOS</u></a>.</p>
  <div class="row">
    <div class="locais-col">
      <div class="locais-col img">
        <img src="/recursos/img/Serra_leba2.jpg">
        <div class="layer">
          <a href="/aplicacao/locais.php">
            <h3>Serra da Leba</h3>
          </a>
        </div>
      </div>
    </div>
    <div class="locais-col">
      <div class="locais-col img">
        <img src="/recursos/img/tundavala3.jpg">
        <div class="layer">
          <a href="/aplicacao/locais.php">
            <h3>Tundavala</h3>
          </a>
        </div>
      </div>
    </div>
    <div class="locais-col">
      <div class="locais-col img">
        <img src="/recursos/img/Cristo_Rei2.jpg">
        <div class="layer">
          <a href="/aplicacao/locais.php">
            <h3>Serra da Leba</h3>
          </a>
        </div>
      </div>
    </div>
  </div>


  <section class="aloj">
    <h1>Alojamentos e Restaurantes</h1>
    <p>Estes são considerados os três melhores alojamentos e restaurantes da cidade.<br>Para ficar a conhecer melhor estes e outros alojamentos ao seu dispor é só consultar <a href="/aplicacao/alojamento.php"><u>ALOJAMENTOS E RESTAURANTES.</u></a></p>
    <div class="row">
      <div class="aloj-col">
        <div class="aloj-col img">
          <img src="/recursos/img/casper-lodge.jpg">
          <div class="layer">
            <a href="/aplicacao/alojamento.php"><h3>Casper<br>Lodge</h3>
            </a>
          </div>
        </div>
      </div>
      <div class="aloj-col">
        <div class="aloj-col img">
          <img src="/recursos/img/pululukwa2.jpg">
          <div class="layer">
            <a href="/aplicacao/alojamento.php"><h3>Pululukwa<br>Lodge</h3>
            </a>
          </div>
        </div>
      </div>
      <div class="aloj-col">
        <div class="aloj-col img">
          <img src="/recursos/img/hotel-serra.jpg">
          <div class="layer">
            <a href="/aplicacao/alojamento.php">
              <h3>Hotel<br>Serra da Chela</h3>
            </a>
          </div>
        </div>
      </div>
      </div>
    </section>


  <section class="eventos">
    <h1>Eventos</h1>
    <p>O mês de Agosto é considerado o mês da cidade, ou seja, grande parte dos eventos culturais e desportivos são realizados nesse mês.</p>

    <div class="row">
      <div class="eventos-col">
        <div class="eventos-col img">
        <img src="/recursos/img/corridas-1.jpg" alt="Automobilismo" style="width: 100%; border-radius: 10px;" class="img-fluid rounded">
        <h3 class="eventos-col h3">Automobilismo</h3>
        <p class="enventos-col p">Prova Nacional de Automobilismo e Motociclismo</p>
      </div>
      </div>
      <div class="eventos-col">
        <div class="eventos-col img">
        <img src="/recursos/img/nossa-senhora-do-monte-1.jpg" style="width: 100%; border-radius: 10px;" class="img-fluid rounded">
        <h3 class="eventos-col h3">Peregrinação à Capela da Nossa Senhora do Monte</h3>
        <p class="enventos-col p">Peregrinação Religiosa que começa no centro da cidade e termina no topo da montanha onde se encontra a Capela da Nossa Senhora do Monte.</p>
      </div>
      </div>
      <div class="eventos-col">
        <div class="eventos-col img">
        <img src="/recursos/img/feira-gado.jpg" style="width: 100%; border-radius: 10px;" class="img-fluid rounded">
        <h3 class="eventos-col h3">Feira do Gado</h3>
        <p class="enventos-col p">Feira do Gado, onde os vários fazendeiros expõem as suas posses e as leiloam.</p>
      </div>
      </div>
    </div>
  </section>

  <section class="visit">
    <h1>Marque aqui a sua estadia</h1>
    <a href="https://www.google.com/maps/place/Cristo+Rei+Statuate+%2FLubango/@-14.9400375,13.5118906,15z/data=!4m2!3m1!1s0x0:0xb7389c5e127c5216?sa=X&ved=2ahUKEwib95TP9tT_AhXmVKQEHb5BCxQQ_BJ6BAhUEAg" target="_blank" type="button" class="btn btn-warning">Contacte-nos</a>
  </section>

  <?php
  # FOOTER
  require_once __DIR__ . "/compunents/footer.php";
  ?>