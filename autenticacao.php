<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor('Elias', new CPF('111.222.333-44'), 'Diretor', 8000);

$autenticador->tentaLogin($diretor, '1234');

?>