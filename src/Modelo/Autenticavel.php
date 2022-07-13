<?php
namespace Alura\Banco\Modelo;

interface Autenticavel 
{

    public function autenticacao(string $senha): bool;

}

?>