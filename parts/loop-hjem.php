<div class="column">
	<a href="<?php the_permalink() ?>">
	<?php the_post_thumbnail('full'); ?>
</a>
	<div class="panel" data-equalizer-watch>
        <div class="panel-content ">


<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	<header class="article-header">
		<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
	</header> <!-- end article header -->
					
	<section class="entry-content" itemprop="articleBody">
		<?php the_excerpt(); ?>
	</section> <!-- end article section -->
						
</article> <!-- end article -->
</div>
</div>
</div>

        