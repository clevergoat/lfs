<?php
/*
Template Name: List Child pages
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns" data-equalizer data-equalize-on="medium" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<header class="article-header">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header> <!-- end article header -->

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
