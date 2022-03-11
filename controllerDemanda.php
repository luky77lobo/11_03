<?php
 require('Demanda.php');
require('Departamento.php');
require('Instituicao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$inst = new Instituicao();
$inst->setId($id);
$inst->setNome($nome);
$inst->setCnpj($cnpj);


$dept = new Departamento(1,"Cerel",7, $inst);

$demanda = new Demanda(1,"Computadores","04/10/18",$dept); 

$demanda->imprimeDados();

?>  

