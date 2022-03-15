<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$primeiraConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Vinicius Francischini'));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular(new Cpf('987.654.321-01'), 'Eliana'));
var_dump($segundaConta);

$outra = new Conta(new Titular(new Cpf('123'), 'Abcdefg'));
unset($segundaConta);

echo Conta::recuperaNumeroDeContas();
