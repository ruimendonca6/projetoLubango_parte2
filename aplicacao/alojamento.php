<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cidade do Lubango</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;900&family=Poppins:wght@100;200;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!--NavBar-->
<body>
    <section class="sub-header1">
      <nav>
        <a href="../../../../index.php"><img class="logo" src="../img/logo_angola2.png"/></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="../../../../index.php">HOME</a></li>
            <li><a href="../../../Pages/HomePage/Aplicacao/locais.php">LOCAIS TURÍSTICOS</a></li>
            <li><a href="../../../Pages/HomePage/Aplicacao/alojamento.php">ALOJAMENTOS E RESTAURANTES</a></li>
            <li><a href="../../../Pages/HomePage/Aplicacao/blog.php">BLOG</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>

<h1>ALOJAMENTOS E RESTAURANTES</h1>
    
</section>

<!--Alojamento e restaurantes-->

<section class="aloj-res">

    <div class="row">
        <div class="res-col">
            <h1>Pululukwa Lodge</h1>
            <p>Dentro da cidade do Lubango, secretamente dissimulado entre a vegetação e as montanhas, nasceu um dos mais luxuosos empreendimentos de Angola, o Pululukwa Resort.</p>
            <p>Este luxuoso resort pensado ao mais ínfimo pormenor, é um projecto arrojado, implantado numa área com vários hectares, serpenteado por um rio, e com vários lagos, em casamento perfeito com a natureza.
                Com um restaurante central, com amplos espaços exteriores e vistas deslumbrantes, a oferta de alojamento é composta por 60 luxuosos bungalows, implantados em três “aldeias” com características diferentes, ligadas por longos passadiços.</p>
            <p>O projecto prevê também uma quinta pedagógica, povoamento animal, spa, etc.</p>
            <a href="https://www.tripadvisor.pt/Hotel_Review-g670166-d10172163-Reviews-Pululukwa_Resort-Lubango_Huila_Province.html" target="_blank" class="hero-btn red-btn">Reserve Agora</a>
        </div>
        <div class="res-col">
            <img src="../img/pulu-sala.jpg">
        </div>
    </div>
    <div class="row">
        <div class="res-col">
            <h1>Casper Lodge</h1>
            <p>O Casper Resort é um boutique-resort de luxo situado na cidade do Lubango, com belos jardins, piscina, galeria de arte, restaurante, ginásio totalmente funcional, e spa. É um destino ideal para todo o ano, perfeito para férias de família, retiros corporativos, ou o local perfeito local para uma escapadela romântica.</p>
            <a href="https://www.casperresort.com/?lang=pt" target="_blank" class="hero-btn red-btn">Reserve Agora</a>
        </div>
        <div class="res-col">
            <img src="../img/casper2.jpg">
        </div>
    </div>
    <div class="row">
        <div class="res-col">
            <h1>Hotel Serra da Chela</h1>
            <p>Tendo iniciado actividade em 2009, o Hotel Serra da Chela é uma unidade hoteleira de 4 estrelas inserida numa área de cerca de 16.000 m2 e localizada no Complexo Nossa Senhora do Monte na cidade do Lubango.</p>
            <p>O edifício principal é composto por 4 pisos com 108 quartos, 96 quartos standard e 12 suites executivas, master e presidencial. O segundo edifício é composto por 3 pisos, denominado por Serra da Chela Boutique Hotel, com 52 quartos e uma suíte presidencial. O Serra da Chela Boutique Hotel destaca-se pelo seu estilo mais elegante e luxuoso. Sala de conferências com capacidade para 200 pessoas e uma sala de reuniões de menor dimensão.</p>
            <a href="https://www.tripadvisor.pt/Hotel_Review-g670166-d4232350-Reviews-Serra_da_Chela_Hotel-Lubango_Huila_Province.html" target="_blank" class="hero-btn red-btn">Reserve Agora</a>
        </div>
        <div class="res-col">
            <img src="../img/Serra-Da-Chela-Hotel-Lubango-Exterior.jpg">
        </div>
    </div>
    <div class="row">
        <div class="res-col">
            <h1>Kimbo do Soba</h1>
            <p>Com dois Aldeamentos Turísticos no Lubango, situados no coração da Nossa Senhora do Monte. O Kimbo do Soba, com 26 quartos e o Wenda Ke Tai com 20 quartos, totalmente equipados com TV satélite e frigobar.</p>
            <p>A sua construção e decoração proporcionam aos clientes o ambiente Africano, contribuindo para essa sensação tem o restaurante com pratos africanos, peixes e mariscos, assim como a carne de caça grelhada.</p>
            <a href="https://www.kimbodosoba.com/" target="_blank" class="hero-btn red-btn">Reserve Agora</a>
        </div>
        <div class="res-col">
            <img src="../img/kimbo_soba.jpg">
        </div>
    </div>
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


    <!------JavaScript para o menu--------->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0px";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>


</body>