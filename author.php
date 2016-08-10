<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="row">
        <main id="main" class="large-8 medium-8 columns" role="main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php $author = get_the_author(); ?>
            <p><?php echo $author; ?></p>

      <p><?php the_author_posts_link(); ?></p>

      <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</main>
<?php get_sidebar(); ?>
</div>
</div>
<!-- End Loop -->

<?php get_footer(); ?>