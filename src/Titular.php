<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }

    private function validaNomeTitular(string $nomeTitular): void
    {
        if (mb_strlen($nomeTitular) < 5) {
            echo 'Nome precisa ter pelo menos 5 caracteres';
            exit();
        }
    }
}
