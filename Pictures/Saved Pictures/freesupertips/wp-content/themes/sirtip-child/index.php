<?php get_header(); ?>
<!-- <section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?> -->

 <?php $args = array( 'post_type' => 'sports', 'posts_per_page' => 3 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                        //the_title();
                        the_post_thumbnail( 'post-thumbnail', 'large' );
                        // echo '<div class="entry-content">';
                        the_content();
                        // echo '</div>';
                    endwhile;?>
<?php get_footer(); ?>