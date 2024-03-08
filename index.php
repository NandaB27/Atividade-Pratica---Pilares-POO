<?php

require_once('ingressos.php');

require_once('imovel.php');

echo "Ingressos </br><hr>";

$ingressoNormal = new Normal(200);

$ingressoNormal->imprimirValor();

$ingressoVIP = new VIP(200,250);

$ingressoVIP->imprimirValor();

$ingressoCamarote = new Camarote(200,450);

$ingressoCamarote->imprimirValor();

echo "<hr>";

echo "Imóveis <br>";

$imovelNovo = new Novo ("Avenida do Trabalhador, 15", 340000, 200000);

$imovelNovo->informacoes();

$imovelVelho = new Velho ("Rua dos papagaios,20", 400000, 150000);

$imovelVelho->informacoes();