<?php
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-Vindo ao Screen-Match\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180,
);


$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(6);
$filme->avalia(6.5);
$filme->avalia(5.6);

var_dump($filme);

$filme->nota = [0];

echo $filme->media() . "\n";

echo $filme -> anoLancamento . "\n";

$serie =new Serie('Lost', 2007, Genero::Drama, 10, 20, 40);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";