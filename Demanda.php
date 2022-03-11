<?php
class Demanda{
private $id;
private $nome;
private $datent;
private $departamento;

public function getId(){
    return $this->id;
}

public function getNome(){
    return $this->nome;
}

public function getDatent(){
    return $this->datent;
}
public function getDepartamento(){
 return $this->departamento;

}


public function __construct($id,$nome,$datent,$departamento){
   
    $this->id = $id;
    $this->nome = $nome;
    $this->datent = $datent;
    $this->departamento = $departamento;							     
}		

public function imprimeDados(){
    echo "------- Dados do Demanda --------<br>";
    echo $this->getId() . "<br>";
    echo $this->getNome() . "<br>";
    echo $this->getDatent() . "<br>";
    echo "------- Dados do Departamento --------<br>";
    echo $this->getDepartamento()->imprimeDados();

}


}

?>