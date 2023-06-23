<?php
require_once __DIR__ . '/criar-conexao.php';
function registarInfo($info)
{
    # INSERE ceia COM PROTEÇÃO CONTRA SQLINJECTION
    $sqlCreate = "INSERT INTO 
     ceia (
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
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM ceia WHERE id = ?;');

    # FAZ O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA
    $PDOStatement->execute();

    # RETORNA OS DADOS
    return $PDOStatement->fetch();
}

function lerCeia()
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM ceia;');

    $Infoceia = [] ;

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS
    while ($listaceia = $PDOStatement->fetch()) {
        $Infoceia[] = $listaceia;
    }
    # RETORNA OS DADOS
    return $Infoceia;
}

function AtualizarInfo($info)
{
    # INSERE Ceia COM PROTEÇÃO CONTRA SQLINJECTION, INCLUSINDO PALAVRA PASSE.
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

# apaga a info do ceia
function deleteInfos($id)
{
    # PREPARA A CONSULTA
    $PDOStatement = $GLOBALS['pdo']->prepare('DELETE FROM ceia WHERE id = ?;');

    # REALIZA O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA E RETORNA OS DADOS
    return $PDOStatement->execute();
}


?>