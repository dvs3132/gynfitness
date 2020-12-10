<?php 

function gymfitness_lista_clases(){ ?>
    <ul class="lista-clases">
        <?php
            $args = array(
                'post_type' => 'gymfitness_clases',
                'post_per_page' => 10
            );
            $clases = new WP_Query($args);
            while( $clases->have_posts() ): $clases->the_post(); ?>

            <li>
                <h1><?php the_title(); ?></h1>
            </li>

            <?php endwhile; wp_reset_postdata(); ?>    
    </ul>

<?php
}
