<?php
 namespace Pixel\Plugin\Shortcode;

 class RequeteWP{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, "css"]);
    }


    public function css(){
        wp_register_style('requete-css', BASE_URL_PLUGIN.'assets/css/style.min.css');
        wp_enqueue_style('requete-css');
    }

    public function register($atts, $content = null)
    {
        ob_start();
        $args = array(
            'post_type' => 'post',
        ); 
        // 2. On exécute la WP Query
        $my_query = new \WP_Query( $args );
        // 3. On lance la boucle !
        if( $my_query->have_posts() ) {
            while( $my_query->have_posts() ) {
             $post = $my_query->the_post();
            echo "<div class='custom-article-plugin'>";
                echo "<h2>";
                echo "<a href='".get_permalink($post)."'>";
                    the_title();
                echo "</a>";
                echo "</h2>";
                echo "<div>";
                    the_content();
                echo "</div>";
                echo "<div>";
                    the_post_thumbnail();
                echo "</div>";
            echo "</div>";
            }
        
        } 
        // 4. On réinitialise à la requête principale (important)
        wp_reset_postdata();
        $infos = ob_get_clean();
        return $infos;
    }
    public function init()
    {
        add_shortcode('display_requete_wp', array($this, 'register'));
    }
 }