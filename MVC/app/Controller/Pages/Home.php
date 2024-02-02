<?php
namespace App\Controller\Pages;
use \App\utils\view;  // para usar a classe

class Home{
    /*
    Este método utiliza a classe view para renderizar a view chamada 'pages\home', passando um array
    associativo de variáveis (name e description). Os valores dessas variáveis serão substituídos na view,
    resultando em uma página HTML personalizada.
    */
    public static function getHome(){
        return view::render('pages\home',[
            'name'=>'Marc',
            'description'=>'Ver os conceitos fundamentais de MVC'
        ]);
    }
}
