<?php
   /*
   
    * Template Name: Matches
   
    * Template Post Type: Matches Post Type
   
    */
   
   ?>
<?php get_header(); ?>
<div class="wrapper" id="to-wrapper">
<!-- remove comment to run takeover -->
<div class="inner-wrapper" id="content-container">
   <div class="ui stackable grid" id="content">
      <div class="ten wide column" style="z-index:1;">
         <!-- <script src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/assets/js/jquery.touchSwipe.min.js"></script> --> <script type="text/javascript">$( document ).ready(function() {
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
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
         <div itemscope="" itemtype="http://schema.org/SportsEvent" id="preview-single" class="fst segment">
            <h1 class="preview-title"><?php the_title();?>,Betting Tips and Match Previews</h1>
            
            <div id="preview-header">
               <div class="team home">
                  <img class="team-badge" src="<?php the_field('team_1_image');?>" alt=""> 
                  <span itemprop="homeTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
                     <h3 class="team-name" itemprop="name"><?php the_field('team_1');?></h3>
                  </span>
               </div>
               <div class="prev-meta">
                  <p class="meta-text"> <span itemprop="startDate" content="2018-01-24 20:30"> Today<br> <strong><?php the_field('time');?></strong><br> </span> <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address"><?php the_field('stadium');?></span> </span></p>
                  <p class="versus">V</p>
               </div>
               <div class="team away">
                  <img class="team-badge" src="<?php the_field('team_2_image');?>" alt=""> 
                  <span itemprop="awayTeam" itemscope="" itemtype="http://schema.org/SportsTeam">
                     <h3 class="team-name" itemprop="name"><?php the_field('team_2');?></h3>
                  </span>
               </div>
               <div class="form-wrapper">
                  <div class="form home">
                     <img class="form-box" src="<?php the_field('team_1_result_1');?>">
                     <img class="form-box" src="<?php the_field('team_1_result_2');?>">
                     <img class="form-box" src="<?php the_field('team_1_result_3');?>">
                     <img class="form-box" src="<?php the_field('team_1_result_4');?>">
                     <img class="form-box" src="<?php the_field('team_1_result_5');?>">
                     <img class="form-box" src="<?php the_field('team_1_result_6');?>">
                  </div>
                  <div class="form-meta">
                     <p class="form-text">Form</p>
                  </div>
                  <div class="form away">
                    <img class="form-box" src="<?php the_field('team_2_result_1');?>">
                     <img class="form-box" src="<?php the_field('team_2_result_2');?>">
                     <img class="form-box" src="<?php the_field('team_2_result_3');?>">
                     <img class="form-box" src="<?php the_field('team_2_result_4');?>">
                     <img class="form-box" src="<?php the_field('team_2_result_5');?>">
                     <img class="form-box" src="<?php the_field('team_2_result_6');?>">
                  </div>
               </div>
               <div class="intro-text" itemprop="description">
                  <p><span style="font-weight: 400;"><?php the_field('short_description');?></span></p>
                  <p><img class="alignnone size-full wp-image-108718" <?php the_post_thumbnail('full');?></p>
               </div>
            </div>
            <h2 class="preview-dark-heading"><span itemprop="name"><?php the_title();?></span></h2>
           
            <div class="pg_container">
               <div class="pg_grid_container">
                  <div class="pg_previewBet-row">
                     <div class="pg_previewBet-betName">
                        <div> Leganes +2.00 Asian Handicap at 2.100 <span class="pg_star-rating star-2"></span></div>
                     </div>
                     <div class="pg_previewBet-betBtnContainer">
                        <div class="pg_previewBet-btn openOddsTrigger " data-target="Leganes-plus2-00-Asian-Handicap"> <span>Add to Betslip <i class="angle right icon"></i></span></div>
                     </div>
                  </div>
               </div>
            </div>
            <div style="display: none" class="pg_grid-wrapper" id="Leganes-plus2-00-Asian-Handicap">
               <div class="pg_grid-inner-wrapper">
                  <div class="pg_modal-wrapper">
                     <div class="pg_container pg_relative pg_oddsModal">
                        <i class="pg_modal-close remove icon"></i>
                        <div class="pg_subheader">
                           Leganes +2.00 Asian Handicap
                           <div style="font-size: 16px; text-transform: none;">Tipped @ 2.100</div>
                        </div>
                        <div class="pg_previewBet-heading">
                           <div class="pg_previewBet-heading-item pg_modal-odds">Best odds</div>
                           <div class="pg_previewBet-heading-item pg_modal-atbs">Bet now</div>
                           <div class="pg_previewBet-heading-item pg_modal-freebet">Sign Up Offer</div>
                        </div>
                        <div class="pg_grid_container">
                           <div class="pg_previewBet-row">
                              <div class="pg_previewBet-item pg_modal-odds">
                                 <div class="pg_previewBet-odds">
                                    <div class="pg_previewBet-bookie"> <img src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/assets/images/icon-betvictor.png"></div>
                                    <div class="pg_odds"> 24/25</div>
                                 </div>
                              </div>
                              <div class="pg_previewBet-item pg_modal-atbs">
                                 <a target="_blank" href="http://www.betvictor.com/sports/en/coupon/remotes?outcomeids=[51122297500]&amp;btagid=90663557" class="pg_previewBet-btn event_previews_tip_atbs betvictor" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <span>Add To Betslip <i class="angle right icon"></i></span>
                                    <meta itemprop="name" content="">
                                    <meta itemprop="url" content="http://www.betvictor.com/sports/en/coupon/remotes?outcomeids=[51122297500]&amp;btagid=90663557">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Betvictor">
                                    </span>
                                 </a>
                              </div>
                              <div class="pg_previewBet-item pg_modal-freebet">
                                 <a target="_blank" href="http://bit.ly/API-PreviewFB-BV" class="pg_previewBet-freebet-btn pg_sign-up-price event_previews_tip_signup  betvictor">
                                    <span class="pg_sign-up-price">£40</span> <!--<div class="pg_sign-up-msg">Open Account</div> -->
                                    <meta itemprop="name" content="Get £40 in freebets when you sign up with Betvictor">
                                    <meta itemprop="url" content="http://bit.ly/API-PreviewFB-BV">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Betvictor">
                                    </span>
                                 </a>
                              </div>
                           </div>
                           <div class="pg_previewBet-row">
                              <div class="pg_previewBet-item pg_modal-odds">
                                 <div class="pg_previewBet-odds">
                                    <div class="pg_previewBet-bookie"> <img src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/assets/images/icon-bet365.png"></div>
                                    <div class="pg_odds"> 37/40</div>
                                 </div>
                              </div>
                              <div class="pg_previewBet-item pg_modal-atbs">
                                 <a target="_blank" href="https://mobile.bet365.com/AddToInstantBetslip.aspx?bs=1527151602~37/40|&amp;affiliatecode=365_624906" class="pg_previewBet-btn event_previews_tip_atbs bet365" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <span>Add To Betslip <i class="angle right icon"></i></span>
                                    <meta itemprop="name" content="">
                                    <meta itemprop="url" content="https://mobile.bet365.com/AddToInstantBetslip.aspx?bs=1527151602~37/40|&amp;affiliatecode=365_624906">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Bet365">
                                    </span>
                                 </a>
                              </div>
                              <div class="pg_previewBet-item pg_modal-freebet">
                                 <a target="_blank" href="/freebet-redirect/?ru=http://bit.ly/API-OddsgridFB-Bet365" class="pg_previewBet-freebet-btn pg_sign-up-price event_previews_tip_signup  bet365">
                                    <span class="pg_sign-up-price">Claim</span> <!--<div class="pg_sign-up-msg">Open Account</div> -->
                                    <meta itemprop="name" content="Get Claim in freebets when you sign up with Bet365">
                                    <meta itemprop="url" content="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/API-OddsgridFB-Bet365">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Bet365">
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="pg_modal-logo"> <img src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/free-football-betting-tips.png"></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- second new tip -->
            <h2 class="preview-dark-heading">Correct Score Prediction</h2>
            <div class="pg_container">
               <div class="pg_grid_container">
                  <div class="pg_previewBet-row">
                     <div class="pg_previewBet-betName">
                        <div> Real Madrid 2-1 at 21/2 <span class="pg_star-rating star-1"></span></div>
                     </div>
                     <div class="pg_previewBet-betBtnContainer">
                        <div class="pg_previewBet-btn openOddsTrigger " data-target="Real-Madrid-2-1"> <span>Add to Betslip <i class="angle right icon"></i></span></div>
                     </div>
                  </div>
               </div>
            </div>
            <div style="display: none" class="pg_grid-wrapper" id="Real-Madrid-2-1">
               <div class="pg_grid-inner-wrapper">
                  <div class="pg_modal-wrapper">
                     <div class="pg_container pg_relative pg_oddsModal">
                        <i class="pg_modal-close remove icon"></i>
                        <div class="pg_subheader">
                           Real Madrid 2-1
                           <div style="font-size: 16px; text-transform: none;">Tipped @ 21/2</div>
                        </div>
                        <div class="pg_previewBet-heading">
                           <div class="pg_previewBet-heading-item pg_modal-odds">Best odds</div>
                           <div class="pg_previewBet-heading-item pg_modal-atbs">Bet now</div>
                           <div class="pg_previewBet-heading-item pg_modal-freebet">Sign Up Offer</div>
                        </div>
                        <div class="pg_grid_container">
                           <div class="pg_previewBet-row">
                              <div class="pg_previewBet-item pg_modal-odds">
                                 <div class="pg_previewBet-odds">
                                    <div class="pg_previewBet-bookie"> <img src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/assets/images/icon-betfair.png"></div>
                                    <div class="pg_odds"> 10/1</div>
                                 </div>
                              </div>
                              <div class="pg_previewBet-item pg_modal-atbs">
                                 <a target="_blank" href="/freebet-redirect/?bookmaker=betfair&amp;device=desktop&amp;bssid=6&amp;bsmid=924.123980307&amp;affiliateID=2780093" class="pg_previewBet-btn event_previews_tip_atbs atbs-desktop betfair" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <span>Add To Betslip <i class="angle right icon"></i></span>
                                    <meta itemprop="name" content="">
                                    <meta itemprop="url" content="http://www.freesupertips.co.uk/freebet-redirect/?bookmaker=betfair&amp;device=desktop&amp;bssid=6&amp;bsmid=924.123980307&amp;affiliateID=2780093">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Betfair">
                                    </span>
                                 </a>
                                 <a target="_blank" href="/freebet-redirect/?bookmaker=betfair&amp;device=mobile&amp;bssid=6&amp;bsmid=924.123980307&amp;affiliateID=2780093" class="pg_previewBet-btn event_previews_tip_atbs atbs-mobile betfair" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <span>Add To Betslip <i class="angle right icon"></i></span>
                                    <meta itemprop="name" content="">
                                    <meta itemprop="url" content="http://www.freesupertips.co.uk/freebet-redirect/?bookmaker=betfair&amp;device=mobile&amp;bssid=6&amp;bsmid=924.123980307&amp;affiliateID=2780093">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Betfair">
                                    </span>
                                 </a>
                              </div>
                              <div class="pg_previewBet-item pg_modal-freebet">
                                 <a target="_blank" href="/freebet-redirect/?ru=http://bit.ly/API-PreviewFB-Betfair" class="pg_previewBet-freebet-btn pg_sign-up-price event_previews_tip_signup betfair">
                                    <span class="pg_sign-up-price">£100</span> <!--<div class="pg_sign-up-msg">Open Account</div> -->
                                    <meta itemprop="name" content="Get £100 in freebets when you sign up with Betfair">
                                    <meta itemprop="url" content="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/API-PreviewFB-Betfair">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Betfair">
                                    </span>
                                 </a>
                              </div>
                           </div>
                           <div class="pg_previewBet-row">
                              <div class="pg_previewBet-item pg_modal-odds">
                                 <div class="pg_previewBet-odds">
                                    <div class="pg_previewBet-bookie"> <img src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/assets/images/icon-betvictor.png"></div>
                                    <div class="pg_odds"> 19/2</div>
                                 </div>
                              </div>
                              <div class="pg_previewBet-item pg_modal-atbs">
                                 <a target="_blank" href="http://www.betvictor.com/sports/en/coupon/remotes?outcomeids=[51122282000]&amp;btagid=90663557" class="pg_previewBet-btn event_previews_tip_atbs betvictor" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <span>Add To Betslip <i class="angle right icon"></i></span>
                                    <meta itemprop="name" content="">
                                    <meta itemprop="url" content="http://www.betvictor.com/sports/en/coupon/remotes?outcomeids=[51122282000]&amp;btagid=90663557">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Betvictor">
                                    </span>
                                 </a>
                              </div>
                              <div class="pg_previewBet-item pg_modal-freebet">
                                 <a target="_blank" href="http://bit.ly/API-PreviewFB-BV" class="pg_previewBet-freebet-btn pg_sign-up-price event_previews_tip_signup betvictor">
                                    <span class="pg_sign-up-price">£40</span> <!--<div class="pg_sign-up-msg">Open Account</div> -->
                                    <meta itemprop="name" content="Get £40 in freebets when you sign up with Betvictor">
                                    <meta itemprop="url" content="http://bit.ly/API-PreviewFB-BV">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Betvictor">
                                    </span>
                                 </a>
                              </div>
                           </div>
                           <div class="pg_previewBet-row">
                              <div class="pg_previewBet-item pg_modal-odds">
                                 <div class="pg_previewBet-odds">
                                    <div class="pg_previewBet-bookie"> <img src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/assets/images/icon-william-hill.png"></div>
                                    <div class="pg_odds"> 9/1</div>
                                 </div>
                              </div>
                              <div class="pg_previewBet-item pg_modal-atbs">
                                 <a target="_blank" href="/freebet-redirect/?bookmaker=william-hill&amp;theIDs=~~1835861378&amp;multiple=FALSE&amp;affiliateID=191329960" class="pg_previewBet-btn event_previews_tip_atbs william-hill" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <span>Add To Betslip <i class="angle right icon"></i></span>
                                    <meta itemprop="name" content="">
                                    <meta itemprop="url" content="http://www.freesupertips.co.uk/freebet-redirect/?bookmaker=william-hill&amp;theIDs=~~1835861378&amp;multiple=FALSE&amp;affiliateID=191329960">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="William hill">
                                    </span>
                                 </a>
                              </div>
                              <div class="pg_previewBet-item pg_modal-freebet">
                                 <a target="_blank" href="http://bit.ly/API-PreviewFB-WH" class="pg_previewBet-freebet-btn pg_sign-up-price event_previews_tip_signup william-hill">
                                    <span class="pg_sign-up-price">£30</span> <!--<div class="pg_sign-up-msg">Open Account</div> -->
                                    <meta itemprop="name" content="Get £30 in freebets when you sign up with William-hill">
                                    <meta itemprop="url" content="http://bit.ly/API-PreviewFB-WH">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="William hill">
                                    </span>
                                 </a>
                              </div>
                           </div>
                           <div class="pg_previewBet-row">
                              <div class="pg_previewBet-item pg_modal-odds">
                                 <div class="pg_previewBet-odds">
                                    <div class="pg_previewBet-bookie"> <img src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/assets/images/icon-ladbrokes.png"></div>
                                    <div class="pg_odds"> 17/2</div>
                                 </div>
                              </div>
                              <div class="pg_previewBet-item pg_modal-atbs">
                                 <a target="_blank" href="/freebet-redirect?encoded=http%3A%2F%2Fonline.ladbrokes.com%2FpromoRedirect%3Fkey%3Dej0xNTQzODU5MyZsPTE1NDM4NjAxJnA9NzAxNTA5%26selections%3D660411244" class="pg_previewBet-btn event_previews_tip_atbs ladbrokes" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <span>Add To Betslip <i class="angle right icon"></i></span>
                                    <meta itemprop="name" content="">
                                    <meta itemprop="url" content="http://www.freesupertips.co.uk/freebet-redirect?encoded=http%3A%2F%2Fonline.ladbrokes.com%2FpromoRedirect%3Fkey%3Dej0xNTQzODU5MyZsPTE1NDM4NjAxJnA9NzAxNTA5%26selections%3D660411244">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Ladbrokes">
                                    </span>
                                 </a>
                              </div>
                              <div class="pg_previewBet-item pg_modal-freebet">
                                 <a target="_blank" href="http://bit.ly/API-PreviewFB-Lads" class="pg_previewBet-freebet-btn pg_sign-up-price event_previews_tip_signup ladbrokes">
                                    <span class="pg_sign-up-price">£50</span> <!--<div class="pg_sign-up-msg">Open Account</div> -->
                                    <meta itemprop="name" content="Get £50 in freebets when you sign up with Ladbrokes">
                                    <meta itemprop="url" content="http://bit.ly/API-PreviewFB-Lads">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Ladbrokes">
                                    </span>
                                 </a>
                              </div>
                           </div>
                           <div class="pg_previewBet-row">
                              <div class="pg_previewBet-item pg_modal-odds">
                                 <div class="pg_previewBet-odds">
                                    <div class="pg_previewBet-bookie"> <img src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/assets/images/icon-betway.png"></div>
                                    <div class="pg_odds"> 8/1</div>
                                 </div>
                              </div>
                              <div class="pg_previewBet-item pg_modal-atbs">
                                 <a target="_blank" href="https://sports.betway.com/outcomes/230808528?s=bw39549&amp;a=bwadid66240" class="pg_previewBet-btn event_previews_tip_atbs betway" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <span>Add To Betslip <i class="angle right icon"></i></span>
                                    <meta itemprop="name" content="">
                                    <meta itemprop="url" content="https://sports.betway.com/outcomes/230808528?s=bw39549&amp;a=bwadid66240">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Betway">
                                    </span>
                                 </a>
                              </div>
                              <div class="pg_previewBet-item pg_modal-freebet">
                                 <a target="_blank" href="http://bit.ly/API-PreviewFB-Betway" class="pg_previewBet-freebet-btn pg_sign-up-price event_previews_tip_signup betway">
                                    <span class="pg_sign-up-price">£30</span> <!--<div class="pg_sign-up-msg">Open Account</div> -->
                                    <meta itemprop="name" content="Get £30 in freebets when you sign up with Betway">
                                    <meta itemprop="url" content="http://bit.ly/API-PreviewFB-Betway">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Betway">
                                    </span>
                                 </a>
                              </div>
                           </div>
                           <div class="pg_previewBet-row">
                              <div class="pg_previewBet-item pg_modal-odds">
                                 <div class="pg_previewBet-odds">
                                    <div class="pg_previewBet-bookie"> <img src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/assets/images/icon-bet365.png"></div>
                                    <div class="pg_odds"> 15/2</div>
                                 </div>
                              </div>
                              <div class="pg_previewBet-item pg_modal-atbs">
                                 <a target="_blank" href="https://mobile.bet365.com/AddToInstantBetslip.aspx?bs=1527163150~15/2|&amp;affiliatecode=365_624906" class="pg_previewBet-btn event_previews_tip_atbs bet365" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <span>Add To Betslip <i class="angle right icon"></i></span>
                                    <meta itemprop="name" content="">
                                    <meta itemprop="url" content="https://mobile.bet365.com/AddToInstantBetslip.aspx?bs=1527163150~15/2|&amp;affiliatecode=365_624906">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Bet365">
                                    </span>
                                 </a>
                              </div>
                              <div class="pg_previewBet-item pg_modal-freebet">
                                 <a target="_blank" href="/freebet-redirect/?ru=http://bit.ly/API-OddsgridFB-Bet365" class="pg_previewBet-freebet-btn pg_sign-up-price event_previews_tip_signup bet365">
                                    <span class="pg_sign-up-price">Claim</span> <!--<div class="pg_sign-up-msg">Open Account</div> -->
                                    <meta itemprop="name" content="Get Claim in freebets when you sign up with Bet365">
                                    <meta itemprop="url" content="http://www.freesupertips.co.uk/freebet-redirect/?ru=http://bit.ly/API-OddsgridFB-Bet365">
                                    <span itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Organization">
                                       <meta itemprop="name" content="Bet365">
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="pg_modal-logo"> <img src="http://www.freesupertips.co.uk/wp-content/themes/freesupertips/image/free-football-betting-tips.png"></div>
                     </div>
                  </div>
               </div>
            </div>
            <script>$(document).ready(function(){
               $('.openOddsTrigger').each(function(e){
                 $(this).on('click', function(e){
                   var target = $(this).data('target');
                   $('#'+target).show();
                 });
               });
               
               $('.pg_modal-close').on('click', function(e){
                 $(this).parent().parent().parent().parent().hide();
               })
               // $('.pg_grid-inner-wrapper').click(function(e){
               //
               //   console.log('wrapper clicked');
               //   $(this).parent().hide();
               //   e.stopPropagation();
               // });
               
               $('.toggleOdds').on('click', function(event){
                 var target = $(this).data('target');
                 $('#'+target).toggle();
                 if ($(this).data('state') == "show"){
                   $('#'+target).addClass('fadeIn animated');
                   $(this).html("Hide odds <i class='angle up icon'></i>");
                   $(this).data('state', 'hide')
                 }
                 else {
                   $(this).html("Show more odds <i class='angle down icon'></i>");
                   $(this).data('state', 'show')
                 }
               });
               
               });
            </script> 
            <h2 class="preview-dark-heading">Add All Tips to Betslip</h2>
            <div class="pg_grid_container">
               <div class="pg_previewBet-row">
                  <div class="pg_previewBet-betName">
                     <div>
                        <select id="atbs-all_trigger" class="atbs-all_select">
                           <option value="bet365" data-missingmarket="0">bet365</option>
                           <option value="betfair" data-missingmarket="1">Betfair*</option>
                           <option value="betvictor" data-missingmarket="0">Betvictor</option>
                           <option value="betway" data-missingmarket="1">Betway*</option>
                           <option value="ladbrokes" data-missingmarket="1">Ladbrokes*</option>
                           <option value="william-hill" data-missingmarket="1">William Hill*</option>
                        </select>
                     </div>
                  </div>
                  <div class="pg_previewBet-betBtnContainer"> <a target="_blank" class="pg_previewBet-btn atbs-all atbs-all_bet365 atbs" href="https://mobile.bet365.com/AddToInstantBetslip.aspx?bs=1527163150~15/2|1527151602~37/40|&amp;affiliatecode=365_624910" style=""><span>Add all to Betslip</span></a> <a target="_blank" class="pg_previewBet-btn atbs-all atbs-all_betfair atbs-all--desktop" href="http://www.freesupertips.co.uk/freebet-redirect/?bookmaker=betfair&amp;device=desktop&amp;bssid=6&amp;bsmid=924.123980307&amp;affiliateID=2780097" style="display:none"><span>Add all to Betslip</span></a> <a target="_blank" class="pg_previewBet-btn atbs-all atbs-all_betfair atbs-all--mobile" href="http://www.freesupertips.co.uk/freebet-redirect?encoded=http%3A%2F%2Fads.betfair.com%2Fredirect.aspx%3Fpid%3D2780097%26bid%3D9810%26redirecturl%3Dhttps%3A%2F%2Fwww.betfair.com%2Fsport%2F%2523%2Fbetslip%3Fbets%3D924.123980307%7C6" style="display:none"><span>Add all to Betslip</span></a> <a target="_blank" class="pg_previewBet-btn atbs-all atbs-all_betvictor atbs" href="http://www.betvictor.com/sports/en/coupon/remotes?outcomeids=[51122282000,51122297500]&amp;btagid=90663564" style="display:none"><span>Add all to Betslip</span></a> <a target="_blank" class="pg_previewBet-btn atbs-all atbs-all_betway atbs" href="https://sports.betway.com/outcomes/230808528?s=bw39549&amp;a=bwadid662444" style="display:none"><span>Add all to Betslip</span></a> <a target="_blank" class="pg_previewBet-btn atbs-all atbs-all_ladbrokes atbs" href="http://www.freesupertips.co.uk/freebet-redirect?encoded=http%3A%2F%2Fonline.ladbrokes.com%2FpromoRedirect%3Fkey%3Dej0xNTQzODU5MyZsPTE1NDM4NjAxJnA9NzAxNTEz%26selections%3D660411244" style="display:none"><span>Add all to Betslip</span></a> <a target="_blank" class="pg_previewBet-btn atbs-all atbs-all_william-hill atbs" href="/freebet-redirect/?bookmaker=william-hill&amp;theIDs=~~1835861378&amp;multiple=TRUE&amp;affiliateID=191329960" style="display:none"><span>Add all to Betslip</span></a></div>
               </div>
               <div class="atbs-all_warning-container"> <span class="atbs-all_warning" style="display:none">*some bets not available with this bookmaker</span></div>
            </div>
            <h2 class="preview-dark-heading">Free bets &amp; Special offers</h2>
            <div class="preview-freebet-container">
               <div class="preview-freebet">
                  <a class="fb-sb-wrapper in-content bg-offset-betway ppc-betway advert_event" title=" Get up to a £30 Free Bet!" target="_blank" href="http://bit.ly/FSTMatchPreviewBetway">
                     <div class="fb-sb-head bg-betway">
                        <h4> Get up to a £30 Free Bet!</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">+ £10 Free Bet Every Week<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                        <div class="fb-sb-button-wrapper">
                           <div class="fb-sb-button">Claim Now</div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="preview-freebet">
                  <a class="fb-sb-wrapper in-content bg-offset-william-hill ppc-william-hill advert_event" title=" Bet £10, Get £30 In Free Bets!" target="_blank" href="http://bit.ly/FSTPreviewsWH">
                     <div class="fb-sb-head bg-william-hill">
                        <h4> Bet £10, Get £30 In Free Bets!</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">+ Cash Out &amp; Acca Insurance<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                        <div class="fb-sb-button-wrapper">
                           <div class="fb-sb-button">Claim Now</div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="preview-freebet">
                  <a class="fb-sb-wrapper in-content bg-offset-paddy-power ppc-paddy-power advert_event" title=" *Exclusive* Get a £50 Risk Free First Bet!" target="_blank" href="http://bit.ly/PPRiskFree50">
                     <div class="fb-sb-head bg-paddy-power">
                        <h4> *Exclusive* Get a £50 Risk Free First Bet!</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">Money Back In Cash If It Loses<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                        <div class="fb-sb-button-wrapper">
                           <div class="fb-sb-button">Claim Now</div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="preview-freebet">
                  <a class="fb-sb-wrapper in-content bg-offset-betvictor ppc-betvictor advert_event" title=" Bet £10, Get £40 Free Bets!" target="_blank" href="http://bit.ly/FSTContentBV30">
                     <div class="fb-sb-head bg-betvictor">
                        <h4> Bet £10, Get £40 Free Bets!</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">+ Cash Out &amp; Acca Insurance<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                        <div class="fb-sb-button-wrapper">
                           <div class="fb-sb-button">Claim Now</div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="preview-freebet">
                  <a class="fb-sb-wrapper in-content bg-offset-ladbrokes ppc-ladbrokes advert_event" title=" Get a Free Bet Up To £50!" target="_blank" href="http://bit.ly/FSTMatchPreviewsLads50">
                     <div class="fb-sb-head bg-ladbrokes">
                        <h4> Get a Free Bet Up To £50!</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">+ Acca Insurance, Cash Out &amp; Daily Odds Boosts<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                        <div class="fb-sb-button-wrapper">
                           <div class="fb-sb-button">Claim Now</div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <h2 class="preview-dark-heading">Reason For <?php the_title();?> Betting Tips</h2>
            <div class="text-content">
             <?php the_field('long_description');?>
            </div>
            <h2 class="preview-dark-heading">Head To Head</h2>
            <div class="text-content">
               <?php the_field('head_to_head');?>
            </div>
            <h2 class="preview-dark-heading"><?php the_field('team_1');?> vs <?php the_field('team_2');?> Stats</h2>
            <div class="text-content">
              <?php the_field('stats');?>
            </div>
            <h2 class="preview-dark-heading"><?php the_field('team_1');?> Team News</h2>
            <div class="text-content">
               <div class="team-news">
                  <img class="team-news-badge" src="<?php the_field('team_1_image');?>" alt="">
                  <?php the_field('team_1_news');?>
                  
               </div>
            </div>
            <h2 class="preview-dark-heading"><?php the_field('team_2');?> Team News</h2>
            <div class="text-content">
               <div class="team-news">
                  <img class="team-news-badge" src="<?php the_field('team_2_image');?>" alt="">
                  <?php the_field('team_2_news');?>
                  
               </div>
            </div>
            <div id="preview-drop-wrapper">
               <!-- <div id="preview-drop-head">Select A Different Fixture...</div> -->
               <div id="preview-drop">
                  <div class="preview-drop-league">England League Cup</div>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/arsenal-vs-chelsea-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 20:00">20:00</div>
                        <div class="fixture" itemprop="name">Arsenal vs Chelsea</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Emirates Stadium"></span> </span> 
                     </a>
                  </span>
                  <div class="preview-drop-league">Scotland Premiership</div>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/rangers-vs-aberdeen-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 19:45">19:45</div>
                        <div class="fixture" itemprop="name">Rangers vs Aberdeen</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Ibrox Stadium"></span> </span> 
                     </a>
                  </span>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/motherwell-vs-ross-county-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 19:45">19:45</div>
                        <div class="fixture" itemprop="name">Motherwell vs Ross County</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Fir Park"></span> </span> 
                     </a>
                  </span>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/hamilton-vs-hearts-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 19:45">19:45</div>
                        <div class="fixture" itemprop="name">Hamilton vs Hearts</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="New Douglas Park"></span> </span> 
                     </a>
                  </span>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/dundee-vs-hibernian-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 19:45">19:45</div>
                        <div class="fixture" itemprop="name">Dundee vs Hibernian</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Dens Park"></span> </span> 
                     </a>
                  </span>
                  <div class="preview-drop-league">Italy Serie A</div>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/lazio-vs-udinese-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 17:30">17:30</div>
                        <div class="fixture" itemprop="name">Lazio vs Udinese</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Stadio Olimpico"></span> </span> 
                     </a>
                  </span>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/sampdoria-vs-roma-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 19:45">19:45</div>
                        <div class="fixture" itemprop="name">Sampdoria vs Roma</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Stadio Comunale Luigi Ferraris"></span> </span> 
                     </a>
                  </span>
                  <div class="preview-drop-league">Holland Eredivisie</div>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/utrecht-vs-feyenoord-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 19:00">19:00</div>
                        <div class="fixture" itemprop="name">Utrecht vs Feyenoord</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Stadion Galgenwaard"></span> </span> 
                     </a>
                  </span>
                  <div class="preview-drop-league">Belgium Pro League</div>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/anderlecht-vs-waasland-beveren-predictions-betting-tips-match-previews/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 19:30">19:30</div>
                        <div class="fixture" itemprop="name">Anderlecht vs Waasland-Beveren</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Constant Vanden Stock Stadium"></span> </span> 
                     </a>
                  </span>
                  <div class="preview-drop-league">Copa del Rey</div>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/alaves-vs-valencia-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 18:00">18:00</div>
                        <div class="fixture" itemprop="name">Alaves vs Valencia</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Estadio de Mendizorroza"></span> </span> 
                     </a>
                  </span>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/real-madrid-vs-leganes-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 20:30">20:30</div>
                        <div class="fixture" itemprop="name">Real Madrid vs Leganes</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Bernabeu"></span> </span> 
                     </a>
                  </span>
                  <div class="preview-drop-league">France Cup</div>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/troyes-vs-st-etienne-predictions-betting-tips-match-previews/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 17:30">17:30</div>
                        <div class="fixture" itemprop="name">Troyes vs St Etienne</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Stade de l'Aube"></span> </span> 
                     </a>
                  </span>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/psg-vs-guingamp-predictions-betting-tips-match-previews/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 17:30">17:30</div>
                        <div class="fixture" itemprop="name">PSG vs Guingamp</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Parc des Princes"></span> </span> 
                     </a>
                  </span>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/montpellier-vs-lorient-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 17:30">17:30</div>
                        <div class="fixture" itemprop="name">Montpellier vs Lorient</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Stade de la Mosson"></span> </span> 
                     </a>
                  </span>
                  <span itemscope="" itemtype="http://schema.org/SportsEvent">
                     <a class="preview-drop-item" href="http://www.freesupertips.co.uk/previews/monaco-vs-lyon-predictions-betting-tips-and-match-previews-20180124/" itemprop="url">
                        <div class="time" itemprop="startDate" content="2018-01-24 20:05">20:05</div>
                        <div class="fixture" itemprop="name">Monaco vs Lyon</div>
                        <span itemprop="location" itemscope="" itemtype="http://schema.org/Place"> <span itemprop="name address" content="Stade Louis II"></span> </span> 
                     </a>
                  </span>
               </div>
            </div>
             <?php endwhile; endif; ?>
            <script type="text/javascript">$( document ).ready(function() {
               $('#preview-drop-head').click(function() {
                 $('#preview-drop').slideToggle();
               });
               });
               
               $(document).ready(function() {
               
               $(function() {
                 //caches a jQuery object containing the header element
                 var previewDropdown = $("#preview-drop-wrapper");
               var previewHeight = $("#preview-single").outerHeight();
                 $(window).scroll(function() {
                     var scroll = $(window).scrollTop();
               
                     if ((scroll >= 270) && (scroll <= previewHeight + 226)) {
                         previewDropdown.removeClass("rel-preview-drop").addClass("fix-preview-drop");
                     } else if (scroll > previewHeight + 226) {
                         previewDropdown.removeClass("fix-preview-drop").addClass("rel-preview-drop");
                     } else {
                         previewDropdown.removeClass("fix-preview-drop").removeClass("rel-preview-drop");
                     }
                 });
               
               });
               
               });
            </script> 
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
</div>
<?php get_footer(); ?>