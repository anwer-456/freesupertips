<?php error_reporting(0);?>
<?php
   // Template Name: Previews
   ?>
<?php get_header(); ?>
<div class="wrapper" id="to-wrapper">
<!-- remove comment to run takeover -->
<div class="inner-wrapper" id="content-container">
   <div class="ui stackable grid" id="content">
      <div class="ten wide column">
         <!-- <script src="http://stagingonline.net/projects/freesupertips/wp-content/themes/freesupertips/assets/js/jquery.touchSwipe.min.js"></script> --> <script type="text/javascript">$( document ).ready(function() {
            $("#calendar .left").click(function() {
              var theoffset = $("#calendar #days").css("margin-left");
              var theoffset = parseInt(theoffset);
              var minleft = -800;
            
              if (theoffset < minleft) {
                $("#calendar #days").animate({"margin-left":"+=100px"},"fast");
              } else {
                //alert("offset="+theoffset+" and the min is "+minleft);
              }
            });
            $("#calendar .right").click(function() {
                var theoffset = $("#calendar #days").css("margin-left");
              var theoffset = parseInt(theoffset);
              var maxleft = -1600;
              if (theoffset > maxleft) {
                $("#calendar #days").animate({"margin-left":"-=100px"},"fast");
              } else {
                //alert("offset="+theoffset+" and the max is "+maxleft);
              }
            });
            });
         </script> 
         <div id="calendar">
             <div id="days"> <?php 
         //Author : Anwar khan
         //Date : 2018-01-12
         
         //Get date only of current year and will next year's as go through
        $list=array();
         //Get current year
        $year = date('Y');
         //Get current month
        $month = date('m');
        //Loop through all days and store in array
        for($d=1; $d<=30; $d++)
        {
          $time=mktime(12, 0, 0, $month, $d, $year);          
          if (date('m', $time)==$month)       
          $list[] = date('Y-m-d', $time);
        }
         // loop through array to display current month days
        foreach ($list as &$value) {
          //Again to formate the date
          $date = date_create($value);
          //echo date_format($date,"Y");
          $year = date_format($date,"Y-m-d");
          $dayName = date_format($date,"D");
          $day = date_format($date,"d");
          //Finally display the organized data
          echo '<a href="?date='.$year.'" class="item">'.$dayName.'<span>'.$day.'<span></a>';
        }
             ?> 
       </div>
            <a class="move left"></a> <a class="move right"></a>
         </div>
         

         <div class="ui grid">
            <div class="ui sixteen wide column">
               <div id="spaceforfilter"></div>
               <div class="title_h1">
                  <h1><?php echo $_GET['date'];?>&nbsp;Football Previews</h1>
               </div>
               <div class="fb-sb-wrapper in-content bg-offset-betway">
                  <div class="fb-sb-head bg-betway">
                     <h4> Get a £30 Free Bet!</h4>
                  </div>
                  <div class="fb-sb-content">
                     <div class="fb-sb-subhead">+ £10 Free Bet Every Week<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                     <div class="fb-sb-button-wrapper"> <a class="fb-sb-button ppc-betway advert_event" title=" Get a £30 Free Bet!" target="_blank" href="http://bit.ly/BetwayTopBannerFST">Claim Now</a></div>
                  </div>
               </div>
                <div id="featured-previews">
            <!-- Todays Featured Matches -->
<div id="featured-previews">
   <h3>Todays Featured Matches</h3>
   <?php $acb= $_GET['date'] ?>
   <?php  $current_day = explode('-',$_GET['date']);
   $today = date('j');
    //$today_d = explode('-',$today);
   ?>
   <?php if($acb!='') { ?>
   <?php $args = array( 'post_type' => 'matches',
    'date_query' => array(
        array(
          'year'  => $current_day[0],
          'month' => $current_day[1],
          'day'   => $current_day[2],
        ),
      ),

 );
 }
 else { $args = array( 'post_type' => 'matches','day'=>$today
    // 'date_query' => array(
    //     array(
    //       'year'  => $today_d[0],
    //       'month' => $today_d[1],
    //       'day'   => $today_d[2],
    //     ),
    //   ),

 );
}
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      ?>  
   <a itemscope="" itemtype="http://schema.org/SportsEvent" href=<?php the_permalink() ?> class="featured-prev" title="<?php the_title();?>">
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
</div>
               <script>$(document).ready(function() {
                  $('.toggleLeague').click(function() {
                    $(this).toggleClass('closed');
                    var leagueID = $(this).attr('id');
                    $('#toggle-'+leagueID).slideToggle();
                  });
                  });
               </script> <script type="text/javascript">$( document ).ready(function() {
                  $('.ui.floating.labeled.black.fluid.search.button').click(function() {
                    $('#leaguedropdown').slideToggle();
                  });
                  });
               </script> 
               <div class="mobile"></div>
               <!-- page seo text --<div class="fst ui segment"></div> !-- end seo text -->
            </div>
            <!-- end sixteen column -->
         </div>
         <!-- end grid -->
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
<?php get_footer(); ?>