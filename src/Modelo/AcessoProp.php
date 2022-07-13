<?php

namespace Alura\Banco\Modelo;

trait AcessoProp
{
    public function __get($nomeAtributo)
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}


?>