<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Cpf, NomeInvalidoException};
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};
use Alura\Banco\Servico\ControladorDeBonificacoes;

try {
    $umDesenvolvedor = new Desenvolvedor(
        'Vinicius',
        new Cpf('123.456.789-10'),
        1000
    );

    $umDesenvolvedor->sobeDeNivel();

    $umaGerente = new Gerente(
        'Eliana',
        new Cpf('987.654.321-01'),
        3000
    );

    $umDiretor = new Diretor(
        'Jesuino',
        new Cpf('654.123.879-01'),
        5000
    );

    $umEditor = new EditorVideo(
        'Ana Bastos',
        new Cpf('456.987.213-11'),
        1500
    );

    $controlador = new ControladorDeBonificacoes();
    $controlador->adicionaBonificaoDe($umDesenvolvedor);
    $controlador->adicionaBonificaoDe($umaGerente);
    $controlador->adicionaBonificaoDe($umDiretor);
    $controlador->adicionaBonificaoDe($umEditor);

    echo $controlador->recuperaTotal();
} catch (NomeInvalidoException $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
