<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';


$umEndereco = new Endereco(
    'Ribeirão Preto',
    'Um Bairro',
    'Uma Rua',
    '86'
);

$outroEndereco = new Endereco(
    'São Paulo',
    'Outro Bairro',
    'Outra Rua',
    '68'
);

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

$umEndereco->rua = 'Altera rua';

echo $umEndereco;
