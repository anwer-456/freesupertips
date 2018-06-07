<?php 
/* Template Name: homepage */ 
get_header(); ?>
<!-- <section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section> -->
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
         <div class="cstt"><?php the_content();?></div>
         <div class="single-title"><a href="<?php the_permalink() ?>"><?php the_title();?></a></div>

          </div>
<?php endwhile;?>
</div>
                     <!-- <a href="http://www.freesupertips.co.uk/previews/sheffield-united-vs-bristol-city-predictions-betting-tips-and-match-previews-20171208/" title="Sheffield United vs Bristol City Predictions" class="home-banner home-banner-1" style="background-image:url(&#39;http://www.freesupertips.co.uk/wp-content/uploads/2017/12/PA-33976475.jpg&#39;);">
                        <div class="text-overlay">
                           <div class="home-banner-time">19:45</div>
                           <div class="red-title">
                              <div class="home-banner-title">Sheffield United vs Bristol City Predictions</div>
                           </div>
                        </div>
                     </a> -->
                     <!-- <a href="http://www.freesupertips.co.uk/previews/stuttgart-vs-bayer-leverkusen-predictions-betting-tips-and-match-previews-20171208/" title="Stuttgart vs Bayer Leverkusen Predictions" class="home-banner home-banner-2 home-box total-4" style="background-image:url(&#39;http://www.freesupertips.co.uk/wp-content/uploads/2017/12/PA-33999015-min-360x240.jpg&#39;);">
                        <div class="home-banner-time">19:30</div>
                        <div class="red-title">
                           <div class="home-banner-title">Stuttgart vs Bayer Leverkusen Predictions</div>
                        </div>
                     </a>
                     <a href="http://www.freesupertips.co.uk/previews/alaves-vs-las-palmas-predictions-betting-tips-and-match-previews-20171208/" title="Alaves vs Las Palmas Predictions" class="home-banner home-banner-3 home-box total-4" style="background-image:url(&#39;http://www.freesupertips.co.uk/wp-content/uploads/2017/12/PA-32567890-360x261.jpg&#39;);">
                        <div class="home-banner-time">20:00</div>
                        <div class="red-title">
                           <div class="home-banner-title">Alaves vs Las Palmas Predictions</div>
                        </div>
                     </a>
                     <a href="http://www.freesupertips.co.uk/previews/dundee-vs-aberdeen-predictions-betting-tips-and-match-previews-20171208/" title="Dundee vs Aberdeen Predictions" class="home-banner home-banner-4 home-box total-4" style="background-image:url(&#39;http://www.freesupertips.co.uk/wp-content/uploads/2017/01/RTSU0LN-360x233.jpg&#39;);">
                        <div class="home-banner-time">19:45</div>
                        <div class="red-title">
                           <div class="home-banner-title">Dundee vs Aberdeen Predictions</div>
                        </div>
                     </a>
                     <div style="clear:both;"></div>
                  </div> -->
                  
                      
          

          <div class="container">
            
            <div class="row" id="previews">
              <?php $args = array( 'post_type' => 'previews','category_name' => '3-columns','posts_per_page' => 3 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
          <div class="col-md-4">

         <div class="myimg"><?php the_post_thumbnail('full');?></div>
         <div class="time"><?php the_content();?></div>
         <div class="title"><a href="<?php the_permalink() ?>"><?php the_title();?></a></div>

          </div>
<?php endwhile;?>
</div>

</div>
    
      
         
            
              <!-- BEGIN FREE FOOTBALL TIPS -->
              <div class="ui horizontal divider"> 
                <i class="ui white custom football icon" style="height:28px !important;background-position: -85px 84px !important;"></i> Today's Free Football Tips</div>
                   <div class="ui list">
                     <div class="container">
                      <div class="row">
                    <?php $args = array( 'post_type' => 'tips', 'posts_per_page' => 6 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
        <!--  <div class="post-imag"><?php the_post_thumbnail('full');?></div>  -->
<!--  <div class="com-md-12">-->
  <!-- <span class="sporticon"></span>
         <div class="cst"><?php the_content();?></div>
         <div class="single-titl"><a href="<?php the_permalink() ?>"><?php the_title();?></a></div>  -->
         <!-- <a href="<?php the_permalink() ?>" title="Football Accumulator Tips" style="position:relative;padding: 8px 20px 8px 45px!important;text-align:left !important;"><span class="sporticon"><i class="ui red custom football icon"></i></span><div class="tiptop"><?php the_content();?></div><h4 class="ui header" style="margin:0;" title="Football Accumulator Tips"><?php the_title();?></h4></a> -->

         <a href="<?php the_permalink() ?>" title="Football Accumulator Tips" style="position:relative;padding: 8px 20px 8px 45px!important;text-align:left !important;">
         <div class="main-11">
          <div class="col-1" style="background-image: url(http://localhost/sirtips/wp-content/uploads/2017/12/1.png); background-size: 503px 144px; width: 50px!important; height: 50px!important; background-position: -100px 0px!important; margin-left: 0!important;margin-top: -18px;
    margin-bottom: 9px;">
          
          </div>
          <div class="col-2">
            <div class="tiptop"><?php the_content();?></div>
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
                     <!-- <a href="http://www.freesupertips.co.uk/accumulator-tips/" class="item tip_event" onclick="ga(‘send’, ‘event’, ‘Home Link’, ‘Tip Click’, ‘Win Accumulator’);" title="Football Accumulator Tips" style="position:relative; padding: 8px 20px 8px 45px!important; text-align:left !important;">
                        <span class="sporticon"><i class="ui red custom football icon"></i></span>
                        <div class="tiptop">Today | 19:00 | £10 returns £208.60</div>
                        <h4 class="ui header" style="margin:0;" title="Football Accumulator Tips">Friday Win Accumulator</h4>
                        <div class="link right"></div>
                     </a>
                     <a href="http://www.freesupertips.co.uk/both-teams-to-score-tips/" class="item tip_event" onclick="ga(‘send’, ‘event’, ‘Home Link’, ‘Tip Click’, ‘BTTS’);" title="Both Teams to Score Tips" style="position:relative; padding: 8px 20px 8px 45px!important; text-align:left !important;">
                        <span class="sporticon"><i class="ui red custom football icon"></i></span>
                        <div class="tiptop">Today | 19:00 | £10 returns £177.30</div>
                        <h4 class="ui header" style="margin:0;" title="Both Teams to Score Tips">Both Teams To Score Accumulator</h4>
                        <div class="link right"></div>
                     </a>
                     <a href="http://www.freesupertips.co.uk/both-teams-to-score-and-win-accumulator/" class="item tip_event" onclick="ga(‘send’, ‘event’, ‘Home Link’, ‘Tip Click’, ‘BTTSAWA’);" title="Both Teams to Score &amp; Win Tips" style="position:relative; padding: 8px 20px 8px 45px!important; text-align:left !important;">
                        <span class="sporticon"><i class="ui red custom football icon"></i></span>
                        <div class="tiptop">Today | 19:00 | £10 returns £337.50</div>
                        <h4 class="ui header" style="margin:0;" title="Both Teams to Score &amp; Win Tips">Both Teams To Score &amp; Win Treble</h4>
                        <div class="link right"></div>
                     </a>
                     <a href="http://www.freesupertips.co.uk/over-2-5-goals-betting-tips-and-predictions/" class="item tip_event" onclick="ga(‘send’, ‘event’, ‘Home Click’, ‘Tip Click’, ‘Match Goals Acca’);" title="Match Goals Accumulator" style="position:relative; padding: 8px 20px 8px 45px!important; text-align:left !important;">
                        <span class="sporticon"><i class="ui red custom football icon"></i></span>
                        <div class="tiptop">Today | 19:00 | £10 returns £225.60</div>
                        <h4 class="ui header" style="margin:0;" title="Match Goals Accumulator">Match Goals Accumulator</h4>
                        <div class="link right"></div>
                     </a>
                     <a href="http://www.freesupertips.co.uk/correct-score-double-tips/" class="item tip_event" onclick="ga(‘send’, ‘event’, ‘Home Click’, ‘Tip Click’, ‘Correct Score’);" title="Correct Score Tips" style="position:relative; padding: 8px 20px 8px 45px!important; text-align:left !important;">
                        <span class="sporticon"><i class="ui red custom football icon"></i></span>
                        <div class="tiptop">Today | 19:30 | £10 returns £810.00</div>
                        <h4 class="ui header" style="margin:0;" title="Correct Score Tips">Correct Score Double</h4>
                        <div class="link right"></div>
                     </a>
                     <a href="http://www.freesupertips.co.uk/bankroll-builder/" class="item tip_event" onclick="ga(‘send’, ‘event’, ‘Home Click’, ‘Tip Click’, ‘Bankroll’);" title="Bankroll Builder" style="position:relative; padding: 8px 20px 8px 45px!important; text-align:left !important;">
                        <span class="sporticon"><i class="ui red custom football icon"></i></span>
                        <div class="tiptop">Today | 19:45 | Daily tips to build your bankroll!</div>
                        <h4 class="ui header" style="margin:0;" title="Bankroll Builder">Bankroll Builder</h4>
                        <div class="link right"></div>
                     </a> -->
                 
              </div>
                  <div id="featured-previews">
   <h3>Todays Featured Matches</h3>
    
              <?php $args = array( 'post_type' => 'matches', 'posts_per_page' => 10 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
 <a itemscope="" itemtype="http://schema.org/SportsEvent" href="<a href="<?php the_permalink() ?>" class="featured-prev" title="<?php the_title();?>">
   <span itemprop="name" content="Chievo vs Bologna">
      <span itemprop="description" content="Chievo vs Bologna Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://www.freesupertips.co.uk/previews/chievo-vs-bologna-predictions-betting-tips-and-match-previews-20171222/"></span>
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

   <!-- <a itemscope="" itemtype="http://schema.org/SportsEvent" href="http://www.freesupertips.co.uk/previews/real-betis-vs-athletic-bilbao-predictions-betting-tips-and-match-previews-20171222/" class="featured-prev" title="Real Betis vs Athletic Bilbao Betting Tips and Predictions">
      <span itemprop="name" content="Real Betis vs Athletic Bilbao">
         <span itemprop="description" content="Real Betis vs Athletic Bilbao Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://www.freesupertips.co.uk/previews/real-betis-vs-athletic-bilbao-predictions-betting-tips-and-match-previews-20171222/"></span>
         <div class="team home" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Real Betis.png" alt="">
            <h4 itemprop="name" class="team-name">Real Betis</h4>
         </div>
         <div class="prev-meta">
            <p class="meta-text"> <span itemprop="startDate" content="2017-12-22 1513967400"> Today<br> <span class="time">18:30</span><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" class="stadium">Estadio Benito Villamarin</span> </span></p>
            <p class="preview-link">View Tip</p>
         </div>
         <div class="team away" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Athletic Bilbao.png" alt="">
            <h4 itemprop="name" class="team-name">Athletic Bilbao</h4>
         </div>
      </span>
   </a>
   <a itemscope="" itemtype="http://schema.org/SportsEvent" href="http://www.freesupertips.co.uk/previews/fleetwood-town-vs-gillingham-predictions-betting-tips-match-previews/" class="featured-prev" title="Fleetwood Town vs Gillingham Betting Tips and Predictions">
      <span itemprop="name" content="Fleetwood Town vs Gillingham">
         <span itemprop="description" content="Fleetwood Town vs Gillingham Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://www.freesupertips.co.uk/previews/fleetwood-town-vs-gillingham-predictions-betting-tips-match-previews/"></span>
         <div class="team home" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Fleetwood Town.png" alt="">
            <h4 itemprop="name" class="team-name">Fleetwood Town</h4>
         </div>
         <div class="prev-meta">
            <p class="meta-text"> <span itemprop="startDate" content="2017-12-22 1513969200"> Today<br> <span class="time">19:00</span><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" class="stadium">Highbury Stadium</span> </span></p>
            <p class="preview-link">View Tip</p>
         </div>
         <div class="team away" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Gillingham.png" alt="">
            <h4 itemprop="name" class="team-name">Gillingham</h4>
         </div>
      </span>
   </a>
   <a itemscope="" itemtype="http://schema.org/SportsEvent" href="http://www.freesupertips.co.uk/previews/ado-den-haag-vs-pec-zwolle-predictions-betting-tips-and-match-previews-20171222/" class="featured-prev" title="ADO Den Haag vs PEC Zwolle Betting Tips and Predictions">
      <span itemprop="name" content="ADO Den Haag vs PEC Zwolle">
         <span itemprop="description" content="ADO Den Haag vs PEC Zwolle Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://www.freesupertips.co.uk/previews/ado-den-haag-vs-pec-zwolle-predictions-betting-tips-and-match-previews-20171222/"></span>
         <div class="team home" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/ADO Den Haag.png" alt="">
            <h4 itemprop="name" class="team-name">ADO Den Haag</h4>
         </div>
         <div class="prev-meta">
            <p class="meta-text"> <span itemprop="startDate" content="2017-12-22 1513969200"> Today<br> <span class="time">19:00</span><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" class="stadium">Kyocera Stadion</span> </span></p>
            <p class="preview-link">View Tip</p>
         </div>
         <div class="team away" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/PEC Zwolle.png" alt="">
            <h4 itemprop="name" class="team-name">PEC Zwolle</h4>
         </div>
      </span>
   </a>
   <a itemscope="" itemtype="http://schema.org/SportsEvent" href="http://www.freesupertips.co.uk/previews/lugo-vs-rayo-vallecano-predictions-betting-tips-and-match-previews-20171222/" class="featured-prev" title="Lugo vs Rayo Vallecano Betting Tips and Predictions">
      <span itemprop="name" content="Lugo vs Rayo Vallecano">
         <span itemprop="description" content="Lugo vs Rayo Vallecano Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://www.freesupertips.co.uk/previews/lugo-vs-rayo-vallecano-predictions-betting-tips-and-match-previews-20171222/"></span>
         <div class="team home" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Lugo.png" alt="">
            <h4 itemprop="name" class="team-name">Lugo</h4>
         </div>
         <div class="prev-meta">
            <p class="meta-text"> <span itemprop="startDate" content="2017-12-22 1513969200"> Today<br> <span class="time">19:00</span><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" class="stadium">Estadio Anxo Carro</span> </span></p>
            <p class="preview-link">View Tip</p>
         </div>
         <div class="team away" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Rayo Vallecano.png" alt="">
            <h4 itemprop="name" class="team-name">Rayo Vallecano</h4>
         </div>
      </span>
   </a>
   <a itemscope="" itemtype="http://schema.org/SportsEvent" href="http://www.freesupertips.co.uk/previews/arsenal-vs-liverpool-predictions-betting-tips-and-match-previews-20171222/" class="featured-prev" title="Arsenal vs Liverpool Betting Tips and Predictions">
      <span itemprop="name" content="Arsenal vs Liverpool">
         <span itemprop="description" content="Arsenal vs Liverpool Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://www.freesupertips.co.uk/previews/arsenal-vs-liverpool-predictions-betting-tips-and-match-previews-20171222/"></span>
         <div class="team home" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Arsenal.png" alt="">
            <h4 itemprop="name" class="team-name">Arsenal</h4>
         </div>
         <div class="prev-meta">
            <p class="meta-text"> <span itemprop="startDate" content="2017-12-22 1513971900"> Today<br> <span class="time">19:45</span><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" class="stadium">Emirates Stadium</span> </span></p>
            <p class="preview-link">View Tip</p>
         </div>
         <div class="team away" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Liverpool.png" alt="">
            <h4 itemprop="name" class="team-name">Liverpool</h4>
         </div>
      </span>
   </a>
   <a itemscope="" itemtype="http://schema.org/SportsEvent" href="http://www.freesupertips.co.uk/previews/cagliari-vs-fiorentina-predictions-betting-tips-and-match-previews-20171222/" class="featured-prev" title="Cagliari vs Fiorentina Betting Tips and Predictions">
      <span itemprop="name" content="Cagliari vs Fiorentina">
         <span itemprop="description" content="Cagliari vs Fiorentina Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://www.freesupertips.co.uk/previews/cagliari-vs-fiorentina-predictions-betting-tips-and-match-previews-20171222/"></span>
         <div class="team home" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Cagliari.png" alt="">
            <h4 itemprop="name" class="team-name">Cagliari</h4>
         </div>
         <div class="prev-meta">
            <p class="meta-text"> <span itemprop="startDate" content="2017-12-22 1513971900"> Today<br> <span class="time">19:45</span><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" class="stadium">Sardegna Arena</span> </span></p>
            <p class="preview-link">View Tip</p>
         </div>
         <div class="team away" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Fiorentina.png" alt="">
            <h4 itemprop="name" class="team-name">Fiorentina</h4>
         </div>
      </span>
   </a>
   <a itemscope="" itemtype="http://schema.org/SportsEvent" href="http://www.freesupertips.co.uk/previews/coventry-vs-wycombe-wanderers-predictions-betting-tips-and-match-previews-20171222/" class="featured-prev" title="Coventry vs Wycombe Betting Tips and Predictions">
      <span itemprop="name" content="Coventry vs Wycombe">
         <span itemprop="description" content="Coventry vs Wycombe Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://www.freesupertips.co.uk/previews/coventry-vs-wycombe-wanderers-predictions-betting-tips-and-match-previews-20171222/"></span>
         <div class="team home" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Coventry.png" alt="">
            <h4 itemprop="name" class="team-name">Coventry</h4>
         </div>
         <div class="prev-meta">
            <p class="meta-text"> <span itemprop="startDate" content="2017-12-22 1513971900"> Today<br> <span class="time">19:45</span><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" class="stadium">Ricoh Arena</span> </span></p>
            <p class="preview-link">View Tip</p>
         </div>
         <div class="team away" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Wycombe.png" alt="">
            <h4 itemprop="name" class="team-name">Wycombe</h4>
         </div>
      </span>
   </a>
   <a itemscope="" itemtype="http://schema.org/SportsEvent" href="http://www.freesupertips.co.uk/previews/norwich-vs-brentford-predictions-betting-tips-and-match-previews-20171222/" class="featured-prev" title="Norwich vs Brentford Betting Tips and Predictions">
      <span itemprop="name" content="Norwich vs Brentford">
         <span itemprop="description" content="Norwich vs Brentford Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://www.freesupertips.co.uk/previews/norwich-vs-brentford-predictions-betting-tips-and-match-previews-20171222/"></span>
         <div class="team home" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Norwich.png" alt="">
            <h4 itemprop="name" class="team-name">Norwich</h4>
         </div>
         <div class="prev-meta">
            <p class="meta-text"> <span itemprop="startDate" content="2017-12-22 1513971900"> Today<br> <span class="time">19:45</span><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" class="stadium">Carrow Road</span> </span></p>
            <p class="preview-link">View Tip</p>
         </div>
         <div class="team away" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Brentford.png" alt="">
            <h4 itemprop="name" class="team-name">Brentford</h4>
         </div>
      </span>
   </a>
   <a itemscope="" itemtype="http://schema.org/SportsEvent" href="http://www.freesupertips.co.uk/previews/espanyol-vs-atletico-madrid-predictions-betting-tips-and-match-previews-20171222/" class="featured-prev" title="Espanyol vs Atletico Madrid Betting Tips and Predictions">
      <span itemprop="name" content="Espanyol vs Atletico Madrid">
         <span itemprop="description" content="Espanyol vs Atletico Madrid Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://www.freesupertips.co.uk/previews/espanyol-vs-atletico-madrid-predictions-betting-tips-and-match-previews-20171222/"></span>
         <div class="team home" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Espanyol.png" alt="">
            <h4 itemprop="name" class="team-name">Espanyol</h4>
         </div>
         <div class="prev-meta">
            <p class="meta-text"> <span itemprop="startDate" content="2017-12-22 1513974600"> Today<br> <span class="time">20:30</span><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" class="stadium">RCDE Stadium</span> </span></p>
            <p class="preview-link">View Tip</p>
         </div>
         <div class="team away" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
            <img itemprop="image" class="team-badge" src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/team/Atletico Madrid.png" alt="">
            <h4 itemprop="name" class="team-name">Atletico Madrid</h4>
         </div>
      </span>
   </a> -->
   <a href="/previews/" class="view-all-prevs">View All Match Tips</a>
</div>
   
                  <div class="mobile">
                     <div class="ui horizontal divider" id="freebets_section"> <i class="ui white custom cash icon"></i> Free Bets &amp; Offers</div>
                     <div id="freebet-sidebar">
                        <ul class="tabs showCasino">
                           <li class="tab-link current" data-tab="tab-1">Free Bets</li>
                           <li class="tab-link" data-tab="tab-2">Special Offers</li>
                           <li class="tab-link" data-tab="tab-3">Casino Offers</li>
                        </ul>
                        <div class="tab-1 tab-content current fb-sb-list">
                           <a class="fb-sb-wrapper bg-offset-betway side-bet-ext_event ppc-betway" title="Get a £30 Free Bet!" target="_blank" href="http://bit.ly/100BetwaySidebarFST">
                              <div class="fb-sb-head bg-betway">
                                 <h4>Get a £30 Free Bet!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">+ £10 Free Bet Every Week<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-william-hill side-bet-ext_event ppc-william-hill" title="Bet £10, Get £30 In Free Bets!" target="_blank" href="http://bit.ly/FSTSidebarWH30">
                              <div class="fb-sb-head bg-william-hill">
                                 <h4>Bet £10, Get £30 In Free Bets!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">+ Accumulator Insurance<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-betvictor side-bet-ext_event ppc-betvictor" title="Bet £10, Get £40 Free Bets!" target="_blank" href="http://bit.ly/FSTsidebar30">
                              <div class="fb-sb-head bg-betvictor">
                                 <h4>Bet £10, Get £40 Free Bets!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">+ Cash Out<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-genting side-bet-ext_event ppc-genting" title="Get a £25 Free Bet!" target="_blank" href="http://bit.ly/FSTSidebarGenting22">
                              <div class="fb-sb-head bg-genting">
                                 <h4>Get a £25 Free Bet!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">+ 10 Free Casino Spins!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-ladbrokes side-bet-ext_event ppc-ladbrokes" title="Get a Free Bet Up To £50!" target="_blank" href="http://bit.ly/FSTSidebarLads50">
                              <div class="fb-sb-head bg-ladbrokes">
                                 <h4>Get a Free Bet Up To £50!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">+ Daily Oddsboost<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-coral side-bet-ext_event ppc-coral" title="Bet £10, Get £30 In Free Bets!" target="_blank" href="http://bit.ly/CoralBet10Get30FSTSidebar2">
                              <div class="fb-sb-head bg-coral">
                                 <h4>Bet £10, Get £30 In Free Bets!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">+ Acca Insurance &amp; Cash Out<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-betfair side-bet-ext_event ppc-betfair" title="Get up to £100 in Free Bets!" target="_blank" href="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/FSTSidebarBF">
                              <div class="fb-sb-head bg-betfair">
                                 <h4>Get up to £100 in Free Bets!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">+ Weekly Winning Accumulator Bonuses<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-paddy-power side-bet-ext_event ppc-paddy-power" title="Get a £20 Risk Free First Bet!" target="_blank" href="http://bit.ly/PPSidebarNEW">
                              <div class="fb-sb-head bg-paddy-power">
                                 <h4>Get a £20 Risk Free First Bet!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">+ Money Back In Cash If It Loses<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-888 side-bet-ext_event ppc-888" title="Bet £10, Get £30 In Free Bets!" target="_blank" href="http://bit.ly/FSTSidebar88810get30">
                              <div class="fb-sb-head bg-888">
                                 <h4>Bet £10, Get £30 In Free Bets!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">+ £10 Casino bonus<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-betbright side-bet-ext_event ppc-betbright" title="Deposit £10, Play with £50!" target="_blank" href="http://bit.ly/BetbrightBet10Get50Side">
                              <div class="fb-sb-head bg-betbright">
                                 <h4>Deposit £10, Play with £50!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">New BetBright customers<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- end tab one -->
                        <div class="tab-2 tab-content fb-sb-list">
                           <a class="fb-sb-wrapper bg-offset-betfair side-bet-ext_event ppc-betfair" title="25/1 Chelsea to beat West Ham!" target="_blank" href="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/FSTSpecials22">
                              <div class="fb-sb-head bg-betfair">
                                 <h4>25/1 Chelsea to beat West Ham!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-coral side-bet-ext_event ppc-coral" title="28/1 Chelsea to beat West Ham!" target="_blank" href="http://bit.ly/CoralFootball4">
                              <div class="fb-sb-head bg-coral">
                                 <h4>28/1 Chelsea to beat West Ham!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-betfair side-bet-ext_event ppc-betfair" title="25/1 Arsenal to beat Southampton!" target="_blank" href="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/FSTSpecials19">
                              <div class="fb-sb-head bg-betfair">
                                 <h4>25/1 Arsenal to beat Southampton!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-ladbrokes side-bet-ext_event ppc-ladbrokes" title="25/1 Liverpool to beat Everton!" target="_blank" href="http://bit.ly/25to1LIVLadsFST">
                              <div class="fb-sb-head bg-ladbrokes">
                                 <h4>25/1 Liverpool to beat Everton!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-betfair side-bet-ext_event ppc-betfair" title="25/1 Liverpool to beat Everton!" target="_blank" href="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/FSTSpecials25">
                              <div class="fb-sb-head bg-betfair">
                                 <h4>25/1 Liverpool to beat Everton!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-coral side-bet-ext_event ppc-coral" title="25/1 A yellow card to be shown in Man Utd vs Man City!" target="_blank" href="http://bit.ly/CoralFootball1">
                              <div class="fb-sb-head bg-coral">
                                 <h4>25/1 A yellow card to be shown in Man Utd vs Man City!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-betfair side-bet-ext_event ppc-betfair" title="40/1 Man United vs 30/1 Man City!" target="_blank" href="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/FSTSpecials15">
                              <div class="fb-sb-head bg-betfair">
                                 <h4>40/1 Man United vs 30/1 Man City!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-betbright side-bet-ext_event ppc-betbright" title="The Ashes Cricket – Deposit £50. Play with £150!" target="_blank" href="http://bit.ly/d50p150BBFST">
                              <div class="fb-sb-head bg-betbright">
                                 <h4>The Ashes Cricket – Deposit £50. Play with £150!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">for New BetBright Customers!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-betway side-bet-ext_event ppc-betway" title="£10 In Free Bets Every Week" target="_blank" href="http://bit.ly/FreeBetClubFST">
                              <div class="fb-sb-head bg-betway">
                                 <h4>£10 In Free Bets Every Week</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">Opt in now to claim yours<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-betfair side-bet-ext_event ppc-betfair" title="20% Bonus Profit With Acca Edge" target="_blank" href="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/BetfairExistingFST">
                              <div class="fb-sb-head bg-betfair">
                                 <h4>20% Bonus Profit With Acca Edge</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">Applies to your first edged acca each week<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- end tab two -->
                        <div class="tab-3 tab-content fb-sb-list">
                           <a class="fb-sb-wrapper bg-offset-betway side-bet-ext_event ppc-betway" title="Up to £1000 Casino Welcome Bonus!" target="_blank" href="http://bit.ly/FSTBWcasino">
                              <div class="fb-sb-head bg-betway">
                                 <h4>Up to £1000 Casino Welcome Bonus!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">New Betway casino customers<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-ladbrokes-casino side-bet-ext_event ppc-ladbrokes-casino" title="£500 Bonus up to 100% Matched!" target="_blank" href="http://bit.ly/LadsCasinoSidebar">
                              <div class="fb-sb-head bg-ladbrokes-casino">
                                 <h4>£500 Bonus up to 100% Matched!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">New Ladbrokes casino customers<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-paddy-power-casino side-bet-ext_event ppc-paddy-power-casino" title="£500 Deposit Bonus + £10 Free bonus!" target="_blank" href="http://bit.ly/PPCasinoFST">
                              <div class="fb-sb-head bg-paddy-power-casino">
                                 <h4>£500 Deposit Bonus + £10 Free bonus!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">New Paddy Power casino customers<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-mr-green-casino side-bet-ext_event ppc-mr-green-casino" title="£100 Bonus + 420 Bonus Spins!" target="_blank" href="http://bit.ly/MrGreenFBSidebarFST">
                              <div class="fb-sb-head bg-mr-green-casino">
                                 <h4>£100 Bonus + 420 Bonus Spins!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">New Mr Green casino customers<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                           <a class="fb-sb-wrapper bg-offset-betfair-casino side-bet-ext_event ppc-betfair-casino" title="£100 Bonus up to 100% Matched!" target="_blank" href="http://bit.ly/BetfairCasinoFST2">
                              <div class="fb-sb-head bg-betfair-casino">
                                 <h4>£100 Bonus up to 100% Matched!</h4>
                              </div>
                              <div class="fb-sb-content">
                                 <div class="fb-sb-subhead">New Betfair casino customers<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                 <div class="fb-sb-button-wrapper">
                                    <div class="fb-sb-button">Claim Now</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- end tab three -->
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
                     <div class="followers-widget">
                        <a class="follow twitter" href="http://twitter.com/FootySuperTips" target="_blank"><span><strong>380,888</strong> Followers</span></a><a class="follow facebook" href="http://www.facebook.com/groups/freesupertips/" target="_blank"><span><strong>16,786</strong> Followers</span></a>
                        <div style="clear:both;"></div>
                     </div>
                     <div class="desktop"></div>
                  </div>

                  <!-- NFL TIPS -->
                  <div class="ui horizontal divider invis_clss">Today's Free NFL Tips</div>
<div class="ui list">
  <?php $args = array( 'post_type' => 'tips','category_name' => 'todays-free-basketball-tips','posts_per_page' => 3 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
   <a href="<?php the_permalink() ?>" class="item" style="position:relative; padding:8px 20px 8px 45px !important; text-align:left !important;"><div class="col-1" style="background-image: url(http://localhost/sirtips/wp-content/uploads/2017/12/1.png); background-size: 503px 144px; width: 50px!important; height: 50px!important; background-position: -350px 0px!important; margin-left: -45px;
    margin-bottom: 9px;"></div>
      <span class="sporticon"><i class="ui red custom americanfootball icon"></i></span>
      <div class="tiptop" id="nfl"><?php the_content();?></div>
      <h4 class="ui header" style="margin:0px !important;"><?php the_title();?></h4>
      <div class="link right"></div>
   </a>
 <?php endwhile;?>
</div>
                  <!-- <div class="ui horizontal divider invis_clss">Today's Free NFL Tips</div>
                  <div class="ui list">
                     <a href="http://www.freesupertips.co.uk/tips/super-bowl-bets-predictions-and-betting-tips/" class="item" style="position:relative; padding:8px 20px 8px 45px !important; text-align:left !important;">
                        <span class="sporticon"><i class="ui red custom americanfootball icon"></i></span>
                        <div class="tiptop">05/February | 23:30 | Preseason Picks</div>
                        <h4 class="ui header" style="margin:0px !important;">Super Bowl 52 Tips</h4>
                        <div class="link right"></div>
                     </a>
                  </div>
                  <div class="ui horizontal divider invis_clss">Today's Free Boxing Tips</div>
                  <div class="ui list">
                     <a href="http://www.freesupertips.co.uk/tips/james-degale-vs-caleb-truax-betting-tips-and-predictions/" class="item" style="position:relative; padding:8px 20px 8px 45px !important; text-align:left !important;">
                        <span class="sporticon"><i class="ui red custom boxing icon"></i></span>
                        <div class="tiptop">09/December | 22:00 | 13/10 Tip &amp; Undercard Picks</div>
                        <h4 class="ui header" style="margin:0px !important;">James DeGale vs Caleb Truax</h4>
                        <div class="link right"></div>
                     </a>
                  </div>
                  <div class="ui horizontal divider invis_clss">Today's Free Cricket Tips</div>
                  <div class="ui list">
                     <a href="http://www.freesupertips.co.uk/tips/ashes-2017-betting-tips-predictions/" class="item" style="position:relative; padding:8px 20px 8px 45px !important; text-align:left !important;">
                        <span class="sporticon"><i class="ui red custom cricket icon"></i></span>
                        <div class="tiptop">23/November | Inplay | Series Preview, Betting Tips &amp; Predictions</div>
                        <h4 class="ui header" style="margin:0px !important;">The Ashes 2017</h4>
                        <div class="link right"></div>
                     </a>
                  </div>
                  <div class="ui horizontal divider invis_clss">Today's Free Snooker Tips</div>
                  <div class="ui list">
                     <a href="http://www.freesupertips.co.uk/tips/2017-snooker-uk-championship/" class="item" style="position:relative; padding:8px 20px 8px 45px !important; text-align:left !important;">
                        <span class="sporticon"><i class="ui red custom snooker icon"></i></span>
                        <div class="tiptop">28/November | Inplay | 10/3, 4/1 and 40/1 Tips!</div>
                        <h4 class="ui header" style="margin:0px !important;">2017 Snooker UK Championship</h4>
                        <div class="link right"></div>
                     </a>
                  </div> -->
                  <div class="mobile">
                     
                  </div>
                  <!-- END PLACEHOLDER GENERATION -->
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
                           <a class="ppc-betfair home-freebets in-content-freebet-table" title="25/1  Chelsea to beat West Ham!" target="_blank" href="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/FSTSpecials22">
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
                           <a class="ppc-betfair home-freebets in-content-freebet-table" title="25/1  Arsenal to beat Southampton!" target="_blank" href="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/FSTSpecials19">
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
                           <a class="ppc-betfair home-freebets in-content-freebet-table" title="25/1  Liverpool to beat Everton!" target="_blank" href="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/FSTSpecials25">
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
                  <!-- Free FootBall Tips -->
                  <div class="ui horizontal divider"><i class="ui white custom vs icon"></i> Today's Football Previews</div>
                  <div class="ui list"> 
                    <?php $args = array( 'post_type' => 'previews','category_name' =>'today-football-previews','posts_per_page' => 10 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
                    <a itemscope="" itemtype="http://schema.org/SportsEvent" class="ind-prev-holder" href="http://www.freesupertips.co.uk/previews/fleetwood-town-vs-gillingham-predictions-betting-tips-match-previews/" title="<?php the_title();?>"><div class="ind-prev-content" itemprop="name" content="Fleetwood Town vs Gillingham"> <span itemprop="description" content="Fleetwood Town vs Gillingham Betting Tips, Predictions and Match Preview"></span> <span itemprop="url" content="http://www.freesupertips.co.uk/previews/fleetwood-town-vs-gillingham-predictions-betting-tips-match-previews/"></span><div class="prev-team" itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam"><div class="prev-team-badge"><img itemprop="image" src="<?php the_field('team_1_image');?>" alt=""></div><div class="prev-team-name" itemprop="name"><?php the_field('team_1');?></div></div><div class="prev-info"> <span itemprop="startDate" content="2017-12-22 19:00"> <strong><?php the_field('time');?></strong><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Highbury Stadium"></span> <?php the_field('stadium');?> </span><div class="prev-mob-btn">View Tip</div></div><div class="prev-team" itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam"><div class="prev-team-badge"><img itemprop="image" src="<?php the_field('team_2_image');?>" alt=""></div><div class="prev-team-name" itemprop="name"><?php the_field('team_2');?></div></div></div> </a> 
                  <?php endwhile;?>
                     <a href="/previews/" class="view-all-prevs">More Football Previews<div class="right link placeholder"></div></a></div>
                  <!-- End -->
                  <div class="ui horizontal divider"> <i class="ui white custom star icon"></i> Other Free Tips</div>
                  <div class="ui list"> <a href="http://www.freesupertips.co.uk/freetips/free-golf-betting-tips/" class="item" style="position:relative; padding: 10px !important;" title="Free Golf Betting Tips"><span class="sporticon" style="top: -2px !important;"><i class="ui red custom golf icon"></i></span><h4 class="ui header" style="padding:2px 20px 0px 45px !important; text-align: left !important;">Golf Tips and Previews</h4><div class="link right placeholder"></div></a> <a href="http://www.freesupertips.co.uk/freetips/nfl-tips/" class="item" style="position:relative; padding: 10px !important;" title="Free NFL Betting Tips"><span class="sporticon" style="top: -2px !important;"><i class="ui red custom american football icon"></i></span><h4 class="ui header" style="padding:2px 20px 0px 45px !important; text-align: left !important;"> American Football Tips and Previews</h4><div class="link right placeholder"></div></a> <a href="http://www.freesupertips.co.uk/freetips/ice-hockey-betting-tips-nhl/" class="item" style="position:relative; padding: 10px !important;" title="Free NHL Betting Tips"><span class="sporticon" style="top: -2px !important;"><i class="ui red custom nhl icon"></i></span><h4 class="ui header" style="padding:2px 20px 0px 45px !important; text-align: left !important;"> Ice Hockey NHL Tips and Previews</h4><div class="link right placeholder"></div></a> <a href="http://www.freesupertips.co.uk/freetips/baseball-betting-tips-mlb/" class="item" style="position:relative; padding: 10px !important;" title="Free MLB baseball Betting Tips"><span class="sporticon" style="top: -2px !important;"><i class="ui red custom baseball icon"></i></span><h4 class="ui header" style="padding:2px 20px 0px 45px !important; text-align: left !important;"> Baseball MLB Tips and Previews</h4><div class="link right placeholder"></div></a> <a href="http://www.freesupertips.co.uk/leagues/europa-league/" class="item" style="position:relative; padding: 10px !important;" title="Free UEFA  Europa League Betting Tips"><span class="sporticon" style="top: -2px !important;"><i class="ui red custom football icon"></i></span><h4 class="ui header" style="padding:2px 20px 0px 45px !important; text-align: left !important;"> Europa League Tips and Previews</h4><div class="link right placeholder"></div></a> <a href="http://www.freesupertips.co.uk/leagues/uefa-champions-league/" class="item" style="position:relative; padding: 10px !important;" title="Free Champions League Betting Tips"><span class="sporticon" style="top: -2px !important;"><i class="ui red custom football icon"></i></span><h4 class="ui header" style="padding:2px 20px 0px 45px !important; text-align: left !important;"> Champions League Tips and Previews</h4><div class="link right placeholder"></div></a> <!--<a href="http://www.freesupertips.co.uk/freetips/euro-2016/" class="item" style="position:relative; padding: 10px !important;" title="Free Euro 2016 Betting Tips"><span class="sporticon" style="top: -2px !important;"><i class="ui red custom football icon"></i></span><h4 class="ui header" style="padding:2px 20px 0px 45px !important; text-align: left !important;"> Euro 2016 Tips and Previews</h4><div class="link right placeholder"></div></a>--> <a href="http://www.freesupertips.co.uk/freetips/basketball-betting-tips-nba/" class="item" style="position:relative; padding: 10px !important;" title="Free NBA Basketball Tips"><span class="sporticon" style="top: -2px !important;"><i class="ui red custom basketball icon"></i></span><h4 class="ui header" style="padding:2px 20px 0px 45px !important; text-align: left !important;">NBA Basketball Tips and Previews</h4><div class="link right placeholder"></div></a></div>
                  <div class="desktop" style="margin:1rem 0;">
                     <!-- content on desktop -->
                     <div class="ui horizontal divider"><i class="ui white custom info icon"></i> More Info</div>
                     <div class="fst segment blog content">
                        <h1>The Home of Free Sports Betting Tips</h1>
                        <h2>Welcome to Free Super Tips</h2>
                        <p>Free Super Tips is&nbsp;the home of free sports betting tips.&nbsp;We are committed to&nbsp;<a href="http://www.freesupertips.co.uk/responsible-gambling/">responsible gambling</a>&nbsp;and have a number of ways to help you stay in control and keep gambling fun.</p>
                        <p>Our experienced punters have been bashing bookies and finding value in betting for years, and we want to let you in on the secret. Whether you’re a seasoned stat-loving sports fan that’s addicted to the analytics, or a passionate punter looking for that perfect accumulator, we can help.</p>
                        <h2>The best bets for when Saturday comes</h2>
                        <p>Sick of losing money at the bookies? Combining in-depth statistical analysis with an understanding of football leagues across the world, our punters provide you with winners – boosting your balance <em>and</em> giving you the bragging rights down the pub. You can also grab yourself one of our <a href="http://www.freesupertips.co.uk/free-bets/">free bets</a> to follow our football predictions risk free!</p>
                        <p>From <a href="http://www.freesupertips.co.uk/accumulator-tips/">football accumulator tips</a>, BTTS bets and daily doubles to goalscorer tips and our famous £10 to £1,000 challenge, we cover a range of markets to find you the best value. And our detailed <a href="http://www.freesupertips.co.uk/previews/">match preview</a> pages mean that you don’t have to <em>just</em> take our word for it.</p>
                        <p>Our specialists also have <a href="http://www.freesupertips.co.uk/leagues/premier-league/">Premier League predictions</a>, <a href="http://www.freesupertips.co.uk/freetips/champions-league/">Champions League betting tips</a> and <a href="http://www.freesupertips.co.uk/freetips/uefa-europa-league-betting-tips/">Europa League betting tips</a>&nbsp;so we have you covered whatever the day of the week.</p>
                        <p><img class="alignnone size-full wp-image-43050" src="./Free Sports Betting Tips &amp; Free Bets, Football Predictions1_files/free-sports-betting-tips-1.jpg" alt="sports tips" width="1000" height="434" srcset="http://www.freesupertips.co.uk/wp-content/uploads/2015/03/free-sports-betting-tips-1.jpg 1000w, http://www.freesupertips.co.uk/wp-content/uploads/2015/03/free-sports-betting-tips-1-360x156.jpg 360w, http://www.freesupertips.co.uk/wp-content/uploads/2015/03/free-sports-betting-tips-1-768x333.jpg 768w, http://www.freesupertips.co.uk/wp-content/uploads/2015/03/free-sports-betting-tips-1-1024x444.jpg 1024w" sizes="(max-width: 1000px) 100vw, 1000px"></p>
                        <p>Check out our <strong><a href="http://www.freesupertips.co.uk/free-football-betting-tips/">free football betting tips</a></strong> page for the latest, most lucrative offers from Britain’s biggest bookies.</p>
                        <h2>We don’t do just football</h2>
                        <p>Here at Free Super Tips we’re a broad church. We also provide:</p>
                        <ul>
                           <li style="text-align: left;"><strong><a href="http://www.freesupertips.co.uk/leagues/premier-league/">Premier League Predictions</a> –&nbsp;</strong>weekly analysis and betting tips for every premier league game including accumulators and match previews.</li>
                           <li style="text-align: left;"><strong><a href="http://www.freesupertips.co.uk/freetips/basketball-betting-tips-nba/">NBA predictions and tips</a>&nbsp;</strong>– previewing and tipping all NBA regular season, playoff and championship games shown on UK television</li>
                           <li style="text-align: left;"><strong><a href="http://www.freesupertips.co.uk/freetips/baseball-betting-tips-mlb/">MLB picks and tips</a></strong>&nbsp;– daily analysis and accumulator betting tips for all baseball fans</li>
                           <li style="text-align: left;"><strong><a href="http://www.freesupertips.co.uk/freetips/american-football-betting-tips-nfl/">NFL predictions and tips</a> </strong>– weekly analysis of all NFL games including ones live on&nbsp;UK television&nbsp;and <a href="http://www.freesupertips.co.uk/freetips/american-football-betting-tips-nfl/">Super Bowl betting tips</a></li>
                           <li style="text-align: left;"><strong><a href="http://www.freesupertips.co.uk/freetips/ice-hockey-betting-tips-nhl/">NHL picks and betting tips</a></strong>&nbsp;– daily analysis and betting tips for all NHL regular season, playoff and Stanley cup games.</li>
                           <li style="text-align: left;"><strong><a href="http://www.freesupertips.co.uk/freetips/free-darts-betting-tips/">Darts tips</a>&nbsp;–&nbsp;</strong>we have tips for The William Hill PDC Darts Championships tournament including outright winner, each way value, most 180’s and more.</li>
                           <li style="text-align: left;"><strong><a href="http://www.freesupertips.co.uk/freetips/free-golf-betting-tips/">Golf betting tips</a>&nbsp;</strong>– we provide tips for all the latest Golf Tournaments with expert analysis and previews.</li>
                        </ul>
                        <p>Take a look at our <a href="http://www.freesupertips.co.uk/blog/">betting blog</a>, where we preview up and coming games, analyse trends in the market – while enjoying some of the best banter that the football world has to offer.</p>
                        <p>Or follow us on Twitter <a href="https://twitter.com/FootySuperTips" target="_blank" rel="no folloW noopener noreferrer">@FootySuperTips</a> or <a href="https://www.facebook.com/Football.Super.Tips?ref=nf" target="_blank" rel="no folloW noopener noreferrer">Facebook</a> and join our community of like-minded sports bettors.</p>
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
                     
                  


               <div class="mobile">
                  <!-- content on mobile -->
                  <div class="ui horizontal divider"><i class="ui white custom info icon"></i> More Info</div>
                 
                  <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul>
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

               </div>
            </div>
            <!-- end grid -->
         </div>
      </div>
      <iframe id="sumome-jquery-iframe" title="Sumo Hidden Content" style="display: none;" src="./Free Sports Betting Tips &amp; Free Bets, Football Predictions1_files/saved_resource(1).html"></iframe>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>