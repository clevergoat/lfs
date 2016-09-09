<?php
/*
Template Name: List Child pages 2
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-12 columns" data-equalizer data-equalize-on="medium" role="main">


			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'parts/loop', 'page' ); ?>

			<?php endwhile; endif; ?>		

			<?php
			$parent_id = $posts[0]->ID;
			$args=array(
				'post_parent' => $parent_id,
				'post_type' => 'page',
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'caller_get_posts'=> 1
				);
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {

				while ($my_query->have_posts()) : $my_query->the_post(); ?>
				
				<?php
				

					get_template_part( 'parts/loop', 'child' );
										
				
				endwhile;
			}
wp_reset_query();  // Restore global post data stomped by the_post().
?>

</main> <!-- end #main -->

<?php get_sidebar(); ?>

</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>