<?php

include 'Aluno.php';

$a1 = new Aluno(); //instanciando
$a1->nome = 'Alessandro';
$a1->cpf = '123.123.123-12';

$cursoPHP = new Curso(); //objeto Aluno
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->cargaHoraria = 88;
$cursoPHP->descricao = 'Aprender o básico e intermediario do PHP';

echo "<h1>Aluno: {$a1->nome}</h1>";