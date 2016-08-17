<article id="post-<?php the_ID(); ?>" <?php post_class('small-12 medium-6 columns end'); ?>>
	<a href="<?php the_permalink() ?>" class="panel">
		<div class="panel-content">
			<header class="article-header">
				<h5><?php the_title(); ?></h45>

					<?php $meta = __(get_post_meta( get_the_ID(), 'Description', true )); ?>
					<?php echo '<p>'. $meta .'</p>';?>

				</header> <!-- end article header -->


			</div>
		</a>	    						
	</article>

	