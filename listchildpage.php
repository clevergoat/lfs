<?php
/*
Template Name: List Child pages
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="small-collapse medium-uncollapse large-8 medium-12 columns" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'parts/loop', 'page' ); ?>

			<?php endwhile; endif; ?>		

			<?php
			$args=array(
				'post_parent' => $post->ID,
				'post_type' => 'page',
				'post_status' => 'publish',
				'order' => 'ASC',
				'orderby' => 'name',
				'posts_per_page' => -1
				);
			$parent = null;
			$parent = new WP_Query($args);
			if ( $parent->have_posts() ) : ?>

		    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

		        <?php get_template_part( 'parts/loop', 'child' ); ?>

		    <?php endwhile; ?>



<?php endif; wp_reset_query(); ?>

</main> <!-- end #main -->

<?php get_sidebar(); ?>

</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>