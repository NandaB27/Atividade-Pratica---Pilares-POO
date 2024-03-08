<?php

abstract class Ingresso {
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }
    abstract public function imprimirValor();
};

class Normal extends Ingresso {
    public function imprimirValor(){
        echo "O ingresso custa R$ $this->valor. </br>";
    }
};

class VIP extends Ingresso {
    public $valorAdicional;

    public function __construct($valor,$valorAdicional){
        parent::__construct($valor);
        $this->valorAdicional = $valorAdicional;
    }
    public function imprimirValor(){
        $valorTotal = $this->valor + $this->valorAdicional;
        echo "O ingresso VIP custa R$$valorTotal. </br>";
    }
};

class Camarote extends Ingresso {
    public $valorAdicional;
    public function __construct($valor,$valorAdicional){
        parent::__construct($valor);
        $this->valorAdicional = $valorAdicional;
    }

    public function imprimirValor(){
        $valorTotal = $this->valor + $this->valorAdicional;
        echo "O ingresso Camarote custa R$$valorTotal. </br>";
    }
};