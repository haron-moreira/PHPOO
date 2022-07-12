<?php

use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};

require_once 'autoload.php';

$conta = new ContaPoupanca ( 
                    new Titular (
                                 new CPF ('123.456.789-10'),
                                 'Edimilson Silva Sauro', 
                                 new Endereco('Bahia', 'Bairro', 'Rua Um', '25B')
                )
            );


$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperaSaldo();

?>