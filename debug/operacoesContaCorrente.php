<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaTipo\ContaCorrente;
use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancariaInterface;

function executarOperacoes(OperacoesContaBancariaInterface $conta): void
{

    echo $conta->obterSaldo();

    echo PHP_EOL;

    echo $conta->depositar(50);

    echo PHP_EOL;

    echo $conta->obterSaldo();

    echo PHP_EOL;

    echo $conta->sacar(30);

    echo PHP_EOL;

    echo $conta->obterSaldo();

    echo PHP_EOL;
}

function exibirDados(DadosContaBancariaInterface $conta): void
{
    echo "Banco: " . $conta->getBanco();
    echo PHP_EOL;

    echo "Ag./Conta: " . $conta->getNumeroAgencia() . "/" . $conta->getNumeroConta();
    echo PHP_EOL;

    echo "Titular: " . $conta->getNomeTitular();
    echo PHP_EOL;

    echo "____________________________________________";
    echo PHP_EOL;
}

$conta = new \App\ContaTipo\ContaCorrente(
    'Banco do Brazil',
    'Maria Antunieta',
    '8241',
    '57354-15',
    0);


exibirDados($conta);
executarOperacoes($conta);