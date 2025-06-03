<?php

class Serie extends Titulo
{
    private array $notas;
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporadas,
        public readonly int $minutosPorEpisodio
    ){
        parent::__construct($nome, $anoLancamento, $genero);
    }
}