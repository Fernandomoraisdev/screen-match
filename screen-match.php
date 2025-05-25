<?php

function exibeMensagemLancamento ($ano) {
    if ($ano > 2022){
        echo "Esse filme e um lancamento" . PHP_EOL;
    }elseif($ano > 2020 && $ano <= 2022){
        echo "Esse filme ainda e novo" . PHP_EOL;
    }else{
        echo "Esse filme nao e um lancamento" . PHP_EOL;
    }
}

echo "Bem vindo(a) ao screen-metch" .  PHP_EOL;

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do Filme: " . $nomeFilme . PHP_EOL;
echo "Nota do Filme: " . $notaFilme . PHP_EOL;
echo "Ano de Lancamento: " . $anoLancamento . PHP_EOL;

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme){
    "Top Gun - Maverick" => "acao",
    "Thor: Ragnarok" => "super-heroi",
    "Se beber nao case" => "comedia",
    default => "genero desconhecido",
};

echo "O genero do filme e: $genero" . PHP_EOL;

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-heroi",
];

echo $filme["ano"] . PHP_EOL;