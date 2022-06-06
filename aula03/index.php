<?php

include 'Produto.php';
include 'Categoria.php';


$c1 = new Categoria('Roupas', 'Roupas Unissex');
$c2 = new Categoria('Roupas de Banho', 'Toalhas, toalhas para rosto, etc');
$c3 = new Categoria('Calçados', 'Calçados em geral');


$p1 = new Produto('Tenis', 299, $c3);
$p1->setDescricao('Tenis para corrida profissional');
// $p1->setNome('Tenis para corrida');
// $p1->setValor(299);


$p2 = new Produto('Calça Jeans', 100, $c1);
// $p2->setnome('Calça Jeans');
// $p2->setvalor(100);

$p3 = new Produto('Calça Branca', 159.00, $c1);
// $p3->setnome('Calça Branca');

var_dump($p1);
var_dump($p2);
var_dump($p3);