<?php
namespace App\Controller\Pages;
use \App\utils\view;  // para usar a classe
use App\Model\Entity\Organization;

class Home extends Page{
    /*
    Este método utiliza a classe view para renderizar a view chamada 'pages\home', passando um array
    associativo de variáveis (name e description). Os valores dessas variáveis serão substituídos na view,
    resultando em uma página HTML personalizada.
    */
    public static function getHome(){
        $ObOrganization = new Organization;
        // RETORNA A VIEW DA HOME
        $home = view::render('pages\home',[
            'name'=>$ObOrganization->name,
            'description'=>$ObOrganization->descricao
        ]);
        // RETORNA A VIEW DA PAGE
        return parent::getPage("Mvc - Teste", $home);
    }

}