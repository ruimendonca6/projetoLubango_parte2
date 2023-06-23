<?php
# TRATA-SE DE UMA FORMA RÁPIDA PARA REINICIAR O BANCO DE DADOS EM AMBIENTE DE DESENVOLVIMENTO
# ESTE FICHEIRO NÃO DEVE ESTAR DISPONÍVEL EM PRODUÇÃO

# INSERE DADOS DA CONEXÃO COM O PDO UTILIZANDO SQLITE

require __DIR__ . '/criar-conexao.php';

# APAGA TABELA SE ELA EXISTIR
$pdo->exec('DROP TABLE IF EXISTS utilizadores;');

echo 'Tabela utilizadores apagada!' . PHP_EOL;

# CRIA A TABELA UTILIZADORES
$pdo->exec(
    'CREATE TABLE utilizadores (
    id INTEGER PRIMARY KEY, 
    nome CHAR, 
    apelido CHAR, 
    nif CHAR, 
    telemovel CHAR, 
    email CHAR NOT NULL, 
    foto CHAR NULL, 
    administrador CHAR, 
    dono CHAR,
    palavra_passe CHAR);'
);

echo 'Tabela utilizadores criada!' . PHP_EOL;

# ABAIXO UM ARRAY SIMULANDO A DADOS DE UM UTILIZADOR 
$utilizador = [
    'nome' => 'Rui',
    'apelido' => 'Mendonça',
    'nif' => '297364167',
    'telemovel' => '928473647',
    'email' => 'Rui@admin.pt',
    'foto' => null,
    'administrador' => true,
    'dono' => true,
    'palavra_passe' => 'Rui1234'
];

# CRIPTOGRAFA PALAVRA PASSE
$utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);

# INSERE UTILIZADOR
$sqlCreate = "INSERT INTO 
    utilizadores (
        nome, 
        apelido, 
        nif, 
        telemovel, 
        email, 
        foto, 
        administrador, 
        dono, 
        palavra_passe) 
    VALUES (
        :nome, 
        :apelido, 
        :nif, 
        :telemovel, 
        :email, 
        :foto, 
        :administrador, 
        :dono,
        :palavra_passe
    )";

# PREPARA A QUERY
$PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

# EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
$sucesso = $PDOStatement->execute([
    ':nome' => $utilizador['nome'],
    ':apelido' => $utilizador['apelido'],
    ':nif' => $utilizador['nif'],
    ':telemovel' => $utilizador['telemovel'],
    ':email' => $utilizador['email'],
    ':foto' => $utilizador['foto'],
    ':administrador' => $utilizador['administrador'],
    ':dono' => $utilizador['dono'],
    ':palavra_passe' => $utilizador['palavra_passe']
]);

echo 'Utilizador padrão criado!';





#CRIAÇÃO DA TABELA LOCAIS TURISTICOS
$pdo->exec('DROP TABLE IF EXISTS Locais_Turisticos;');

echo 'Tabela Locais_Turisticos apagada!' . PHP_EOL;

#TABELA LOCAIS TURÍSTICOS
$pdo->exec(
    'CREATE TABLE Locais_Turisticos(
        id INTEGER PRIMARY KEY,
        titulo CHAR NOT NULL,
        img CHAR NULL,
        texto TEXT NOT NULL,
        links TEXT);'
);

echo 'Tabelo Locais_Turísticos criada!' . PHP_EOL;

#INSERE UTILIZADOR
$sqlCreate = "INSERT INTO
    Locais_Turisticos (
        titulo,
        img,
        texto,
        links,)
    VALUES (
       :titulo,
       :img,
       :texto,
       :links
    )";




#CRIAÇÃO DA TABELA ALOJAMENTOS E RESTAURANTES

$pdo->exec('DROP TABLE IF EXISTS Alojamentos_Restaurantes;');

echo 'Tabela Alojamentos_Restaurantes apagada!' . PHP_EOL;

#TABELA ALOJAMENTOS E RESTAURANTES
$pdo->exec(
    'CREATE TABLE Alojamentos_Restaurantes(
        id INTEGER PRIMARY KEY,
        titulo CHAR NOT NULL,
        img CHAR NULL,
        texto TEXT NOT NULL,
        links TEXT);'
);

echo 'Tabelo Alojamentos_Restaurantes criada!' . PHP_EOL;

#INSERE UTILIZADOR
$sqlCreate = "INSERT INTO
    Alojamentos_Restaurantes (
        titulo,
        img,
        texto,
        links,)
    VALUES (
       :titulo,
       :img,
       :texto,
       :links
    )";



#CRIAÇÃO DA TABELA BLOG

$pdo->exec('DROP TABLE IF EXISTS Blog;');

echo 'Tabela Blog apagada!' . PHP_EOL;

#TABELA ALOJAMENTOS E RESTAURANTES
$pdo->exec(
    'CREATE TABLE Blog(
        id INTEGER PRIMARY KEY,
        titulo CHAR NOT NULL,
        img CHAR NULL,
        texto TEXT NOT NULL,
        links TEXT);'
);

echo 'Tabelo Blog criada!' . PHP_EOL;

#INSERE UTILIZADOR
$sqlCreate = "INSERT INTO
    Blog (
        titulo,
        img,
        texto,
        links,)
    VALUES (
       :titulo,
       :img,
       :texto,
       :links
    )";