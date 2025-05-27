<?php
require __DIR__ . "/src/funcoes.php";
// Mensagem de boas-vindas ao sistema
echo "Bem vindo(a) ao screen-match" . PHP_EOL;

// Variáveis com informações básicas do filme
$nomeFilme = "Top Gun - Maverick"; // Nome do filme que estamos avaliando
$anoLancamento = 2022; // Ano de lançamento do filme

// Processamento das notas recebidas como argumentos na linha de comando
$quantidadeDeNotas = $argc - 1; // $argc conta quantos argumentos foram passados, subtraíndo 1 para ignorar o nome do script
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
$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

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
$filme = criaFilme(
    nome: "Thor: Ragnarok",
    anoLancamento: 2021,
    nota: 7.8,
    genero: "super-heroi"
);

// Exibe apenas o ano de lançamento do segundo filme
echo $filme["ano"] . PHP_EOL;

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
echo $menorNota;

var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . "/filmes.json", $filmeComoStringJson);
