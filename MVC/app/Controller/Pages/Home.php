<?php
   //Responsavel por gerenciar as requisições da homer do site (Pagina inicial)
namespace App\Controller\Pages;

use \App\utils\view;  // para usar a classe
class Home extends Page{
    /*
     * Metodos responsavel por retornar o conteudo (View) da Homer
    */
    public static function getHome(){
        // RETORNA A VIEW DA HOME
        $home = view::render('pages\home',[
            'name'=>'Marc',
            'description'=>'Ver os conceitos fundamentais de MVC'
        ]);
        // RETORNA A VIEW DA PAGE
        return parent::getPage("Mvc - Teste", $home);
    }
}