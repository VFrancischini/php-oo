<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, Conta, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\{Endereco, Cpf};

$endereco = new Endereco('Ribeirão Preto', 'Um bairro', 'Uma rua', '2454');
$primeiraConta = new ContaCorrente(new Titular(new Cpf('123.456.789-10'), 'Vinicius Francischini', $endereco));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new ContaCorrente(new Titular(new Cpf('987.654.321-01'), 'Eliana', $endereco));
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'B', 'C', '1D');
$outra = new ContaPoupanca(new Titular(new Cpf('123'), 'Abcdefg', $outroEndereco));
unset($segundaConta);

echo Conta::recuperaNumeroDeContas();
