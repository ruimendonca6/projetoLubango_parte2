<?php
# CARREGA MIDDLEWARE PARA GARANTIR QUE APENAS UTILIZADORES AUTENTICADOS ACESSEM ESTE SITIO
require_once __DIR__ . '/../src/middleware/middleware-utilizador.php';

# ACESSA DE FUNÇÕES AUXILIADORAS. 
# NOTA: O SIMBOLO ARROBA SERVE PARA NÃO MOSTRAR MENSAGEM DE WARNING, POIS A FUNÇÃO ABAIXO TAMBÉM INICIA SESSÕES
@require_once __DIR__ . '/../src/auxiliadores/auxiliador.php';

# PROVENIENTE DE FUNÇÕES AUXILIADORAS. CARREGA O UTILIZADOR ATUAL
$utilizador = utilizador();

# Header
require_once __DIR__ . "/compunents/header.php";

?>


<section class="sub-header2">
  <?php

  # Navbar
  require_once __DIR__ . "/compunents/navbar.php";

  ?>
  <div class="text-box text-center">
    <h1 class="d-flex h justify-content-center text-white text-center p-4">Locais Turísticos</h1>
    <p class="d-flex h justify-content-center text-white text-center p-4">Aqui irá encontrar toda a informação necessária sobre os locais turísticos da cidade do Lubango.</p>
    </div>
</section>

<!---locais-->

<section class="aloj-res">
    <div class="row">
        <div class="res-col">
            <h1>Cristo Rei</h1>
            <p>Com os braços abertos sobre o Lubango, o Cristo Rei é paragem obrigatória para quem está de passagem pela cidade.</p>
            <p>Situada a 2100 metros de altitude e com 14 metros de altura, este monumento é uma recordação de que os madeirenses chegaram ao sul de Angola no final do século XIX. Foi construído em 1957, no topo da Serra da Chela, na altura do período colonial português. </p>
            <p>Ao contrário das outras três estatuas do Cristo Rei, no Brasil, em Portugal e Timor, a construção do Cristo Rei do Lubango não teve qualquer base religiosa. O monumento nasceu pelas mãos do engenheiro português Carlos Sardinha. A construção demorou dois anos e, depois de terminada, o monumento começou a ser considerado como um sítio de adoração para os religiosos.</p>
            <a href="https://www.google.com/maps/place/Cristo+Rei+Statuate+%2FLubango/@-14.9400375,13.5118906,15z/data=!4m2!3m1!1s0x0:0xb7389c5e127c5216?sa=X&ved=2ahUKEwib95TP9tT_AhXmVKQEHb5BCxQQ_BJ6BAhUEAg" target="_blank" type="button" class="btn btn-outline-danger">Localização</button></a>
        </div>
        <div class="res-col">
            <img src="/recursos/img/cristo-rei3.jpg" alt="Imagem do Cristo Rei">
        </div>
    </div>
    <div class="row">
        <div class="res-col">
            <h1>Serra da Leba</h1>
            <p>A Serra da Leba é uma formação arquitetónica projetada numa zona montanhosa situada a 50 quilometros da cidade do Lubango.</p>
            <p>A famosa e belíssima Serra da Leba foi executada por vários engenheiros tendo se notabilizado, a Engenheira portuguesa Maria Alice Leba.</p>
            <p>A estrada é uma obra da arte de 20 quilómetros, com 19 curvas, construída em 1915, ligando agora o Namibe ao Lubango em duas horas.</p>
            <a href="https://www.google.com/maps/place/Serra+da+Leba/@-15.0727817,13.2391118,14z/data=!4m6!3m5!1s0x1ba33edc99302d0d:0xaefd1a62f79a78d6!8m2!3d-15.071083!4d13.248639!16s%2Fm%2F0ch24_l!5m1!1e4?entry=ttu" target="_blank" type="button" class="btn btn-outline-danger">Localização</button></a>
        </div>
        <div class="res-col">
            <img src="/recursos/img/Serra_leba2.jpg" alt="Imagem do Serra da Leba">
        </div>
    </div>
    <div class="row">
        <div class="res-col">
            <h1>Tundavala</h1>
            <p>A Fenda da Tundavala é um enorme abismo de cerca de 1200 m situado na Serra da Leba, a 18 km do Lubango, na província da Huíla.</p>
            <p>É nos penhascos da Tundavala que termina o Planalto Central de Angola. Aqui o planalto excede 2200 metros de altitude e cai abruptamente para cerca de 1000 metros de altitude, provocando um desnível deslumbrante com fendas colossais na montanha. Daqui se desfruta uma paisagem magnífica que se estende por dezenas de quilómetros.</p>
            <a href="https://www.google.com/maps/place/Estr.+da+Tundavala,+Angola/@-14.8216956,13.3768114,14.66z/data=!4m6!3m5!1s0x1ba34e46a0b1365f:0x78012cd6a5368732!8m2!3d-14.845008!4d13.4203354!16s%2Fg%2F11byl6yz1n!5m1!1e4?entry=ttu" target="_blank" type="button" class="btn btn-outline-danger">Localização</button></a>
        </div>
        <div class="res-col">
            <img src="/recursos/img/tundavala.jpg" alt="Imagem da Tundavala">
        </div>
    </div>
    <div class="row">
        <div class="res-col">
            <h1>Cascata da Huíla</h1>
            <p>A Cascata da Huíla localiza-se na Província da Huíla a 20 km do Lubango. Possui árvores frondosas de velha idade que constituem um pequeno jardim onde as pessoas afluem em busca de lazer. É uma zona paisagística de interesse turístico que deve ser conservada e preservada por todos que a frequentam, por forma a servir o desfrute das presentes e futuras gerações.</p>
            <a href="https://www.google.com/maps/place/Cascata+da+Huila/@-15.0517009,13.5303836,17z/data=!4m6!3m5!1s0x1ba335fec5f24301:0x475d74e9ae393c6c!8m2!3d-15.0533172!4d13.5306733!16s%2Fg%2F11sdnsf5sd!5m1!1e4?entry=ttu" target="_blank" type="button" class="btn btn-outline-danger">Localização</button></a>
        </div>
        <div class="res-col">
            <img src="/recursos/img/cascata-capa.jpg" alt="Imagem da Cascata">
        </div>
    </div>
    <div class="row">
        <div class="res-col">
            <h1>Sé Catedral de São José</h1>
            <p>A Sé Catedral de São José, obra de 1939 do arquiteto Fernando Batalha, foi estabelecida em 27 de julho de 1955 como sede da diocese de Sá da Bandeira, promovida depois, em 3 de fevereiro de 1977, a arquidiocese do Lubango. O edifício é de estilo gótico modernizado, possuindo duas torres de coberturas piramidais (com alguma expressão de influência art déco). A Sé e o Cristo Rei (construído entre 1940 e 1950) estão em vias de classificação oficial.</p>
            <a href="https://www.google.com/maps/place/S%C3%A9+Catedral+de+S%C3%A3o+Jos%C3%A9/@-14.9162767,13.4955937,17z/data=!3m1!4b1!4m6!3m5!1s0x1ba34b78bd51318d:0xced3f6f2536de21c!8m2!3d-14.9162767!4d13.4981686!16s%2Fg%2F1tsq853q!5m1!1e4?entry=ttu" target="_blank" type="button" class="btn btn-outline-danger">Localização</button></a>
        </div>
        <div class="res-col">
            <img src="/recursos/img/se_catedral.jpg" alt="Imagem da Sé">
        </div>
    </div>
    <div class="row">
        <div class="res-col">
            <h1>Capela da<br>Nossa Senhora do Monte</h1>
            <p>A Capela da Nossa Senhora do Monte encontra-se localizada num dos topos da Serra da Chela, em Huíla, o local, além de um santuário de peregrinação religiosa que se reveste de grande simbolismo e importância para a comunidade católica, é igualmente um dos maiores pontos turísticos da cidade que anualmente atraí milhares de turistas provenientes de várias partes do mundo.</p>
            <a href="https://www.google.com/maps/place/Capela+da+Nossa+Senhora+do+Monte/@-14.9404044,13.4626239,17z/data=!3m1!4b1!4m6!3m5!1s0x1ba34bc485ebff2f:0xbb49cc094a4ed3e7!8m2!3d-14.9404044!4d13.4651988!16s%2Fg%2F1hd_xcn7p!5m1!1e4?entry=ttu" target="_blank" type="button" class="btn btn-outline-danger">Localização</button></a>
        </div>
        <div class="res-col">
            <img src="/recursos/img/nossa-senhora-do-monte-1.jpg" alt="Imagem da Capela">
        </div>
    </div>
</section>

 


<?php
# FOOTER
require_once __DIR__ . "/compunents/footer.php";
?>


</body>


