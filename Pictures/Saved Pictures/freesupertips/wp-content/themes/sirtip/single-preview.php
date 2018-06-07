<?php
/*
 * Template Name: Previews
 * Template Post Type: post, page, product
 */
?>
<?php get_header(); ?>
<?php $args = array( 'post_type' => 'previews', 'posts_per_page' => 1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();?>
         <div class="container">'
         <div class="row">
         	<div class="col-md-6">
         <?php the_title();?>
      </div>
      <div class="col-md-6">
          <?php the_post_thumbnail('medium');?>
      </div>
  </div>
</div>
<div class="container">'
         <div class="row">
         	<div class="col-md-12">
        <?  the_content();?>
    </div>
</div>
</div>
          <?php    endwhile;?>
<?php get_footer(); ?>