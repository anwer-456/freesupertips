<?php 
/* Template Name: Homepage */ 
get_header(); ?>
<!-- Single Preveiws Post -->
<div class="wrapper" id="to-wrapper">
<!-- remove comment to run takeover -->
<div class="inner-wrapper" id="content-container">
<div class="ui stackable grid" id="content">
<div class="ten wide column">
<div id="home-banner-wrapper">
<div class="container">
<div class="row" id="previews">
   <?php $args = array( 'post_type' => 'previews','category_name' => 'single','posts_per_page' => 1 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      ?>  
   <div class="col-md-12">
      <div class="post-image"><?php the_post_thumbnail('full');?></div>
      <div class="cstt"><?php the_field('time');?></div>
      <div class="single-title"><a href="<?php the_permalink() ?>"><?php the_title();?></a></div>
   </div>
   <?php endwhile;?>
</div>
<!-- End Preveiws -->

<!-- 3 Columns  -->
<div class="container">
   <div class="row" id="previews">
      <?php $args = array( 'post_type' => 'previews','category_name' => '3-columns','posts_per_page' => 3 );
         $loop = new WP_Query( $args );
         while ( $loop->have_posts() ) : $loop->the_post();
         ?>  
      <div class="col-md-4">
         <div class="myimg"><?php the_post_thumbnail('full');?></div>
         <div class="time"><?php the_field('time');?></div>
         <div class="title"><a href="<?php the_permalink() ?>"><?php the_title();?></a></div>
      </div>
      <?php endwhile;?>
   </div>
</div>
<!-- End 3 Columns -->

<!-- BEGIN FREE FOOTBALL TIPS -->
<div class="ui horizontal divider"> 
   <i class="ui white custom football icon" style="height:28px !important;background-position: -85px 84px !important;"></i> Today's Free Football Tips
</div>
<div class="ui list">
   <div class="container">
      <div class="row">
         <?php $args = array( 'post_type' => 'tips', 'category_name'=>'todays-free-basketball-tips','posts_per_page' => 6 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>  
         <a href="<?php the_permalink() ?>" title="Football Accumulator Tips" style="position:relative;padding: 8px 20px 8px 45px!important;text-align:left !important;">
            <div class="main-11">
               <div class="col-1" style="background-image: url(http://stagingonline.net/projects/freesupertips/wp-content/uploads/2017/12/1.png); background-size: 503px 144px; width: 50px!important; height: 50px!important; background-position: -100px 0px!important; margin-left: 0!important;margin-top: -18px;
                  margin-bottom: 9px;">
               </div>
               <div class="col-2">
                  <div class="tiptop"><?php the_field('tip_subtitle');?></div>
                  <h4 class="ui header" style="margin:0;" title="Football Accumulator Tips"><?php the_title();?></h4>
                  <div class="link right"></div>
               </div>
               <hr/>
            </div>
         </a>
         <?php endwhile;?>
      </div>
   </div>
</div>
</div>
</div>
<!-- End -->

<!-- Todays Featured Matches -->
<div id="featured-previews">
   <h3>Todays Featured Matches</h3>
   <?php $args = array( 'post_type' => 'matches', 'posts_per_page' => 10 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      ?>  
   <a itemscope="" itemtype="http://schema.org/SportsEvent" href="<?php the_permalink() ?>" class="featured-prev" title="<?php the_title();?>">
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
   <a href="/previews/" class="view-all-prevs">View All Match Tips</a>
</div>
<!-- End -->
                   <!-- Free Bets & Offers -->
                  
                  <!-- End -->

                  <!-- NFL TIPS -->
                  <div class="ui horizontal divider invis_clss">Today's Free NFL Tips</div>
<div class="ui list">
  <?php $args = array( 'post_type' => 'tips','category_name' => 'todays-free-nfl-tips','posts_per_page' => 3 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
   <a href="<?php the_permalink() ?>" class="item" style="position:relative; padding:8px 20px 8px 45px !important; text-align:left !important;"><div class="col-1" style="background-image: url(http://stagingonline.net/projects/freesupertips/wp-content/uploads/2017/12/1.png); background-size: 503px 144px; width: 50px!important; height: 50px!important; background-position: -350px 0px!important; margin-left: -45px;
    margin-bottom: 9px;"></div>
      <span class="sporticon"><i class="ui red custom americanfootball icon"></i></span>
      <div class="tiptop" id="nfl"><?php the_field('tip_subtitle');?></div>
      <h4 class="ui header" style="margin:0px !important;"><?php the_title();?></h4>
      <div class="link right"></div>
   </a>
 <?php endwhile;?>
</div>
                  <!--  -->
                  <div class="mobile">
                     
                  </div>
                  <!-- END PLACEHOLDER GENERATION -->

                  <!--Today's Free Bets & Special Offers -->
                  <div class="desktop">
                     <div class="ui horizontal divider invis_clss">Today's Free Bets &amp; Special Offers</div>
                     <div class="ui list todays-fb">
                        <div class="home-bet-wrapper bg-offset-coral">
                           <a class="ppc-coral home-freebets in-content-freebet-table" title="28/1  Chelsea to beat West Ham!" target="_blank" href="http://bit.ly/CoralFootball4">
                              <div class="home-freebets-head bg-coral">
                                 <h4>28/1  Chelsea to beat West Ham!</h4>
                              </div>
                              <div class="home-freebets-content">
                                 <div class="home-freebets-text">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="home-freebets-button-wrapper">
                                    <div class="home-freebets-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="home-bet-wrapper bg-offset-betfair">
                           <a class="ppc-betfair home-freebets in-content-freebet-table" title="25/1  Chelsea to beat West Ham!" target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?ru=http://bit.ly/FSTSpecials22">
                              <div class="home-freebets-head bg-betfair">
                                 <h4>25/1  Chelsea to beat West Ham!</h4>
                              </div>
                              <div class="home-freebets-content">
                                 <div class="home-freebets-text">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="home-freebets-button-wrapper">
                                    <div class="home-freebets-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="home-bet-wrapper bg-offset-betfair">
                           <a class="ppc-betfair home-freebets in-content-freebet-table" title="25/1  Arsenal to beat Southampton!" target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?ru=http://bit.ly/FSTSpecials19">
                              <div class="home-freebets-head bg-betfair">
                                 <h4>25/1  Arsenal to beat Southampton!</h4>
                              </div>
                              <div class="home-freebets-content">
                                 <div class="home-freebets-text">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="home-freebets-button-wrapper">
                                    <div class="home-freebets-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="home-bet-wrapper bg-offset-ladbrokes">
                           <a class="ppc-ladbrokes home-freebets in-content-freebet-table" title="25/1  Liverpool to beat Everton!" target="_blank" href="http://bit.ly/25to1LIVLadsFST">
                              <div class="home-freebets-head bg-ladbrokes">
                                 <h4>25/1  Liverpool to beat Everton!</h4>
                              </div>
                              <div class="home-freebets-content">
                                 <div class="home-freebets-text">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="home-freebets-button-wrapper">
                                    <div class="home-freebets-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="home-bet-wrapper bg-offset-betfair">
                           <a class="ppc-betfair home-freebets in-content-freebet-table" title="25/1  Liverpool to beat Everton!" target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?ru=http://bit.ly/FSTSpecials25">
                              <div class="home-freebets-head bg-betfair">
                                 <h4>25/1  Liverpool to beat Everton!</h4>
                              </div>
                              <div class="home-freebets-content">
                                 <div class="home-freebets-text">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="home-freebets-button-wrapper">
                                    <div class="home-freebets-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- End -->

                  <!-- Free FootBall Tips -->
                  <div class="ui horizontal divider"><i class="ui white custom vs icon"></i> Today's Football Previews</div>
                  <div class="ui list"> 
                    <?php $args = array( 'post_type' => 'previews','category_name' =>'today-football-previews','posts_per_page' => 10 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
                    <a itemscope="" itemtype="http://schema.org/SportsEvent" class="ind-prev-holder" href="http://stagingonline.net/projects/freesupertips/previews/fleetwood-town-vs-gillingham-predictions-betting-tips-match-previews/" title="<?php the_title();?>"><div class="ind-prev-content" itemprop="name" content="Fleetwood Town vs Gillingham"> <span itemprop="description" content="Fleetwood Town vs Gillingham Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://stagingonline.net/projects/freesupertips/previews/fleetwood-town-vs-gillingham-predictions-betting-tips-match-previews/"></span><div class="prev-team" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam"><div class="prev-team-badge"><img itemprop="image" src="<?php the_field('team_1_image');?>" alt=""></div><div class="prev-team-name" itemprop="name"><?php the_field('team_1');?></div></div><div class="prev-info"> <span itemprop="startDate" content="2017-12-22 19:00"> <strong><?php the_field('time');?></strong><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Highbury Stadium"></span> <?php the_field('stadium');?> </span><div class="prev-mob-btn">View Tip</div></div><div class="prev-team" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam"><div class="prev-team-badge"><img itemprop="image" src="<?php the_field('team_2_image');?>" alt=""></div><div class="prev-team-name" itemprop="name"><?php the_field('team_2');?></div></div></div> </a> 
                  <?php endwhile;?>
                     <a href="/previews/" class="view-all-prevs">More Football Previews<div class="right link placeholder"></div></a></div>
                  <!-- End -->
                  <div class="ui horizontal divider"> <i class="ui white custom star icon"></i> Other Free Tips</div>
                  <div class="ui list"> 

                    <?php $args = array( 'post_type' => 'other_tips','posts_per_page' => 6 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
   <a href="<?php the_permalink() ?>" class="item" style="position:relative; padding:8px 20px 8px 45px !important; text-align:left !important;"><div class="col-1" style="background-image: url(http://stagingonline.net/projects/freesupertips/wp-content/uploads/2017/12/1.png); background-size: 503px 144px; width: 50px!important; height: 50px!important; background-position: -350px 0px!important; margin-left: -45px;
    margin-bottom: -36px;"></div>
      <span class="sporticon"><i class="ui red custom americanfootball icon"></i></span>
      <!-- <div class="tiptop" id="nfl"><?php the_content();?></div> -->
      <h4 class="ui header" style="margin:0px !important;"><?php the_title();?></h4>
      <div class="link right"></div>
   </a>
 <?php endwhile;?>
</div>
<!-- End -->




                  <!--  More Info -->
                  <div class="desktop" style="margin:1rem 0;">
                     <!-- content on desktop -->
                     <div class="ui horizontal divider"><i class="ui white custom info icon"></i> More Info</div>
                     <div class="fst segment blog content">
                      <?php $args = array( 'post_type' => 'post','posts_per_page' => 1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
          <h1><?php the_title();?></h1>
   <?php the_content();?>
 <?php endwhile;?>
                       
                     </div>
                  </div>
               </div>
               <!-- end ten wide column -->
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