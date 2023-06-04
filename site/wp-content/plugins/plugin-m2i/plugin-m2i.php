<?php

/**
 * Plugin Name: Pixel Online PLUGIN
 * Plugin URI: https://www.pixel-online.fr
 * Description: Mon plugin M2I à base de shortcode
 * Version: 1.0.0
 * Author: PARIS Anthony
 * Author URI: https://www.pixel-online.fr
 */

 //SECURITE EVITE DE LANCER LE SCRIPT DIRECTEMENT 
 if (!defined('ABSPATH')) exit;

 //SI LA SESSION N'EXISTE PAS JE CREE LA SESSION
 if(session_status() == PHP_SESSION_NONE){
    session_start();
 }

 define('BASE_PATH_PLUGIN', plugin_dir_path(__FILE__));
 define('BASE_URL_PLUGIN', plugin_dir_url(__FILE__));

 //echo BASE_PATH_PLUGIN."<br>".BASE_URL_PLUGIN;


 //CHARGEMENT DE COMPOSER
 require BASE_PATH_PLUGIN."vendor/autoload.php";


use Pixel\Plugin\Controller;
$controller = new Controller;