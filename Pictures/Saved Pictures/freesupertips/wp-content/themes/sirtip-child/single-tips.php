<?php
   /*
   
    * Template Name: Tips
   
    * Template Post Type: Custom Post Type Tips
   
    */
   
   ?>
<?php get_header(); ?>
<div class="wrapper" id="to-wrapper">
<!-- remove comment to run takeover -->
<div class="inner-wrapper" id="content-container">
   <div class="ui stackable grid" id="content">
      <div class="ten wide column">
        <!--  <div class="ui red icon message">
            <i class="checkered flag icon"></i>
            <div class="content">
               <div class="header"> This Tip Has Expired</div>
               <p>Follow us on facebook and twitter to get daily tips and free bets</p>
            </div>
         </div> -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <div itemscope="" itemtype="http://schema.org/Product" class="fst red segment tip-content">
            <h1 itemprop="name" class="ui header" style="margin-top:0px;"><?php the_title();?></h1>
            <div itemprop="description" style="color:#333; padding:0 12px;">
               <?php the_content();?>
            </div>
         </div>
              <?php endwhile; endif; ?>
         <!--<div class="fst red segment tip-content" style="padding:0 !important;"></div>-->
         <div class="ui horizontal divider invis_clss">Today's Football Free Bets &amp; Special Offers</div>
         <div class="ui list todays-fb">
            <div class="home-bet-wrapper bg-offset-888">
               <a class="ppc-888 home-freebets in-content-freebet-table" title=" Bet £10, Get £30 In Free Bets + £10 Free Bet for Arsenal vs Chelsea!" target="_blank" href="http://bit.ly/88810to30ARSCHEFST">
                  <div class="home-freebets-head bg-888">
                     <h4> Bet £10, Get £30 In Free Bets + £10 Free Bet for Arsenal vs Chelsea!</h4>
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
               <a class="ppc-betfair home-freebets in-content-freebet-table" title="40/1  Arsenal to win or 30/1 Chelsea to win!" target="_blank" href="/freebet-redirect/?ru=http://bit.ly/FSTSpecials12">
                  <div class="home-freebets-head bg-betfair">
                     <h4>40/1  Arsenal to win or 30/1 Chelsea to win!</h4>
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
               <a class="ppc-betfair home-freebets in-content-freebet-table" title=" Get up to £100 in Free Bets!" target="_blank" href="/freebet-redirect/?ru=http://bit.ly/FSTMatchPreviewBF">
                  <div class="home-freebets-head bg-betfair">
                     <h4> Get up to £100 in Free Bets!</h4>
                  </div>
                  <div class="home-freebets-content">
                     <div class="home-freebets-text">+ Acca Insurance, Cash Out &amp; Acca Bonuses<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                     <div class="home-freebets-button-wrapper">
                        <div class="home-freebets-button">Claim Now</div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="home-bet-wrapper bg-offset-betvictor">
               <a class="ppc-betvictor home-freebets in-content-freebet-table" title=" Bet £10, Get £40 Free Bets!" target="_blank" href="http://bit.ly/FSTContentBV30">
                  <div class="home-freebets-head bg-betvictor">
                     <h4> Bet £10, Get £40 Free Bets!</h4>
                  </div>
                  <div class="home-freebets-content">
                     <div class="home-freebets-text">+ Cash Out &amp; Acca Insurance<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                     <div class="home-freebets-button-wrapper">
                        <div class="home-freebets-button">Claim Now</div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="home-bet-wrapper bg-offset-paddy-power">
               <a class="ppc-paddy-power home-freebets in-content-freebet-table" title=" *Exclusive* Get a £50 Risk Free First Bet!" target="_blank" href="http://bit.ly/PPRiskFree50">
                  <div class="home-freebets-head bg-paddy-power">
                     <h4> *Exclusive* Get a £50 Risk Free First Bet!</h4>
                  </div>
                  <div class="home-freebets-content">
                     <div class="home-freebets-text">Money Back In Cash If It Loses<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                     <div class="home-freebets-button-wrapper">
                        <div class="home-freebets-button">Claim Now</div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="home-bet-wrapper bg-offset-betfred">
               <a class="ppc-betfred home-freebets in-content-freebet-table" title=" Bet £10, Get £30 In Free Bets &amp; 30 Free Spins!" target="_blank" href="http://bit.ly/FSTMatchPreviewBetfred60">
                  <div class="home-freebets-head bg-betfred">
                     <h4> Bet £10, Get £30 In Free Bets &amp; 30 Free Spins!</h4>
                  </div>
                  <div class="home-freebets-content">
                     <div class="home-freebets-text">New Betfred customers claim now<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                     <div class="home-freebets-button-wrapper">
                        <div class="home-freebets-button">Claim Now</div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="home-bet-wrapper bg-offset-coral">
               <a class="ppc-coral home-freebets in-content-freebet-table" title=" Bet £10, Get £30 In Free Bets!" target="_blank" href="http://bit.ly/CoralBet10Get30MatchPreviews">
                  <div class="home-freebets-head bg-coral">
                     <h4> Bet £10, Get £30 In Free Bets!</h4>
                  </div>
                  <div class="home-freebets-content">
                     <div class="home-freebets-text">+ Acca Insurance &amp; Cash Out<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                     <div class="home-freebets-button-wrapper">
                        <div class="home-freebets-button">Claim Now</div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="home-bet-wrapper bg-offset-betbright">
               <a class="ppc-betbright home-freebets in-content-freebet-table" title=" Deposit £10, Play with £50!" target="_blank" href="http://bit.ly/FSTFreeBetsBetbrightBet10Get50">
                  <div class="home-freebets-head bg-betbright">
                     <h4> Deposit £10, Play with £50!</h4>
                  </div>
                  <div class="home-freebets-content">
                     <div class="home-freebets-text">New BetBright customers<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                     <div class="home-freebets-button-wrapper">
                        <div class="home-freebets-button">Claim Now</div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="home-bet-wrapper bg-offset-ladbrokes">
               <a class="ppc-ladbrokes home-freebets in-content-freebet-table" title=" Get a Free Bet Up To £50!" target="_blank" href="http://bit.ly/FSTMatchPreviewsLads50">
                  <div class="home-freebets-head bg-ladbrokes">
                     <h4> Get a Free Bet Up To £50!</h4>
                  </div>
                  <div class="home-freebets-content">
                     <div class="home-freebets-text">+ Acca Insurance, Cash Out &amp; Daily Odds Boosts<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                     <div class="home-freebets-button-wrapper">
                        <div class="home-freebets-button">Claim Now</div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <!-- start how to guides --> <!-- end how to guides -->
         <div class="text aligned center">Type of Bet: <a href="http://stagingonline.net/projects/freesupertips/typeofbet/win-accumulator/">Win Accumulator</a>. <span style="">Sports: <a href="/free-football-betting-tips/" title="Football">Football.</a></span></div>
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