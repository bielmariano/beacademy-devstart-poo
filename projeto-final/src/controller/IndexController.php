<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController {
    public function indexAction(): void
    {
        //__DIR__  sinaliza a pasta onde está, e a cada dirname voltará uma pasta.
        include dirname(__DIR__).'/View/index/index.php';
    }

    public function loginAction(): void
    {
        include dirname(__DIR__).'/View/index/login.php';
    }
}