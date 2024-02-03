<?php
// Classe para gerenciar as views
    namespace App\utils;

class view{
    // validar se o arquivo existe ou não
    private static function getContentView($view){ // retorna conteudo da view
        $files = __DIR__.'/../../resources/view/'.$view.".html";
        return file_exists($files) ? file_get_contents($files) : "Pagina não existe!"; // se o arquivo existir retorne se não retorne nada
    }

    // Criar metodos responsaveis por gerenciar as views em resources \ view \ pages
    public static function render($view, $vars = []){ // retorna conteudo renderizado da view
        $contentView = self::getContentView($view);
        //DESCOBRIR A CHAVE DO ARRAY DE VARIAVEIS
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            //Ou seja, cada elemento do array $keys é modificado para ter {{ antes e }} depois do seu valor original.
            return '{{'.$item.'}}'; 
        },$keys);
        return str_replace($keys,array_values($vars),$contentView); 
        
    }  
}