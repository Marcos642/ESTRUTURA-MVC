<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Controller\Pages\Home; // Chamando o arquivo nesse endereço
$o = new \App\Http\Response(200,'olá mundo');

echo "<pre>";
var_dump($o);
echo "</pre>";


exit;
echo Home::getHome();  // Chamando o método que carrega a pagina html

