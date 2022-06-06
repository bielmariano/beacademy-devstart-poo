<?php

// configurar o composer.js, colocar este caminho/include e executar "php composer.phar dump-autoload" parar gerar os arquivos
include 'vendor/autoload.php';


// reference the Dompdf namespace
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '';

for($n = 0; $n < 10; $n++)
{
    $html .= 'ó o pente! <br>';
}

$dompdf->loadHtml('<h1>Olá mundo, estou aprendendo PHP</h1>' . $html);


// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();