<?php
namespace App\Controller\Pages;
use \App\utils\view; 
// CLASSE CONTROLADORA DE PAGINAS
class Page{
    // Método que rederiza o header
    private static function getHeader(){
        return view::render('pages/header');
    }

    // Método que rederiza o footer
    private static function getFooter(){
        return view::render('pages/footer');
    }

    // Método que carrega informações na pagina
    public static function getPage($title,$content){
        return view::render('pages/page',[
            'title'=>$title,
            'header'=>self::getHeader(), // Carrega a view header.html
            'content'=>$content, // Aqui fica o conteudo entre o header e o footer-
            'footer'=>self::getFooter()  // Carrega a view footer.html
        ]); 
    }
}