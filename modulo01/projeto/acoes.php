<?php

function login(){
    include 'telas/login.php';
}

function cadastro(){
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