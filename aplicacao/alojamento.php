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

</section>




<section class="sub-header1">
<?php
# Navbar
require_once __DIR__ . "/compunents/navbar.php";
?>
<h1>ALOJAMENTOS E RESTAURANTES</h1>
<p class="d-flex h justify-content-center text-white text-center p-4">Aqui irá encontrar os melhores restaurantes e alojamentos da cidade do Lubango.</p>


</section>
<section class="aloj-res">
    <div class="row">
        <div class="res-col">
            <h1>Pululukwa Lodge</h1>
            <p>Dentro da cidade do Lubango, secretamente dissimulado entre a vegetação e as montanhas, nasceu um dos mais luxuosos empreendimentos de Angola, o Pululukwa Resort.</p>
            <p>Este luxuoso resort pensado ao mais ínfimo pormenor, é um projecto arrojado, implantado numa área com vários hectares, serpenteado por um rio, e com vários lagos, em casamento perfeito com a natureza.
                Com um restaurante central, com amplos espaços exteriores e vistas deslumbrantes, a oferta de alojamento é composta por 60 luxuosos bungalows, implantados em três “aldeias” com características diferentes, ligadas por longos passadiços.</p>
            <p>O projecto prevê também uma quinta pedagógica, povoamento animal, spa, etc.</p>
            <a href="https://www.tripadvisor.pt/Hotel_Review-g670166-d10172163-Reviews-Pululukwa_Resort-Lubango_Huila_Province.html" target="_blank" type="button" class="btn btn-outline-danger">Reserve Agora</button></a>
        </div>
        <div class="res-col">
            <img src="/recursos/img/pulu-sala.jpg" alt="Imagem do Pululukwa Lodge">
        </div>
    </div>
    <div class="row">
        <div class="res-col">
            <h1>Casper Lodge</h1>
            <p>O Casper Resort é um boutique-resort de luxo situado na cidade do Lubango, com belos jardins, piscina, galeria de arte, restaurante, ginásio totalmente funcional, e spa. É um destino ideal para todo o ano, perfeito para férias de família, retiros corporativos, ou o local perfeito local para uma escapadela romântica.</p>
            <a href="https://www.casperresort.com/?lang=pt" target="_blank" type="button" class="btn btn-outline-danger">Reserve Agora</button></a>
        </div>
        <div class="res-col">
            <img src="/recursos/img/casper2.jpg" alt="Imagem do Casper Lodge">
        </div>
    </div>
    <div class="row">
        <div class="res-col">
            <h1>Hotel Serra da Chela</h1>
            <p>Tendo iniciado actividade em 2009, o Hotel Serra da Chela é uma unidade hoteleira de 4 estrelas inserida numa área de cerca de 16.000 m2 e localizada no Complexo Nossa Senhora do Monte na cidade do Lubango.</p>
            <p>O edifício principal é composto por 4 pisos com 108 quartos, 96 quartos standard e 12 suites executivas, master e presidencial. O segundo edifício é composto por 3 pisos, denominado por Serra da Chela Boutique Hotel, com 52 quartos e uma suíte presidencial. O Serra da Chela Boutique Hotel destaca-se pelo seu estilo mais elegante e luxuoso. Sala de conferências com capacidade para 200 pessoas e uma sala de reuniões de menor dimensão.</p>
            <a href="https://www.tripadvisor.pt/Hotel_Review-g670166-d4232350-Reviews-Serra_da_Chela_Hotel-Lubango_Huila_Province.html" target="_blank" type="button" class="btn btn-outline-danger">Reserve Agora</button></a>
        </div>
        <div class="res-col">
            <img src="/recursos/img/Serra-Da-Chela-Hotel-Lubango-Exterior.jpg" alt="Imagem do Hotel Serra da Chela">
        </div>
    </div>
    <div class="row">
        <div class="res-col">
            <h1>Kimbo do Soba</h1>
            <p>Com dois Aldeamentos Turísticos no Lubango, situados no coração da Nossa Senhora do Monte. O Kimbo do Soba, com 26 quartos e o Wenda Ke Tai com 20 quartos, totalmente equipados com TV satélite e frigobar.</p>
            <p>A sua construção e decoração proporcionam aos clientes o ambiente Africano, contribuindo para essa sensação tem o restaurante com pratos africanos, peixes e mariscos, assim como a carne de caça grelhada.</p>
            <a href="https://www.kimbodosoba.com/" target="_blank" type="button" class="btn btn-outline-danger">Reserve Agora</button></a>
        </div>
        <div class="res-col">
            <img src="/recursos/img/kimbo_soba.jpg" alt="Imagem do Kimbo do Soba">
        </div>
    </div>
</section>




<?php
# FOOTER
require_once __DIR__ . "/compunents/footer.php";
?>


</body>