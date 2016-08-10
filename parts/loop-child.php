
<a href="<?php the_permalink() ?>" style="display: block;">
<article id="post-<?php the_ID(); ?>" <?php post_class('large-12 column bottom-gray'); ?> role="article" style="background-color: white; margin-bottom: 20px;">
	<div class="row nyheter">
	<section class="entry-content medium-4 large-4 columns show-for-medium" itemprop="articleBody" style="padding: 0; overflow: hidden;">
		<?php the_post_thumbnail('thumbnail'); ?>
		
	</section> <!-- end article section -->
	<div class="callout medium-8 large-8 columns" style="border: none; background-color: rgba(0,0,0,0);">
	<header class="article-header">
		<h2><?php the_title(); ?></h2>

		<?php $meta = __(get_post_meta( get_the_ID(), 'Description', true )); ?>
		<?php echo '<p>'. $meta .'</p>';?>
		
	</header> <!-- end article header -->
					
	</div>	
	</div>	    						
</article> <!-- end article -->
</a>