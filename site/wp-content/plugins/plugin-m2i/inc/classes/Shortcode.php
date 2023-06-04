<?php
namespace Pixel\Plugin;

class Shortcode{
    private $shortcodes;

    public function __construct(){
        $this->shortcodes = [];
    }


    public function addShortcode($shortcode){
        array_push($this->shortcodes, $shortcode);
    }

    private function registerShortcodes(){
        if(count($this->shortcodes)){
            foreach($this->shortcodes as $shortcode){
                $shortcode->init();
            }
        }
    }

    public function initialisation() {
        $this->registerShortcodes();
    }

}