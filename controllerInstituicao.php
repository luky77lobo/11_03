<?php
	require ('Instituicao.php');
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];

	$inst1 = new Instituicao();
	$inst1->setId($id);
	$inst1->setNome($nome);
	$inst1->setCnpj($cnpj);
      
	echo $inst1->imprimeDados();

	echo "<br><a href='index.php'>Voltar</a>";

?>