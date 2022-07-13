<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador 
{
    //private $totalBonificacoes = 0;

    // public function tentaLogin(Diretor $diretor, string $senha): void
    // {
    //     if ($diretor->autenticacao($senha)){
    //         echo 'Ok, usuário logado no sistema';
            
    //     } else {
    //         echo 'Ops, senha incorreta.';
           
    //     }
    // }

    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->autenticacao($senha)){
            echo 'Ok, usuário logado no sistema';
            
        } else {
            echo 'Ops, senha incorreta.';
           
        }
    }

    
}

?>