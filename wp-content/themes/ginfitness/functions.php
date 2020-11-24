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

    // la hoja de estilos principal 
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

    
}

add_action('wp_enqueue_scripts', 'gynfitness_scripts_styles');