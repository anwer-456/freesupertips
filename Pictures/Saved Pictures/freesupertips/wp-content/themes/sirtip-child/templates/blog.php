<?php 
   // Template Name: Blog
   ?>
<?php get_header(); ?>
<div class="wrapper" id="to-wrapper">
<!-- remove comment to run takeover -->
<div class="inner-wrapper" id="content-container">
   <div class="ui stackable grid" id="content">
      <div class="ui ten wide column">
         <div class="title_h1">
            <h1>Latest Blog Posts</h1>
         </div>
         <?php $args = array( 'post_type' => 'blog','posts_per_page' => 8 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
         <div class="ui list blog">
            <a class="item blog_block" href="<?php the_permalink();?>">
               <div class="ui grid compact">
                  <div class="three wide column" style="padding:3px;"><?php the_post_thumbnail('thumbnail');?></div>
                  <div class="thirteen wide column" style="padding:3px;">
                     <div class="blog-post-content">
                        <h3><?php the_title();?></h3>
                        <p class="sub-head-date"><span><?php echo get_the_date(); ?></span></p>
                        <div class="hide-500 blog-excerpt">
                           <p><?php the_content();?></p>
                        </div>
                     </div>
                  </div>
               </div>
            </a>
         </div>
      <?php endwhile;?>
         <!-- NEXT AND PREVIOUS POST LINKS -->
         <!-- <div id="next-prev-links">
            <div id="prev-post" class="prev-only"> <a href="http://stagingonline.net/projects/freesupertips/blog/page/2/">« Previous Posts</a></div>
            <div style="clear:both;"></div>
         </div> -->
         <!-- END NEXT AND PREVIOUS POST LINKS -->
      </div>
      <!-- start six wide column -->
      <div class="six wide column full height">
         <div class="desktop">
            <div class="ui horizontal divider" id="freebets_section"> <i class="ui white custom cash icon"></i> Free Bets &amp; Offers</div>
            <div id="freebet-sidebar">
               <ul class="tabs showCasino">
                  <li class="tab-link current" data-tab="tab-1">Free Bets</li>
                  <li class="tab-link" data-tab="tab-2">Special Offers</li>
                  <li class="tab-link" data-tab="tab-3">Casino Offers</li>
               </ul>
               <?php get_sidebar();?>
            </div>
            <!-- end freebet sidebar --> <script>$(document).ready(function(){
               $('ul.tabs li').click(function(){
                 var tab_id = $(this).attr('data-tab');
               
                 $('ul.tabs li').removeClass('current');
                 $('.tab-content').removeClass('current');
               
                 $(this).addClass('current');
                 $("."+tab_id).addClass('current');
               })
               })
            </script> 
         </div>
      </div>
      <!-- end grid -->
   </div>
</div>
<iframe id="sumome-jquery-iframe" title="Sumo Hidden Content" style="display: none;" src="./Free Sports Betting Tips &amp; Free Bets, Football Predictions1_files/saved_resource(1).html"></iframe>
<?php get_footer(); ?>