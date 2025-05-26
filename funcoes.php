<?php
// Função que exibe uma mensagem sobre o status de lançamento do filme baseado no ano
function exibeMensagemLancamento(int $ano): void { //diz que esse codigo nao retorna nada
    if ($ano > 2022) {
        echo "Esse filme e um lancamento" . PHP_EOL; // Se lançado após 2022
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda e novo" . PHP_EOL; // Se lançado entre 2021-2022
    } else {
        echo "Esse filme nao e um lancamento" . PHP_EOL; // Se lançado em 2020 ou antes
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}