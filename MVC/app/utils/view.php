<?php
// Classe para gerenciar as views
    namespace App\utils;

class view{
    // Este método recebe o nome de uma view (modelo) como parâmetro e tenta obter o conteúdo desse arquivo HTML.
    // Se o arquivo existir, ele retorna o conteúdo; caso contrário, retorna a string "erro".
    private static function getContentView($view){ 
        $files = __DIR__.'/../../resources/view/'.$view.".html";
        return file_exists($files) ? file_get_contents($files) : "erro"; 
    }

    // Este método é responsável por renderizar a view. Ele chama o método getContentView para obter o conteúdo
    // da view desejada. Em seguida, substitui as variáveis presentes na view pelos valores correspondentes fornecidos
    // no array $vars. As variáveis na view estão no formato {{nome_da_variavel}}. O método substitui essas placeholders
    // pelos valores reais das variáveis.
    public static function render($view, $vars = []){ 
        $contentView = self::getContentView($view);
        //DESCOBRIR A CHAVE DO ARRAY DE VARIAVEIS
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}'; 
        },$keys);
        return str_replace($keys,array_values($vars),$contentView); 
        
    }  
}
