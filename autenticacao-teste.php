<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\NomeInvalidoException;
use Alura\Banco\Servico\Autenticador;

require_once 'autoload.php';

try {
    $autenticador = new Autenticador();
    $umDiretor = new Diretor(
        'Nome',
        new Cpf('123.456.789-10'),
        10000
    );

    $autenticador->tentaLogin($umDiretor, '1234');
} catch (InvalidArgumentException | NomeInvalidoException $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
