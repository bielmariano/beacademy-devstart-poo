<?php

declare(strict_types=1);

abstract class Validar
{
    public static function validarCpf(string $cpf)
    {
        if(strlen($cpf) !== 11) //apenas numeros
        die('Ops, CPF inválido');
    }

}
// como essa classe não é mais instanciada por utilizar como "Validar::validarCpf($cpf);", faz sentido colocar essa class como abstract.