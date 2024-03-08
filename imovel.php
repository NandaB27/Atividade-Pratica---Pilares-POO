<?php 

class Imovel {
    protected $endereco;

    protected $valor;

    public function __construct($endereco, $valor) {
        $this->endereco = $endereco;
        $this->valor = $valor;
    }
}

class Novo extends Imovel {
    protected $valoradicional;

    public function __construct($endereco, $valor,$valoradicional) {
        parent::__construct($endereco, $valor);
        $this->valoradicional = $valoradicional;
    }

    public function imprimirValorAdicional() {
        echo "O valor adicional do imóvel é R$$this->valoradicional";
    }

    public function informacoes(){
        $valorTotal = $this->valor + $this->valoradicional;
        echo "O endereço do imóvel é $this->endereco e está no valor de R$$valorTotal, o valor do imóvel pela localidade é de R$$this->valor e o valor adicional por ser uma construção nova é de R$$this->valoradicional<br>";
    }
};

class Velho extends Imovel {
    protected $valordesconto;

    public function __construct($endereco, $valor,$valordesconto) {
        parent::__construct($endereco, $valor);
        $this->valordesconto = $valordesconto;
    }

    public function imprimirValorDesconto() {
        echo "O valor de desconto é R$$this->valordesconto";
    }

    public function informacoes(){
        $valorTotal = $this->valor - $this->valordesconto;
        echo "O endereço do imóvel é $this->endereco e está no valor de R$$valorTotal, o valor do imóvel pela localidade é de R$$this->valor e o valor de desconto por ser uma construção antiga é de R$$this->valordesconto<br>";
    }
};