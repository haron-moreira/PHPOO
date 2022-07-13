<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa {

    private string $cargo;
    private float $salario;
 
    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getCargo():string 
    {
        return $this->cargo;
    }

    public function setName(String $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getSalario(): float 
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;
    // public function calculaBonificacao(): float
    // {
    //     return $this->salario * 0.1;
    // }

    public function recebeAumento($valorAumento): void
    { 
        if ($valorAumento < 0){
            echo "Aumento DEVE ser positivo!";
            return;
        }
        $this->salario += $valorAumento;
    }
}

?>