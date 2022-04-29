<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, Conta, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\{Endereco, Cpf, NomeInvalidoException};

$endereco = new Endereco('Ribeirão Preto', 'Um bairro', 'Uma rua', '2454');
$primeiraConta = new ContaCorrente(new Titular(new Cpf('123.456.789-10'), 'Vinicius Francischini', $endereco));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

try {
    $segundaConta = new ContaCorrente(new Titular(new Cpf('987.654.321-01'), 'nome', $endereco));
    var_dump($segundaConta);
} catch (NomeInvalidoException $exception) {
    echo $exception->getMessage() . PHP_EOL;
}

$outroEndereco = new Endereco('A', 'B', 'C', '1D');
try {
    $outra = new ContaPoupanca(new Titular(new Cpf('123'), 'Abcdefg', $outroEndereco));
} catch (InvalidArgumentException) {
    echo 'CPF Inválido!' . PHP_EOL;
}

unset($segundaConta);

echo Conta::recuperaNumeroDeContas();
