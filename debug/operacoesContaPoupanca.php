<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaTipo\ContaPoupanca;
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

$conta = new \App\ContaTipo\ContaPoupanca(
    'Banco do Brazil',
    'Chico Sales',
    '8244',
    '57354-10',
    0);


exibirDados($conta);
executarOperacoes($conta);