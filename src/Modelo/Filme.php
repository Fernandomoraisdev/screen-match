<?php
//foi criado uma classe chamada Filme e dentro dessa classe foi colocado algumas variaveis
//que sera chamada em outro arquivo, abaixo foi usado uma palavra reservada chamada public
//que permite que a gente consiga identificar que temos uma classe do tipo Filme e tamos mais abaixo
//dentro dessa classe uma variavel nome que vai receber um tipo string e cada uma variavel esta sendo tipada
//de acordo com o que recebe.
class Filme {
    private string $nome = 'Nome Padrao';
    private int $anoLancamento = 2025;
    private string $genero = 'acao';
    private array $notas = [];

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas =  array_sum($this -> notas);
        $quantidadeNotas = count($this -> notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function anoLancamento(): int
    {
        return $this -> anoLancamento;
    }

    public function defineAnoLancamento(int $anoLancamento): void
    {
        $this -> anoLancamento = $anoLancamento;
    }
}
