<?php

require_once __DIR__ . "/../../src/controlador/admin/controlar-admin.php";

?>


<nav class="navbar">
    <a class="navbar-brand" href="/index.php">
        <img class="logo w-50 mt-2 ms-2" src="/recursos/img/logo_angola2.png" alt="Logo Angola" />
    </a>
    <div class="nav-links">
        <ul class="nav-links ul li">
            <li class="nav-item active text-white">
                <a class="nav-links2 text-white" href="/aplicacao/index.php">HOMEe</a>
            </li>
            <li class="nav-item active text-white">
                <a class="nav-link2 text-white" href="/aplicacao/locais.php">LOCAIS TURÍSTICOS</a>
            </li>
            <li class="nav-item active text-white">
                <a class="nav-link2 text-white" href="/aplicacao/alojamento.php">ALOJAMENTO E RESTAURANTES</a>
            </li>
            <li class="nav-item active text-white">
                <a class="nav-link2 text-white" href="/aplicacao/blog.php">BLOG</a>
            </li>
            <li class="nav-item active text-white">    
                <form action="../../src/controlador/aplicacao/controlar-autenticacao.php" method="post">
                    <button class="btn btn-outline-danger" type="submit" name="utilizador" value="logout">SAIR</button>
                </form>
            </li>
            <li class="nav-item active text-white">
                <a href="/admin/Admin.php">
                    <button <?php if ($isAdmin ? true : false) { echo 'style="display: none;"'; } ?> class="btn btn-outline-warning" type="button">PAINEL DE CONTROLO</button>
                </a>
            </li>
            <li class="nav-item text-white">
                <a href="/aplicacao/perfil.php">
                    <button class="btn btn-outline-success" type="button">EDITAR PERFIL</button>
                </a>
            </li>
        </ul>
    </div>
</nav>
