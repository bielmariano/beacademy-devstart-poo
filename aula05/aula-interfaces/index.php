<?php

// ini_set('display_erros', 1);

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$cpf = '12312312312';
$documentoUSA = '12312312312123';

$br = new ValidarBR;
$br->validarDocumento($cpf);

$us = new ValidarUS;
$us->validarDocumento($documentoUSA);


echo('Funcionou');