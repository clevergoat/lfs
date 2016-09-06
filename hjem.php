<?php
/*
Template Name: Hjem
*/
?>

<?php get_header(); ?>

<div id="content">

  <div id="inner-content" class="row">

    <main id="main" class="small-collapse medium-uncollapse small-12 large-8 columns" role="main">



      <div class="orbit column" role="region" aria-label="Favorite Space Pictures" data-orbit>
        <ul class="orbit-container" data-options="bullets:true;">
          <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
          <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

          <?php
          $args=array(
            'post_type' => 'slider',
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date'
            );
          $sliders = null;
          $i = 0;
          $sliders = new WP_Query($args);
          if ( $sliders->have_posts() ) : ?>

          <?php while ( $sliders->have_posts() ) : $sliders->the_post(); ?>

          <li class="orbit-slide">
            <a href="http://<?php the_field('url'); ?>">
              <img class="orbit-image" src="<?php the_field('bilde'); ?>" alt="Space">
                    <?php

                    if(get_field('slider_title'))
                    {
                      echo '<figcaption class="orbit-caption">' . get_field('slider_title') . '</figcaption>';
                    }
                   ?>

            </a>
          </li>

        <?php endwhile; ?>

      </ul>
      <nav class="orbit-bullets">

        <?php while ( $sliders->have_posts() ) : $sliders->the_post(); 

        if ( $i == 0 ) {
          echo '<button class="is-active" data-slide="'. $i .'"></button>';
        } 

        if ( $i > 0 ) {
          echo '<button data-slide="'. $i .'"></button>';
        }

        $i++;      

        ?>
      <?php endwhile; ?>
    </nav>

  <?php endif; wp_reset_query(); ?>

</div>
  <?php 
      $args = array( 
        'post_type'       => 'page',
        'posts_per_page'  => '4',
        'meta_key'        => 'fremhevet_pa_forsiden',
        'meta_value'      => true
        );
      $recent_posts = new WP_Query( $args ); 
      ?>
<div class="small-up-1 medium-up-2 small-collapse medium-uncollapse" data-equalizer data-equalize-on="medium">

      <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
     

        <?php get_template_part( 'parts/loop', 'hjem' ); ?>

      

      <?php endwhile; // end of the loop. ?>
      </div>

      <?php wp_reset_postdata(); ?>



</main> <!-- end #main -->




<!--WIDGETS GO HERE-->
<?php get_sidebar(); ?>

</div>

</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
