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


<section class="cidade container" style="width: 80%; margin: auto; text-align: center; padding-top: 100px;">
  <h1 class="display-4" style="font-size: 36px; font-weight: 600;">Cidade do Lubango</h1>
  <p class="lead" style="color: #000000; font-size: 20px; font-weight: 400; line-height: 22px; padding: 10px;">Lubango é uma cidade e município de Angola, capital da província da Huíla.</p>
  <a href="https://www.google.com/maps/place/Lubango,+Angola/@-14.9106332,13.5285005,13z/data=!3m1!4b1!4m6!3m5!1s0x1ba34b79115f7f23:0xcaa20e87e439fb10!8m2!3d-14.9186136!4d13.5321234!16zL20vMDJuODVq?entry=ttu" target="_blank" class="btn btn-primary hero-btn cid-btn">Localização</a>
  <div class="row mt-5" style="margin-top: 5%; display: flex; justify-content: space-between;">
    <div class="col-md-4 cidade-col" style="flex-basis: 31%; background: #fae678; border-radius: 10px; margin-bottom: 5%; padding: 20px 12px; box-sizing: border-box; transition: 0.5s;">
      <h3 class="text-center" style="font-weight: 600; margin: 10px 0;">História</h3>
      <p>A cidade do Lubango, antes de ser erguida, estava num território sob influência do soba do Lubango, cuja ombala se localizava no distrito urbano atualmente conhecido como Munhino. Na chegada dos europeus ao sul de Angola, permaneceu por muito tempo como local de passagem para as incursões coloniais rumo às nascentes da bacia do Cunene, não havendo, até fins do século XIX, nenhuma posição fixa colonial. Desenvolveu-se sobretudo a partir da "colónia de Sá da Bandeira", tomando esse nome entre 1884 e 1975, enquanto o município foi sempre denominado Lubango. Após a independência do país, tanto a cidade como o município tomam definitivamente o nome de Lubango.</p>
    </div>
    <div class="col-md-4 cidade-col" style="flex-basis: 31%; background: #fae678; border-radius: 10px; margin-bottom: 5%; padding: 20px 12px; box-sizing: border-box; transition: 0.5s;">
      <h3 class="text-center" style="font-weight: 600; margin: 10px 0;">Etimologia</h3>
      <p>O nome "Lubango" vem da redução do nome do rei tribal (soba) dos muílas que tinha o nome de Calubango (ou Kaluvango), que foi o líder local que recebeu a primeira expedição europeia nas suas terras. A área sob o seu domínio passou a ser denominada Terras do Calubango e, com o tempo, Terras de Lubango.</p>
    </div>
    <div class="col-md-4 cidade-col" style="flex-basis: 31%; background: #fae678; border-radius: 10px; margin-bottom: 5%; padding: 20px 12px; box-sizing: border-box; transition: 0.5s;">
      <h3 class="text-center" style="font-weight: 600; margin: 10px 0;">População</h3>
      <p>Segundo as projeções populacionais de 2018, elaboradas pelo Instituto Nacional de Estatística, conta com uma população de 876 339 habitantes e área territorial de 3 147 km², sendo o mais populoso município da província, da região sul de Angola e o sexto mais populoso do país, o primeiro fora da província de Luanda.</p>
    </div>
  </div>
</section>

<div class="locais container" style="width: 80%; margin: auto; text-align: center; padding-top: 50px;">
  <h1>Locais turísticos</h1>
  <p>Estes são os locais turísticos mais visitados da cidade.<br>Para ficar a conhecer melhor estes e outros locais turísticos da cidade do Lubango vá até <a href="/aplicacao/locais.php"><u>LOCAIS TURÍSTICOS</u></a>.</p>
  <div class="row">
    <div class="col-md-4 locais-col animated fadeIn" style="flex-basis: 32%; border-radius: 10px; margin-bottom: 30px; position: relative; overflow: hidden;">
      <img src="/recursos/img/Serra_leba2.jpg" alt="Imagem" style="width: 100%; display: block;">
      <div class="layer" style="background: transparent; height: 100%; width: 100%; position: absolute; top: 0; left: 0; transition: 0.5s;">
        <h3 style="width: 100%; font-weight: 500; color: #fff; font-size: 26px; bottom: 0; left: 50%; transform: translateX(-50%); position: absolute; opacity: 0; transition: 0.5s;">Serra da Leba</h3>
      </div>
    </div>
    <div class="col-md-4 locais-col animated fadeIn" style="flex-basis: 32%; border-radius: 10px; margin-bottom: 30px; position: relative; overflow: hidden;">
      <img src="/recursos/img/tundavala3.jpg" alt="Imagem" style="width: 100%; display: block;">
      <div class="layer" style="background: transparent; height: 100%; width: 100%; position: absolute; top: 0; left: 0; transition: 0.5s;">
        <h3 style="width: 100%; font-weight: 500; color: #fff; font-size: 26px; bottom: 0; left: 50%; transform: translateX(-50%); position: absolute; opacity: 0; transition: 0.5s;">Tundavala</h3>
      </div>
    </div>
    <div class="col-md-4 locais-col animated fadeIn" style="flex-basis: 32%; border-radius: 10px; margin-bottom: 30px; position: relative; overflow: hidden;">
      <img src="/recursos/img/Cristo_Rei2.jpg" alt="Imagem" style="width: 100%; display: block;">
      <div class="layer" style="background: transparent; height: 100%; width: 100%; position: absolute; top: 0; left: 0; transition: 0.5s;">
        <h3 style="width: 100%; font-weight: 500; color: #fff; font-size: 26px; bottom: 0; left: 50%; transform: translateX(-50%); position: absolute; opacity: 0; transition: 0.5s;"></h3>
      </div>
    </div>
  </div>
</div>


<div class="aloj container" style="width: 80%; margin: auto; text-align: center; padding-top: 50px;">
  <h1>Alojamento e Restaurantes</h1>
  <p>Estes são considerados os três melhores alojamentos e restaurantes da cidade.<br>Para ficar a conhecer melhor estes e outros alojamentos ao seu dispor é só consultar <a href="./src/Pages/HomePage/Html/alojamento.html"><u>ALOJAMENTOS E RESTAURANTES.</u></a></p>
  <div class="row">
    <div class="col-md-4 aloj-col" style="flex-basis: 32%; border-radius: 10px; margin-bottom: 30px; position: relative; overflow: hidden;">
      <img src="/recursos/img/casper-lodge.jpg" alt="Imagem" style="width: 100%; display: block;">
      <div class="layer" style="background: transparent; height: 100%; width: 100%; position: absolute; top: 0; left: 0; transition: 0.5s;">
        <h3 style="width: 100%; font-weight: 500; color: #fff; font-size: 26px; bottom: 0; left: 50%; transform: translateX(-50%); position: absolute; opacity: 0; transition: 0.5s;">Casper Lodge</h3>
      </div>
    </div>
    <div class="col-md-4 aloj-col" style="flex-basis: 32%; border-radius: 10px; margin-bottom: 30px; position: relative; overflow: hidden;">
      <img src="/recursos/img/pululukwa2.jpg" alt="Imagem" style="width: 100%; display: block;">
      <div class="layer" style="background: transparent; height: 100%; width: 100%; position: absolute; top: 0; left: 0; transition: 0.5s;">
        <h3 style="width: 100%; font-weight: 500; color: #fff; font-size: 26px; bottom: 0; left: 50%; transform: translateX(-50%); position: absolute; opacity: 0; transition: 0.5s;">Pululukwa</h3>
      </div>
    </div>
    <div class="col-md-4 aloj-col" style="flex-basis: 32%; border-radius: 10px; margin-bottom: 30px; position: relative; overflow: hidden;">
      <img src="/recursos/img/hotel-serra.jpg" alt="Imagem" style="width: 100%; display: block;">
      <div class="layer" style="background: transparent; height: 100%; width: 100%; position: absolute; top: 0; left: 0; transition: 0.5s;">
        <h3 style="width: 100%; font-weight: 500; color: #fff; font-size: 26px; bottom: 0; left: 50%; transform: translateX(-50%); position: absolute; opacity: 0; transition: 0.5s;">Hotel Serra da Chela</h3>
      </div>
    </div>
  </div>
</div>

<section class="eventos">
  <div class="container">
    <h1>Eventos</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="eventos-col">
          <img src="evento1.jpg" alt="Evento 1">
          <h3>Evento 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum purus vitae neque efficitur, ut
            faucibus nunc pharetra.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="eventos-col">
          <img src="evento2.jpg" alt="Evento 2">
          <h3>Evento 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum purus vitae neque efficitur, ut
            faucibus nunc pharetra.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="eventos-col">
          <img src="evento3.jpg" alt="Evento 3">
          <h3>Evento 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum purus vitae neque efficitur, ut
            faucibus nunc pharetra.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
# FOOTER
require_once __DIR__ . "/compunents/footer.php"
?>