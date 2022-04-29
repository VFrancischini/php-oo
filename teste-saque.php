<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco, NomeInvalidoException};

require_once 'autoload.php';

try {
    $conta = new ContaCorrente(
        new Titular(
            new Cpf('123.456.789-10'),
            'Vinicius',
            new Endereco('Ribeirão Preto', 'Bairro Teste', 'Rua Lá', '37')
        )
    );

    $conta->deposita(500);
    $conta->saca(600);

    echo $conta->recuperaSaldo();
} catch (SaldoInsuficienteException | NomeInvalidoException $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
