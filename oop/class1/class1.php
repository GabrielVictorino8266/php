<?php

class Pessoa{
    public $nome;
    public $idade;
    public $cpf;

    public function Falar(){
        // echo "Nome: ". $nome . " de idade " . $idade . "Falou!\n";//isso retorna um erro, pois temos que usar $this->
        echo "Nome: ". $this->nome . " de idade " . $this->idade . " Falou!!! \n";
    }
}

// Instanciando objetos
$rodrigo = new Pessoa;


// Acessando atributos
// $rodrigo->Falar();
$rodrigo->nome = 'Rodrigo Santos de Oliveira';
$rodrigo->idade = 26;
$rodrigo->cpf = '47096312803';

// Chamando método no php
$rodrigo->Falar();

// var_dump($rodrigo);
?>