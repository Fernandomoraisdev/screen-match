<?php
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-Vindo ao Screen-Match\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    'super-heroi'
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