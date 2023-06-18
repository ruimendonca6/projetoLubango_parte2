<?php

# CARREGAR O CABEÇALHO
$titulo = '- Aplicação';
include_once __DIR__ . '/compunents/header.php'
?>



<!--NavBar-->

  <body>
    <section class="header">
      <nav>
        <a href="./index.php"><img class="logo" src="/recursos/img/logo_angola2.png"/></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="./index.php">HOME</a></li>
            <li><a href="/aplicacao/locais.php">LOCAIS TURÍSTICOS</a></li>
            <li><a href="/aplicacao/alojamento.php">ALOJAMENTOS E RESTAURANTES</a></li>
            <li><a href="/aplicacao/blog.php">BLOG</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>

    <div class="text-box">
        <h1>Visite o Lubango</h1>
        <p>Venha conhecer a Cidade do Conhecimento e a sua rica cultura.</p>
    </div>
    
    </section>

    <!---Historia-->
    
    <section class="cidade">
        <h1>Cidade do Lubango</h1>
        <p>Lubango é uma cidade e município de Angola, capital da província da Huíla.</p>
        <a href="" target="_blank" class="hero-btn cid-btn">Localização</a>
        <div class="row">
        <div class="cidade-col">
            <h3>História</h3>
            <p>A cidade do Lubango, antes de ser erguida, estava num território sob influência do soba do Lubango, cuja ombala se localizava no distrito urbano atualmente conhecido como Munhino. Na chegada dos europeus ao sul de Angola, permaneceu por muito tempo como local de passagem para as incursões coloniais rumo às nascentes da bacia do Cunene, não havendo, até fins do século XIX, nenhuma posição fixa colonial. Desenvolveu-se sobretudo a partir da "colónia de Sá da Bandeira", tomando esse nome entre 1884 e 1975, enquanto o município foi sempre denominado Lubango. Após a independência do país, tanto a cidade como o município tomam definitivamente o nome de Lubango.</p>
        </div>
        <div class="cidade-col">
            <h3>Etimologia</h3>
            <p>O nome "Lubango" vem da redução do nome do rei tribal (soba) dos muílas que tinha o nome de Calubango (ou Kaluvango), que foi o líder local que recebeu a primeira expedição europeia nas suas terras. A área sob o seu domínio passou a ser denominada Terras do Calubango e, com o tempo, Terras de Lubango.</p>
        </div>
        <div class="cidade-col">
            <h3>População</h3>
            <p>Segundo as projeções populacionais de 2018, elaboradas pelo Instituto Nacional de Estatística, conta com uma população de 876 339 habitantes e área territorial de 3 147 km², sendo o mais populoso município da província, da região sul de Angola e o sexto mais populoso do país, o primeiro fora da província de Luanda.</p>
        </div>
        </div>
           
    </section>
    
    <!---Locais turisticos-->
    <section class="locais">
        <h1>Locais turísticos</h1>
        <p>Estes são os locais turísticos mais visitados da cidade.<br>Para ficar a conhecer melhor estes e outros locais turísticos da cidade do Lubango vá até <a href="./src/Pages/HomePage/Html/locais.html"><u>LOCAIS TURÍSTICOS</u></a>.</p>

        <div class="row">
            <div class="locais-col">
                <img src="/recursos/img/Serra_leba2.jpg">
                <div class="layer">
                    <a href="/aplicacao/locais.php"><h3>Serra da Leba</h3></a>
                </div>
            </div>
            <div class="locais-col">
                <img src="/recursos/img/tundavala3.jpg">
                <div class="layer">
                    <a href="/aplicacao/locais.php"><h3>Tundavala</h3></a>
                </div>
            </div>
            <div class="locais-col">
                <img src="/recursos/img/Cristo_Rei2.jpg">
                <div class="layer">
                    <a href="/aplicacao/locais.php"><h3>Cristo Rei</h3></a>
                </div>
            </div>
        </div>
    
    </section>

    <!---Alojamento-->
    <section class="aloj">
        <h1>Alojamentos e Restaurantes</h1>
        <p>Estes são considerados os três melhores alojamentos e restaurantes da cidade.<br>Para ficar a conhecer melhor estes e outros alojamentos ao seu dispor é só consultar <a href="./src/Pages/HomePage/Html/alojamento.html"><u>ALOJAMENTOS E RESTAURANTES.</u></a></p>
    
        <div class="row">
            <div class="aloj-col">
                    <img src="/recursos/img/casper-lodge.jpg">
                <div class="layer">
                    <a href="/aplicacao/alojamento.php"><h3>Casper<br>Lodge</h3></a>
                </div>
            </div>
            <div class="aloj-col">
                <img src="/recursos/img/pululukwa2.jpg">
                <div class="layer">
                    <a href="/aplicacao/alojamento.php"><h3>Pululukwa<br>Lodge</h3></a>
                </div>
            </div>
            <div class="aloj-col">
                <img src="/recursos/img/hotel-serra.jpg">
                <div class="layer">
                    <a href="/aplicacao/alojamento.php"><h3>Hotel<br>Serra da Chela</h3></a>
                </div>
            </div>
        </div>
    
    </section>

<!--Eventos-->

<section class="eventos">
    <h1>Eventos</h1>
    <p>O mês de Agosto é considerado o mês da cidade, ou seja, grande parte dos eventos culturais e desportivos são realizados nesse mês.</p>

    <div class="row">
        <div class="eventos-col">
            <img src="/recursos/img/corridas-1.jpg">
            <h3>Automobilismo</h3>
            <p>Prova Nacional de Automobilismo e Motociclismo</p>
        </div>
        <div class="eventos-col">
            <img src="/recursos/img/nossa-senhora-do-monte-1.jpg">
            <h3>Peregrinação à Capela da Nossa Senhora do Monte</h3>
            <p>Peregrinação Religiosa que começa no centro da cidade e termina no topo da montanha onde se encontra a Capela da Nossa Senhora do Monte.</p>
        </div>
        <div class="eventos-col">
            <img src="/recursos/img/feira-gado.jpg">
            <h3>Feira do Gado</h3>
            <p>Feira do Gado, onde os vários fazendeiros expõem as suas posses e as leiloam.</p>
        </div>
    </div>

</section>


<!--Visitar--->
<section class="visit">
    <h1>Marque aqui a sua estadia</h1>
    <a href="https://www.booking.com/index.pt-pt.html?label=gen173nr-1BCAEoggI46AdIM1gEaLsBiAEBmAEfuAEXyAEM2AEB6AEBiAIBqAIDuAKF57ehBsACAdICJGI1MDk5MmViLTNhNTItNDZiYy05ODY4LTA0OGJkNmYxYjc3NtgCBeACAQ&sid=1a3aa577a0340c30356b878c52f5b607&aid=304142" target="_blank" class="hero-btn">Contacte-nos</a>
</section>

<!---Pé--->
<section class="pe">
    <h4>Sobre Nós</h4>
    <p>Site realizado com propósito académico pelo aluno Rui Mendonça, estudante do Instituto Politécnico de Viana do Castelo.</p>

    <div class="icons">
        <a href="https://www.facebook.com/profile.php?id=100010214474906" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/rui_mendonca_6/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/in/rui-mendon%C3%A7a-626333252/" target="_blank"><i class="fa fa-linkedin"></i></a>
    </div>
</section>


<?php

#CARREGA O RODAPÉ
require_once __DIR__ . '/compunents/footer.php';

?>  
    
    
    
        