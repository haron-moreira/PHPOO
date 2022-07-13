<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario {

    // public function calculaBonificacao(): float
    // {
    //     return $this->getSalario() * 0.05;
    // }

    public function sobeNivel(){
        $this->recebeAumento($this->getSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 500.0;
    }





}

?>