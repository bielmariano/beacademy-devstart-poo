<?php

declare(strict_types=1);

final class Cliente extends Usuario
{
  private string $cadaCadastro;

  public function getCadaCadastro(): string
  {
    return $this->cadaCadastro;
  }

  public function setCadaCadastro(string $cadaCadastro): void
  {
    $this->$cadaCadastro = $cadaCadastro;
  }
}
