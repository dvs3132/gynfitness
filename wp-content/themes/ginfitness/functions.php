<?php 

/** Consultas Reutilizables */
require get_template_directory() . '/inc/queries.php';

require get_template_directory() . '/inc/shortcodes.php';


function gymfitness_setup() {

    // Habilitar imagenes destacadas \
    add_theme_support('post-thumbnails');

    // Titilos SEO
    add_theme_support('title-tag');

    // Agregar imagenes de tamaño personalizado
    add_image_size( 'square', 350, 350, true );
    add_image_size( 'portrait', 350, 724, true );
    add_image_size( 'cajas', 400, 375, true );
    add_image_size( 'mediano', 700, 400, true );
    add_image_size( 'blog', 966, 644, true );
}
add_action('after_setup_theme', 'gymfitness_setup');

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

    if(is_page('galeria')):
    wp_enqueue_style('lightboxCSS', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.0');
    endif;

    if(is_page('contacto')):
        wp_enqueue_style('leaftletCSS', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(), '1.7.1');
    endif;

    // la hoja de estilos principal 
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

    // Dependencias Javascript
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);

    if(is_page('galeria')):
    wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.0', true);
    endif;

    if(is_page('contacto')):
        wp_enqueue_script('leaftletJS', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', array(), '1.7.1', true);
    endif;

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true); 

}

add_action('wp_enqueue_scripts', 'gynfitness_scripts_styles');


/** Definir la Zona de los Widgets */

function gymfitness_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Sidebar2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'gymfitness_widgets');


        