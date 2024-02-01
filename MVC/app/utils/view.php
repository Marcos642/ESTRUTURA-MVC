<?php
// Classe para gerenciar as views
    namespace App\utils;

class view{
    // validar se o arquivo existe ou não
    private static function getContentView($view){ // retorna conteudo da view
        $files = __DIR__.'/../../resources/view/'.$view.".html";
        return file_exists($files) ? file_get_contents($files) : "erro"; // se o arquivo existir retorne se não retorne nada
    }

    // Criar metodos responsaveis por gerenciar as views em resources \ view \ pages
    public static function render($view){ // retorna conteudo renderizado da view
        // conteudo da view
        $contentView = self::getContentView($view);
        return $contentView; // retorna o conteudo
    }  
}