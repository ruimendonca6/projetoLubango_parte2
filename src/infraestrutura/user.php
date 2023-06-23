<?php
require_once __DIR__ . '/criar-conexao.php';
function registarInfo($info)
{
    # INSERE Locais Turisticos COM PROTEÇÃO CONTRA SQLINJECTION
    $sqlCreate = "INSERT INTO 
     Locais_Turisticos (
        img, 
        titulo, 
        texto,
        links) 
     VALUES (
         :img, 
         :titulo, 
         :texto, 
         :links
     )";
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    $sucesso = $PDOStatement->execute([
        ':img' => $info['img'],
        ':titulo' => $info['titulo'],
        ':texto' => $info['texto'],
        ':links' => $info['links']
    ]);

    # RECUPERA ID DO UTILIZADOR CRIADO
    if ($sucesso) {
        $info['id'] = $GLOBALS['pdo']->lastInsertId();

    }
    # RETORNO RESULTADO DA INSERSÃO
    return $info;
}

# Ler Info
function lerinfo($id)
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM Locais_Turisticos WHERE id = ?;');

    # FAZ O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA
    $PDOStatement->execute();

    # RETORNA OS DADOS
    return $PDOStatement->fetch();
}

function lerLocais()
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM Locais_Turisticos;');

    $Infolocais = [] ;

    // EXECUTA A CONSULTA
    $PDOStatement->execute();

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS
    while ($listaLocais = $PDOStatement->fetch()) {
        $Infolocais[] = $listaLocais;
    }
    # RETORNA OS DADOS
    return $Infolocais;
}

function AtualizarInfo($info)
{
    # INSERE Locais Turisticos COM PROTEÇÃO CONTRA SQLINJECTION, INCLUSINDO PALAVRA PASSE.
    $sqlUpdate = "UPDATE  
    info SET
    img = :img, 
    titulo = :titulo, 
    texto = :texto,  
    links = :links 
    WHERE id = :id;";

    $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    return $PDOStatement->execute([
        ':id' => $info['id'],
        ':img' => $info['img'],
        ':titulo' => $info['titulo'],
        ':texto' => $info['texto'],
        ':links' => $info['links']
    ]);
}

# apaga a info do Locais_Turisticos
function deleteInfos($id)
{
    # PREPARA A CONSULTA
    $PDOStatement = $GLOBALS['pdo']->prepare('DELETE FROM Locais_Turisticos WHERE id = ?;');

    # REALIZA O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA E RETORNA OS DADOS
    return $PDOStatement->execute();
}


?>


<?php
require_once __DIR__ . '/criar-conexao.php';
function registarAloj($info)
{
    # INSERE Alojamentos_Restaurantes COM PROTEÇÃO CONTRA SQLINJECTION
    $sqlCreate = "INSERT INTO 
     Alojamentos_Restaurantes (
        img, 
        titulo, 
        texto,
        links) 
     VALUES (
         :img, 
         :titulo, 
         :texto, 
         :links
     )";
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    $sucesso = $PDOStatement->execute([
        ':img' => $info['img'],
        ':titulo' => $info['titulo'],
        ':texto' => $info['texto'],
        ':links' => $info['links']
    ]);

    # RECUPERA ID DO UTILIZADOR CRIADO
    if ($sucesso) {
        $info['id'] = $GLOBALS['pdo']->lastInsertId();

    }
    # RETORNO RESULTADO DA INSERSÃO
    return $info;
}

# Ler Info
function leraloj($id)
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM Alojamentos_Restaurantes WHERE id = ?;');

    # FAZ O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA
    $PDOStatement->execute();

    # RETORNA OS DADOS
    return $PDOStatement->fetch();
}

function lerAlojamento()
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM Alojamentos_Restaurantes;');

    $Infoaloj = [] ;

    // EXECUTA A CONSULTA
    $PDOStatement->execute();

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS
    while ($listaLocais = $PDOStatement->fetch()) {
        $Infolocais[] = $listaLocais;
    }
    # RETORNA OS DADOS
    return $Infolocais;
}

function AtualizarAloj($info)
{
    # INSERE Alojamentos_Restaurantes COM PROTEÇÃO CONTRA SQLINJECTION, INCLUSINDO PALAVRA PASSE.
    $sqlUpdate = "UPDATE  
    info SET
    img = :img, 
    titulo = :titulo, 
    texto = :texto,  
    links = :links 
    WHERE id = :id;";

    $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    return $PDOStatement->execute([
        ':id' => $info['id'],
        ':img' => $info['img'],
        ':titulo' => $info['titulo'],
        ':texto' => $info['texto'],
        ':links' => $info['links']
    ]);
}

# apaga a info do Alojamentos_Restaurantes
function deleteAloj($id)
{
    # PREPARA A CONSULTA
    $PDOStatement = $GLOBALS['pdo']->prepare('DELETE FROM Alojamentos_Restaurantes WHERE id = ?;');

    # REALIZA O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA E RETORNA OS DADOS
    return $PDOStatement->execute();
}


?>