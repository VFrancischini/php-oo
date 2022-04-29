<?php

namespace Alura\Banco\Modelo;

use DomainException;

class NomeInvalidoException extends DomainException
{
    public function __construct(string $nomeTitular)
    {
        $mensagem = "Você utilizou um nome inválido! ($nomeTitular)";
        parent::__construct($mensagem);
    }
}
