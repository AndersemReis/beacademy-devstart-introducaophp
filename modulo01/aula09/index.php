<?php

$url = $_SERVER['REQUEST_URI'];
 include 'telas/menu.php';
 
echo match ($url){
    '/login' => include 'telas/login.php',
    
    '/cadastro' => include 'telas/cadastro.php',
    '/inicial' => '<h1>Pagina Inicial',
    '/'=> include 'telas/home.php',
    default => '<h1>Pagina em construçao'
};