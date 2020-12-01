
<?php 
/**
 * Template Name: Contenido Centrado (No Sidebars)
 */
get_header();?>

<main class="contenedor pagina seccion no-sidebar">
  <div class="contenido-principal">
    <?php while( have_posts() ): the_post();?> 

    <h1 class="text-center texto-primario"><?php the_title(); ?> </h1>

      <?php 
        if(has_post_thumbnail() ):
          the_post_thumbnail('blog', array('class' => 'imagen-destacada'));
        else:
          echo "No hay nada que mostrar";
        endif;
      ?>

    <?php the_content(); ?> 

  <?php  endwhile; ?>
  </div>

</main>

<?php get_footer(); ?>