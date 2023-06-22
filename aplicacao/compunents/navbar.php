<nav class="nav">
    <a class="navbar-brand" href="/index.php">
        <img class="logo w-50 mt-2 ms-2 " src="/recursos/img/logo_angola2.png" alt="Logo Angola" />
    </a>
    <div class="nav-links">
        <ul class="nav-links ul li">
            <li class="nav-item active">
                <a class="nav-link text-light" href="/aplicacao/index.php">HOME</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-light" href="/aplicacao/locais.php">LOCAIS TURÍSTICOS</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-light" href="/aplicacao/alojamento.php">ALOJAMENTO E RESTAURANTES</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-light" href="/aplicacao/blog.php">BLOG</a>
            </li>
            <li class="nav-item active">    
            <form action="../../src/controlador/aplicacao/controlar-autenticacao.php" method="post">
                    <button class="btn btn-outline-danger" type="submit" name="utilizador" value="logout">Logout</button>
            </form>
            </li>
        </ul>
    </div>
</nav>