<?php
/*
Template Name: Lokallag
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
		$author=get_the_author_meta('ID');
		$args=array(
			'author'=>$author,
			'post_type' => 'post',
			'post_status' => 'publish',
			'order' => 'DESC',
			'orderby' => 'date',
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

<div class="small-12 large-4 columns">
	<div class="panel">
		<div class="panel-content">

			<p>Leder: <?php the_field('leder'); ?></p>

			<p><?php the_field('adresse'); ?></p>

			<?php

			if(get_field('telefon'))
			{
				echo '<p>Tlf: ' . get_field('telefon') . '</p>';
			}

			?>

			<?php

			if(get_field('mobil'))
			{
				echo '<p> Mob: ' . get_field('mobil') . '</p>';
			}

			?>

			<p>E-post: <a href="mailto:<?php the_field('e-post'); ?>"><?php the_field('e-post') ?></a></p>
		</div>
	</div>
</div>

</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>