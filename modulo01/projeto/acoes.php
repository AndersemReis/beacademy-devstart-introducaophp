<?php

function login(){
    include 'telas/login.php';
}

function cadastro(){
    if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $arquivo = fopen('modulo01\projeto\dados\contatos.csv','a+');

    fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
    fclose($arquivo);
    echo 'Pronto! Cadastro realizado';
    }
    include 'telas/cadastro.php';
}

function home(){
    include 'telas/home.php';
}

function naoEncontrada(){
    include 'telas/404.php';
}

function listar(){
    $contatos = file('modulo01\projeto\dados\contatos.csv');
    include 'telas/listar.php';
}