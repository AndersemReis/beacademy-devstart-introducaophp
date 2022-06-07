<?php

$url = $_SERVER['REQUEST_URI'];
include 'telas/head.php';
include 'telas/menu.php';
include 'acoes.php';
 
echo match ($url){
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/inicial' => inicial(),
    '/'=> include 'telas/home.php',
    default => include 'telas/404.php'
};

include 'telas/footer.php';