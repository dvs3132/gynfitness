<?php 
/*
    Plugin Name: Gym Fitness - Widgets
    Plugin URI:
    Description: Añade Widgets Personalizados al sitio de Gym Fitness
    Version: 1.0.0
    Author: Purple Logistic
    Author URI:
    Text Domain: Gymfitness
*/

if(!defined('ABSPATH')) die(); 

/**
 * Adds Gymfitness_Class_Widget widget.
 */
class Gymfitness_Class_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Gymfitness Clases', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Agrega las clases como Widgets', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
		?>
			<ul>
				<?php 
					$args= array(
						'post_type' => 'gymfitness_clases',
						'posts_per_page' => 3
					);
					$clases = new WP_Query($args);
					while($clases->have_posts()): $clases->the_post();
				?>

				<li class="clase-sidebar">
					<div class="iamgen">
						<?php the_post_thumbnail('thumbnail'); ?>
					</div>

					<div class="contenido-clase">
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
						</a>
						<?php 
                        $hora_inicio = get_field('hora_inicio_');
                        $hora_fin = get_field('hora_fin');
                    	?>

                    <p><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin ?></p> 
					</div>
				</li>

				<?php endwhile; wp_reset_postdata();?>
			</ul>

		<?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget


// register Foo_Widget widget
function gymfitness_registrar_widget() {
    register_widget( 'Gymfitness_Class_Widget' );
}
add_action( 'widgets_init', 'gymfitness_registrar_widget' );