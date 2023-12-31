<?php
if(session_status() == PHP_SESSION_NONE){
session_start();
}
# INICILIAZAR O REPOSITÓRIO PDO UTILIZADOR
require_once __DIR__ . "/../../src/infraestrutura/repositorio-utilizador.php";

/**
 *  FUNÇÃO PARA INFORMAR SE O UTILIZADOR ESTÁ AUTENTICADO
 */
function autenticado()
{
    return isset($_SESSION['id']) ? true : false;
}

/**
 * FUNÇÃO QUE RETORNA OS DADOS DO UTILIZADOR
 */
function utilizador()
{
    if (autenticado()) {
        return lerUtilizador($_SESSION['id']);
    } else {
        return false;
    }
}

/**
 * FUNÇÃO QUE RETORNA O ID DO UTILIZADOR QUE EFETUOU O LOGIN
 */
function utilizadorId()
{
    return $_SESSION['id'];
}

/**
 * FUNÇÃO PARA INFORMAR SE O UTILIZADOR É ADMINISTRADOR
 */
function administrador()
{
    $utilizador = utilizador();
    return $utilizador['administrador'] ? true : false;
}

/**
 * FUNÇÃO PARA INFORMAR SE UTILIZADOR É O DONO DO SISTEMA
 */
function dono()
{
    $utilizador = utilizador();
    return $utilizador['dono'] ? true : false;
}