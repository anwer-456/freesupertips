<?php 
 // Template Name: Europa League Predictions 
get_header(); ?>

               <div class="wrapper">
   <div class="inner-wrapper" id="content-container">
      <div class="ui  stackable grid" id="content">
         <!-- need to padd it if adding colour to cols) -->
         <div class="ui ten wide column">
            <div class="title_h1">
               <h1>FA Cup</h1>
            </div>
            <div id="home-banner-wrapper">
               <!-- <a href="" target="_blank" title="FA Cup Predictions" class="home-banner home-banner-1" style="background-image:url('http://stagingonline.net/projects/freesupertips/wp-content/uploads/2016/03/Corbis-42-71699031.jpg');">
                  <div class="text-overlay">
                     <div class="red-title">
                        <div class="home-banner-title">FA Cup Predictions</div>
                     </div>
                  </div>
               </a> -->
              
            <div class="container">
<div class="row" id="previews">
   <?php $args = array( 'post_type' => 'previews','category_name' => 'preveiws','posts_per_page' => 1 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      ?>  
   <div class="col-md-12">
      <div class="post-image"><?php the_post_thumbnail('full');?></div>
      <!-- <div class="cstt"><?php the_content();?></div> -->
      <div class="single-title"><a href="<?php the_permalink() ?>"><?php the_title();?></a></div>
   </div>
   <?php endwhile;?>
</div>
 <div style="clear:both;"></div>
            </div>
            </div>
<!-- End Preveiws -->
            <div id="featured-previews" style="margin-bottom:1em;">
               <h3>FA Cup Match Previews</h3>
               <?php $args = array( 'post_type' => 'matches', 'posts_per_page' => 10 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      ?>  
   <a itemscope="" itemtype="http://schema.org/SportsEvent" href="<a href="<?php the_permalink() ?>" class="featured-prev" title="<?php the_title();?>">
      <span itemprop="name" content="Chievo vs Bologna">
         <span itemprop="description" content="Chievo vs Bologna Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://stagingonline.net/projects/freesupertips/previews/chievo-vs-bologna-predictions-betting-tips-and-match-previews-20171222/"></span>
         <div class="team home" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="<?php the_field('team_1_image');?>" alt="">
            <h4 itemprop="name" class="team-name"><?php the_field('team_1');?></h4>
         </div>
         <div class="prev-meta">
            <p class="meta-text"> <span itemprop="startDate" content="2017-12-22 1513962000"><?php the_field('day');?><br> <span class="time"><?php the_field('time');?></span><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" class="stadium"><?php the_field('stadium');?></span> </span></p>
            <p class="preview-link">View Tip</p>
         </div>
         <div class="team away" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="<?php the_field('team_2_image');?>" alt="">
            <h4 itemprop="name" class="team-name"><?php the_field('team_2');?></h4>
         </div>
      </span>
   </a>
   <?php endwhile;?>
            </div>
            <div id="league-featured-articles"></div>
         </div>
         <!-- end ten col -->
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
      <!-- end grid -->
   </div>
</div>
<?php get_footer(); ?>