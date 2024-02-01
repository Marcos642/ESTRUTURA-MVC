<?php
    require __DIR__.'/vendor/autoload.php';

    use \App\Controller\Pages\Home; // Chamando o arquivo nesse endereço
    echo Home::getHome();  // Chamando o método que carrega a pagina html

