<?php
   //Responsavel por gerenciar as requisições da homer do site (Pagina inicial)
namespace App\Controller\Pages;

class Home{
    /*
     * Metodos responsavel por retornar o conteudo (View) da Homer
    */
    public static function getHome(){
        return "Olá mundo";
    }
}

// Só que o controler é responsavel por pegar os dados que o model retornou
// e colocalos dentro da view