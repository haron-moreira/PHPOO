<?php

namespace Alura\Banco\Modelo;

final class Endereco
{

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;

    }

    // Get

    public function getCidade():string 
    {
        return $this->cidade;
    }

    public function getBairro():string 
    {
        return $this->bairro;
    }


    public function getRua():string 
    {
        return $this->rua;
    }


    public function getNumero():string 
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __get($nomeAtributo)
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }


    // Set

    public function setCidade($valor): void 
    {
        $this->cidade = $valor;
    }


    public function setBairro($valor): void 
    {
        $this->bairro = $valor;
    }


    public function setRua($valor): void 
    {
        $this->rua = $valor;
    }


    public function setNumero($valor): void 
    {
        $this->numero = $valor;
    }

    public function __set($nomeAtributo, $valor)
    {
        $set = 'set' . ucfirst($nomeAtributo);
        return $this->$set($valor);
    }

}

?>