<?php 

// Menus de navegacion, agrega mas utilizando el arreglo ( array )
function gynfitness_menus(){
    register_nav_menus(array(
        'menu-principal' => __( 'menu-principal', 'gynfitness' )
    ));
}

add_action('init', 'gynfitness_menus');

// Scripts y Styles
function gynfitness_scripts_styles(){

    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');

    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');

    // la hoja de estilos principal 
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

    // Dependencias Javascript
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true); 

}

add_action('wp_enqueue_scripts', 'gynfitness_scripts_styles');