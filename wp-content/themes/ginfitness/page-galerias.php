<?php 
/**
 * Template Name: Template para galerias
 */

get_header();?>

<main class="contenedor pagina seccion ">
  <div class="contenido-principal">
    <?php while( have_posts() ): the_post();?> 

      <h1 class="text-center texto-primario"><?php the_title(); ?> </h1>

        <?php
          // Obtener la galeria de la pagina actual
          $galeria = get_post_gallery( get_the_ID(), false); 
          // Obtener los IDs
          $galeria_imagenes_ID= explode (',', $galeria['ids']);
        ?>

      <?php  endwhile; ?> 

  </div>

</main>

<?php get_footer(); ?>
