<?php
# Header
include_once __DIR__ . "/compunents/header.php"

# Navbar
require_once __DIR__ . "/compunents/navbar.php"
?>


   


<body>
  <header>
  <section class="header">
    <div class="container-fluid"><img src="/recursos/img/cidade-capa.jpg" height="100" width="100"></div>
    <div class="text-box">
    <h1>Visite o Lubango</h1>
    <p>Venha conhecer a Cidade do Conhecimento e a sua rica cultura.</p>
    <a href="google.com/maps/place/Lubango,+Angola/@-14.9106332,13.5285005,13z/data=!3m1!4b1!4m6!3m5!1s0x1ba34b79115f7f23:0xcaa20e87e439fb10!8m2!3d-14.9186136!4d13.5321234!16zL20vMDJuODVq?entry=ttu" class="btn btn-primary">Localização</a>
</div>
  </header>

  
   

  <section class="cidade">
    <div class="container">
      <h1>Cidade do Lubango</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="cidade-col">
            <h3>História</h3>
            <p>A cidade do Lubango, antes de ser erguida, estava num território sob influência do soba do Lubango, cuja ombala se localizava no distrito urbano atualmente conhecido como Munhino. Na chegada dos europeus ao sul de Angola, permaneceu por muito tempo como local de passagem para as incursões coloniais rumo às nascentes da bacia do Cunene, não havendo, até fins do século XIX, nenhuma posição fixa colonial. Desenvolveu-se sobretudo a partir da "colónia de Sá da Bandeira", tomando esse nome entre 1884 e 1975, enquanto o município foi sempre denominado Lubango. Após a independência do país, tanto a cidade como o município tomam definitivamente o nome de Lubango.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cidade-col">
            <h3>Etimologia</h3>
            <p>O nome "Lubango" vem da redução do nome do rei tribal (soba) dos muílas que tinha o nome de Calubango (ou Kaluvango), que foi o líder local que recebeu a primeira expedição europeia nas suas terras. A área sob o seu domínio passou a ser denominada Terras do Calubango e, com o tempo, Terras de Lubango.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cidade-col">
            <h3>População</h3>
            <p>Segundo as projeções populacionais de 2018, elaboradas pelo Instituto Nacional de Estatística, conta com uma população de 876 339 habitantes e área territorial de 3 147 km², sendo o mais populoso município da província, da região sul de Angola e o sexto mais populoso do país, o primeiro fora da província de Luanda.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="locais">
    <div class="container">
      <h1>Locais Turísticos</h1>
      <p>Estes são os locais turísticos mais visitados da cidade.<br>Para ficar a conhecer melhor estes e outros locais turísticos da cidade do Lubango vá até <a href="/aplicacao/locais.php"><abbr>LOCAIS TURÍSTICOS</abbr></a>.</p>
      <div class="row">
        <div class="col-md-4">
          <div class="locais-col">
            <img src="/recursos/img/Serra_leba2.jpg" alt="Serra da Leba">
            <div class="layer">
              <h3>Serra da Leba</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="locais-col">
            <img src="/recursos/img/tundavala3.jpg" alt="Tundavala">
            <div class="layer">
              <h3>Tundavala</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="locais-col">
            <img src="/recursos/img/Cristo_Rei2.jpg" alt="Cristo Rei">
            <div class="layer">
              <h3>Cristo Rei</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="aloj">
    <div class="container">
      <h1>Alojamento</h1>
      <p>Estes são considerados os três melhores alojamentos e restaurantes da cidade.<br>Para ficar a conhecer melhor estes e outros alojamentos ao seu dispor é só consultar <a href="/aplicacao/alojamento.php"><abbr>ALOJAMENTOS E RESTAURANTES.</abbr></a></p>
      <div class="row">
        <div class="col-md-4">
          <div class="aloj-col">
            <img src="/recursos/img/casper-lodge.jpg" alt="Casper Lodge">
            <div class="layer">
              <h3>Casper Lodge</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="aloj-col">
            <img src="/recursos/img/pululukwa2.jpg" alt="Pululukwa">
            <div class="layer">
              <h3>Pululukwa</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="aloj-col">
            <img src="/recursos/img/hotel-serra.jpg" alt="Hotel Serra de Chela">
            <div class="layer">
              <h3>Hotel Serra da Chela</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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

    
        