<?php
   //Responsavel por gerenciar as requisições da homer do site (Pagina inicial)
namespace App\Controller\Pages;

use \App\utils\view;  // para usar a classe
class Home{
    /*
     * Metodos responsavel por retornar o conteudo (View) da Homer
    */
    public static function getHome(){
        return view::render('pages\home');
    }
}

// Só que o controler é responsavel por pegar os dados que o model retornou
// e colocalos dentro da view