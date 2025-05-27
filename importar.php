<?php

$caminhoArquivo = __DIR__ . "/filmes.json";

file_get_contents($caminhoArquivo);
$conteudoArquivoFilme = file_get_contents($caminhoArquivo);
$filme = json_decode($conteudoArquivoFilme, true);

var_dump($filme);