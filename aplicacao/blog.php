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
    <section class="sub-header2">
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

<h1>BLOG</h1>
    
</section>

<!----blog-->

<section class="blog-content">

    <div class="row">
        <div class="blog-center">
            <h1>Participação de Ocorrências</h1>
            <p>Faça aqui a sua participação de ocorrência, ora seja um problema, uma mudança ou uma sugestão que possamos vir a tratar para tornar a cidade do Lubango um sítio feliz para se viver.</p>
        </div>
    </div>

    <div class="part-box">
        
        <h3>Escreva aqui a sua participação de ocorrência.</h3>

        <form class="part-form">
            <input type="text" placeholder="Nome">
            <input type="email" placeholder="E-mail">
            <textarea rows="5" placeholder="Ocorrência"></textarea>
            <button type="submit" class="hero-btn red-btn">Submeter</button>
        </form>

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