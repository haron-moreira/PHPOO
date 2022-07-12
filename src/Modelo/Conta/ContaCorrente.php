<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{

    // public function sacar(float $valorASacar): void
    // {
    //     $tarifaSaque = $valorASacar * 0.03;
    //     $valorSaque = $valorASacar + $tarifaSaque;
    //     if ($valorSaque > $this->saldo) {
    //         echo "Saldo indisponível";
    //         return;
    //     }

    //     $this->saldo -= $valorSaque;
    // }

    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

}



?>