<?php
/**
 * The template for Birth Control Methods and Testimonials
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-birth-control" role="main">

			<section class="birth-control container">


				<?php

			$args = array( 'posts_per_page' => 12, 'post_type'=> 'birth_control_method' );

			$birth_control_posts = get_posts( $args );
			foreach ( $birth_control_posts as $post ) : setup_postdata( $post ); ?>

			<a class="birth-control-methods-box" href="<?php the_permalink(); ?>">

				<h2>
				<?php the_title(); ?>
				</h2>


				<strong><?php echo CFS()->get( "effectiveness"); ?></strong>
				<br>
				<div class ="hide-description"><?php echo CFS()->get( "description"); ?></div>
				<br>
				<?php echo CFS()->get( "price"); ?>
				<br />
				<br />
				<u>Learn More</u>

			</a>

				<?php

// 			<?php 

			endforeach; 
			wp_reset_postdata();?>

		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>