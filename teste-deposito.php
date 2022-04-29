<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\NomeInvalidoException;

require_once 'autoload.php';

try {
    $contaCorrente = new ContaCorrente(
        new Titular(
            new Cpf('123.456.789-10'),
            'Vinicius Francischini',
            new Endereco(
                'Cidade',
                'Bairro',
                'Rua',
                'Numero'
            )
        )
    );

    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException | NomeInvalidoException $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
