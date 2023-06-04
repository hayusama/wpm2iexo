<?php
namespace Pixel\Plugin\Shortcode;

class DisplayTodaysDateShortcode{
    public function register(){
        return "Aujourd'hui nous sommes le : ".date("d/m/y");
    }

    public function init(){
        add_shortcode('display_todays', [$this, "register"]);
    }
}