<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Pessoa.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';
require_once 'src/Funcionario.php';

$endereco = new Endereco('Ribeirão Preto', 'Um bairro', 'Uma rua', '2454');
$primeiraConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Vinicius Francischini', $endereco));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular(new Cpf('987.654.321-01'), 'Eliana', $endereco));
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'B', 'C', '1D');
$outra = new Conta(new Titular(new Cpf('123'), 'Abcdefg', $outroEndereco));
unset($segundaConta);

echo Conta::recuperaNumeroDeContas();
