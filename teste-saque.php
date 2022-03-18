<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
        'Vinicius Francischini',
        new Endereco('Ribeirão Preto', 'Bairro Teste', 'Rua Lá', '37')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
