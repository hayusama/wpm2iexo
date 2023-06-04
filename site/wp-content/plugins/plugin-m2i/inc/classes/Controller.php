<?php
namespace Pixel\Plugin;

use Pixel\Plugin\Shortcode\RequeteWP;
use Pixel\Plugin\Shortcode\DisplayTodaysDateShortcode;

final class Controller {
    
    public function __construct(){
        add_action('template_redirect',[$this,"plugin_is_page"]);

    }
    
    public function plugin_is_page():void{
        //CREE L'OBJET MAIS NE LANCE AUCUNE METHODE
       $shortCodeDate = new DisplayTodaysDateShortcode();
       $shortRequete = new RequeteWP();
       //CREE UN OBJET SHORTCODE ET UN ATTRIBUT D'OBJET SHORTCODES SOUS FORME DE TABLEAU
       $shortcodes = new Shortcode();
       $shortcodes->addShortcode($shortCodeDate);
       $shortcodes->addShortcode($shortRequete);
       $shortcodes->initialisation();
    }

}

