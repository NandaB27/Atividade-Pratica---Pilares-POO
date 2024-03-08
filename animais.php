<?php 

class Animal {
    public $familia;
    public $nome;
    public $idade;

    public function informacoes(){
        echo "$this->nome e tem $this->idade, é da familia $this->familia!";
    }
};

class Gato extends Animal {

    public function __construct($familia, $nome, $idade) {
        $this->familia = $familia;
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function caçar(){
        echo "$this->nome caça graças ao seu instinto!";
    }
};

class Cachorro extends Animal {

    public function __construct($familia, $nome, $idade) {
        $this->familia = $familia;
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function proteger(){
        echo "$this->nome é um cachorro, cachorros além de serem considerados o melhor amigo do homem, são eficientes para proteção tanto de humanos como de animais, além de servir como animal de apoio!";
    }
};

class Cavalo extends Animal {

    public function __construct($familia, $nome, $idade) {
        $this->familia = $familia;
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function ouvir(){
        echo "$this->nome tem uma audição privilegiada, que lhe permite, além de ouvir ruídos a distância, distinguir seus diferentes tipos e suas mais diversas direções, fazendo com que movimentem suas orelhas de modo característico, prevendo o perigo mesmo antes do contato visual com ele.";
    }
};