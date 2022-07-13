<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor('Haron', new CPF('121.212.321-15'), 'Desenvolvedor', '5000');
$doisFuncionario = new Gerente('Lucas', new CPF('121.212.321-15'), 'Desenvolvedor', '1000');
$tresFuncionario = new Diretor('Eronilson', new CPF('121.212.321-15'), 'Desenvolvedor', '3000');
$qtrFuncionario = new EditorVideo('Eronilson', new CPF('121.212.321-15'), 'Desenvolvedor', '3000');

$controlador = new ControladorDeBonificacoes();

$controlador->addBonificacao($umFuncionario);
$controlador->addBonificacao($doisFuncionario);
$controlador->addBonificacao($tresFuncionario);
$controlador->addBonificacao($qtrFuncionario);

echo $controlador->getTotalBonificacao();

?>