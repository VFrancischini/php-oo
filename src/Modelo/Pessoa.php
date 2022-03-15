<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNomeTitular($nome);
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

    protected function validaNomeTitular(string $nomeTitular): void
    {
        if (mb_strlen($nomeTitular) < 5) {
            echo 'Nome precisa ter pelo menos 5 caracteres';
            exit();
        }
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}
