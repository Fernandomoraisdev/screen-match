<?php

// Função que exibe uma mensagem sobre o status de lançamento do filme baseado no ano
function exibeMensagemLancamento($ano) {
    if ($ano > 2022) {
        echo "Esse filme e um lancamento" . PHP_EOL; // Se lançado após 2022
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda e novo" . PHP_EOL; // Se lançado entre 2021-2022
    } else {
        echo "Esse filme nao e um lancamento" . PHP_EOL; // Se lançado em 2020 ou antes
    }
}

// Mensagem de boas-vindas ao sistema
echo "Bem vindo(a) ao screen-metch" . PHP_EOL;

// Variáveis com informações básicas do filme
$nomeFilme = "Top Gun - Maverick"; // Nome do filme que estamos avaliando
$anoLancamento = 2022; // Ano de lançamento do filme

// Processamento das notas recebidas como argumentos na linha de comando
$quantidadeDeNotas = $argc - 1; // $argc conta quantos argumentos foram passados, subtraímos 1 para ignorar o nome do script
$notas = []; // Array vazio para armazenar as notas

// Loop para coletar todas as notas passadas como argumento
for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador]; // Converte cada argumento para float e adiciona ao array
}

// Calcula a média das notas
$notaFilme = array_sum($notas) / $quantidadeDeNotas; // Soma todas as notas e divide pela quantidade

// Variável que indica se o usuário tem plano Prime
$planoPrime = true; // Poderia ser false também

// Verifica se o filme está incluído no plano (lançado antes de 2020 OU usuário tem plano Prime)
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

// Exibe as informações básicas do filme
echo "Nome do Filme: " . $nomeFilme . PHP_EOL;
echo "Nota do Filme: " . $notaFilme . PHP_EOL;
echo "Ano de Lancamento: " . $anoLancamento . PHP_EOL;

// Chama a função para exibir a mensagem sobre o lançamento
exibeMensagemLancamento($anoLancamento);

// Determina o gênero do filme usando a estrutura match (similar ao switch, mas mais moderno)
$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "acao",         // Se for Top Gun, gênero é ação
    "Thor: Ragnarok" => "super-heroi",     // Se for Thor, gênero é super-herói
    "Se beber nao case" => "comedia",      // Se for "Se beber não case", gênero é comédia
    default => "genero desconhecido",      // Para qualquer outro filme, gênero desconhecido
};

// Exibe o gênero determinado
echo "O genero do filme e: $genero" . PHP_EOL;

// Array associativo com informações de outro filme
$filme = [
    "nome" => "Thor: Ragnarok",   // Nome do filme
    "ano" => 2021,                // Ano de lançamento
    "nota" => 7.8,                // Nota do filme
    "genero" => "super-heroi",    // Gênero do filme
];

// Exibe apenas o ano de lançamento do segundo filme
echo $filme["ano"] . PHP_EOL;