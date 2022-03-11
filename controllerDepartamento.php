<?php
	require ('Departamento.php');
	require ('Instituicao.php');
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];
	$inst = new Instituicao();
	$inst->setId($id);
	$inst->setNome($nome);
	$inst->setCnpj($cnpj);
   

	$departamento1 = new Departamento(1,"Cerel",7,$inst);
  

	$departamento1->imprimeDados();

?>