<?php

declare(strict_types=1);

class Categoria
{
  //construtor apartir do php 8
  public function __construct(
    private string $nome,
    private string $descricao,
  )
  {
    
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  //construtor antes do php 8
  // private string $nome;
  // private string $descricao;

  // public function __construct(string $nome, string $descricao)
  // {
  //   $this->nome = $nome;
  //   $this->descricao = $descricao;
  // }
}