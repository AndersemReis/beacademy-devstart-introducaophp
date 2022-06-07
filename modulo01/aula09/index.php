<?php

$url = $_SERVER['REQUEST_URI'];
include 'telas/head.php';
include 'telas/menu.php';
 
echo match ($url){
    '/login' => include 'telas/login.php',
    
    '/cadastro' => include 'telas/cadastro.php',
    '/inicial' => '<h1>Pagina Inicial</h1>',
    '/'=> include 'telas/home.php',
    default => include 'telas/404.php'
};

include 'telas/footer.php';