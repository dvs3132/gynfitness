<?php get_header(); ?>

    <main class="pagina seccion no-sidebars contenedor">
        <ul class="listado-blog">
            <?php while(have_posts()): the_post(); ?>
                <li class="card gradient">
                    <?php the_post_thumbnail('mediano'); ?>
                </li>
            <?php endwhile; ?>    
        </ul>
    </main>


<?php get_footer(); ?>