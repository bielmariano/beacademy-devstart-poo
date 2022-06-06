<?php

include 'Usuario.php';
include 'Cliente.php';
include 'ClienteVip.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('chiquinho@email.com', '123456'); // construtor do Usuario
$c1->setNome('Chiquim');
$c1->setCadaCadastro('01/01/2019');

$g1 = new Gestor('zezin@email.com', '123123', 6000); //construtor do Gestor
$g1->setNome('Zezim');

$gg1 = new GestorGeral('maria@email.com', '1q2e3e', 9000);

// $u1 = new Usuario('hackhack@email.com', 111111);

$clienteVip = new ClienteVip('clientevip@email', '123123');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
var_dump($clienteVip);
