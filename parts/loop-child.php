



<article id="post-<?php the_ID(); ?>" <?php post_class('small-12 medium-6 columns end'); ?> >
	<a href="<?php the_permalink() ?>" class="head-image">
	<?php the_post_thumbnail('full'); ?>
</a>
	<a href="<?php the_permalink() ?>" class="panel" data-equalizer-watch >
		<div class="panel-content">
			<header class="article-header">
				<h5><?php the_title(); ?></h5>

					<?php $meta = __(get_post_meta( get_the_ID(), 'Description', true )); ?>
					<?php echo '<p>'. the_excerpt() .'</p>';?>

				</header> <!-- end article header -->


			</div>
		</a>
	</article>
