<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }

    final protected function validaNome(string $nomeTitular): void
    {
        if (mb_strlen($nomeTitular) < 5) {
            throw new NomeInvalidoException($nomeTitular);
        }
    }
}
