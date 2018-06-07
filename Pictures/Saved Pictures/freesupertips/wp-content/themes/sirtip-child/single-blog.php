<?php
   /*
   
    * Template Name: Blog
   
    * Template Post Type: Blog Posts
   
    */
   
   ?>
<?php get_header(); ?>
<div class="wrapper" id="to-wrapper">
<!-- remove comment to run takeover -->
<div class="inner-wrapper" id="content-container">
   <div class="ui stackable grid" id="content">
      <!-- <div class="ten wide column">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_title();?>
            <?php the_content();?>
             <?php endwhile; endif; ?>
         </div> -->
      <div class="ten wide column">
         <div class="ui horizontal divider invis_clss"><i class="ui white custom blog icon"></i> Betting Blog</div>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
            
            
         <div class="fst segment">
            <div class="blog content">
               <h1 class="ui header" style="margin-top:0px;">
                   <?php the_title();?>
                  <div class="sub header" style="color:#F04A3C !important;"></div>
               </h1>
               <div id="featured-image"><?php the_post_thumbnail('full');?></div>
              <ul class="sharing-icons top show"><li class="facebook"><a target="_blank" href="http://www.facebook.com/sharer.php?u=http://stagingonline.net/projects/freesupertips//11-1-match-goals-accumulator-lands-friday-night/&amp;title=11/1 Match Goals Accumulator Lands on Friday Night!"><img src="http://stagingonline.net/projects/freesupertips/wp-content/uploads/2018/01/fb-icon.png" alt=" ">&nbsp;&nbsp;<span>Share</span></a></li><li class="twitter"><a target="_blank" href="http://twitter.com/home?status=11/1 Match Goals Accumulator Lands on Friday Night! - http://stagingonline.net/projects/freesupertips//11-1-match-goals-accumulator-lands-friday-night/"><img src="http://stagingonline.net/projects/freesupertips/wp-content/uploads/2018/01/twitter-icon.png" alt="">&nbsp;&nbsp;<span>Share</span></a></li><li class="whatsapp"><a href="whatsapp://send?text=11/1 Match Goals Accumulator Lands on Friday Night! - http://stagingonline.net/projects/freesupertips//11-1-match-goals-accumulator-lands-friday-night/" data-action="share/whatsapp/share"><img src="http://stagingonline.net/projects/freesupertips//wp-content/themes/freesupertips/image/wa-icon.png" alt="">&nbsp;&nbsp;<span>Share</span></a></li><li class="message"><a href="#add-a-comment"><img src="http://stagingonline.net/projects/freesupertips/wp-content/uploads/2018/01/msg-icon.png" alt="">&nbsp;&nbsp;<span>Comment</span></a></li></ul>
             <?php the_content();?>
             <?php endwhile; endif; ?>
            <div id="add-a-comment"></div>
         </div>
         <!-- red segment -->
         
      </div>
       </div>

      <!-- end ten wide column --><!-- start six wide column -->
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
<?php get_footer(); ?>