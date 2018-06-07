<?php 
   // Template Name: Bankroll Builder
   get_header(); ?>
<div class="wrapper">
<div class="inner-wrapper" id="content-container">
<div class="ui  stackable grid" id="content">
   <!-- need to padd it if adding colour to cols) -->
   <div class="ui ten wide column">
      <div class="content">
         <div class="title_h1">
            <h1>Bankroll Builder</h1>
         </div>
         <div class="ui segment">
             <?php $args = array( 'post_type' => 'tips','category_name'=>'accumlator','posts_per_page' => 1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
            <div class="half-col">
               <?php the_content();?>
            </div>
            <?php endwhile;?>
            <!-- <div class="half-col">
               
            </div> -->
         </div>
         <p></p>
         <div class="fb-sb-wrapper in-content bg-offset-betfred">
            <div class="fb-sb-head bg-betfred">
               <h4> Bet £10, Get £60!</h4>
            </div>
            <div class="fb-sb-content">
               <div class="fb-sb-subhead">In Free Bets &amp; Bonuses<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
               <div class="fb-sb-button-wrapper"> <a class="fb-sb-button ppc-betfred advert_event" title=" Bet £10, Get £60!" target="_blank" href="http://bit.ly/Betfred60FSTtips">Claim Now</a></div>
            </div>
         </div>
         <p></p>
         <div class="ui horizontal divider">Bankroll Builder</div>
         <!-- hello5-->
         <div itemscope="" itemtype="http://schema.org/Product" class="fst red segment tip-content">
            <!-- <h2 itemprop="name" class="ui header" style="margin-top:0px;">Thursday Accumulator</h2>
            <div itemprop="description" style="color:#333"> <span>18:00 - </span><strong>Both Teams To Score and Over 2.5 Match Goals</strong> - Celta Vigo vs Barcelona<br><span>18:00 - </span><strong>Leganes Draw No Bet</strong> vs Villarreal<br><span>20:00 - </span><strong>Tottenham Hotspur -1</strong> vs West Ham United<br><span>20:00 - </span><strong>Espanyol to Win</strong> vs Levante<br><span>20:15 - </span><strong>Portimonese to Win</strong> vs Belenenses<br></div> -->
            <?php $args = array( 'post_type' => 'post','category_name'=>'bankroll-builder','posts_per_page' => 1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
                        <!-- <h2 itemprop="name" class="ui header" style="margin-top:0px;"><?php the_title();?></h2> -->
                        <div itemprop="description" style="color:#333"> <?php the_content();?> </div>
                          <?php endwhile;?>
            <div itemscope="" itemprop="potentialAction" itemtype="http://schema.org/Action" class="wrapper-multi-betslip">
               <div class="stake-header">
                  <div class="stake-selector-wrapper">
                     <select id="stake-selector" name="stake-selector" class="stake-selector" data-betid="155554">
                        <option value="10" selected="">£0.00</option>
                        <option value="1">£1.00</option>
                        <option value="2">£2.00</option>
                        <option value="5">£5.00</option>
                        <option value="10">£10.00</option>
                        <option value="15">£15.00</option>
                        <option value="20">£20.00</option>
                        <option value="30">£30.00</option>
                        <option value="50">£50.00</option>
                     </select>
                  </div>
                  <div class="stake-selector-text">Choose Your Stake</div>
               </div>
               <div class="multi-betslip">
                  <div class="wrapper-betslip-logo bs-heading">Best Odds <i class="thumbs outline up icon"></i></div>
                  <div class="wrapper-betslip-button bs-heading" itemprop="name">Bet Now</div>
                  <div class="wrapper-signup-button bs-heading">Free Bet</div>
               </div>
               <div class="coral multi-betslip">
                  <div class="wrapper-betslip-logo">
                     <div class="betslip-logo coral bet-155554" itemprop="result" data-odds="23.46435">£234.64</div>
                  </div>
                  <a target="_blank" href="http://sports.coral.co.uk/bet_coral?action=AddSelection&amp;ev_oc_id=686792624&amp;ev_oc_id=686793678&amp;ev_oc_id=672072834&amp;ev_oc_id=686786091&amp;ev_oc_id=665065340&amp;creferer=BTAG:a_24892b_12680" itemprop="url" class="wrapper-betslip-button disabled">
                     <div class="betslip-button">Add to betslip</div>
                  </a>
                  <a href="http://bit.ly/API-TipsFB-Coral" target="_blank" class="betslip_event coral wrapper-signup-button">
                     <div class="signup-button">£30</div>
                  </a>
               </div>
               <div class="ladbrokes multi-betslip">
                  <div class="wrapper-betslip-logo">
                     <div class="betslip-logo ladbrokes bet-155554" itemprop="result" data-odds="23.46435">£234.64</div>
                  </div>
                  <a target="_blank" href="/freebet-redirect?encoded=http%3A%2F%2Fonline.ladbrokes.com%2FpromoRedirect%3Fkey%3Dej0xNTQzODU5MyZsPTE1NDM4NjAxJnA9NzAxNTEz%26selections%3D649781836%2C649795760%2C647161503%2C649799159%2C643552019" itemprop="url" class="wrapper-betslip-button disabled">
                     <div class="betslip-button">Add to betslip</div>
                  </a>
                  <a href="http://bit.ly/API-TipsFB-Lads" target="_blank" class="betslip_event ladbrokes wrapper-signup-button">
                     <div class="signup-button">£50</div>
                  </a>
               </div>
               <div class="william-hill multi-betslip">
                  <div class="wrapper-betslip-logo">
                     <div class="betslip-logo william-hill bet-155554" itemprop="result" data-odds="21.9734375">£219.73</div>
                  </div>
                  <a target="_blank" href="/freebet-redirect/?bookmaker=william-hill&amp;multiple=TRUE&amp;theIDs=~~1819215887~~1819216042~~1819177207~~1819216467~~1819195960&amp;affiliateID=191329964" itemprop="url" class="wrapper-betslip-button disabled">
                     <div class="betslip-button">Add to betslip</div>
                  </a>
                  <a href="http://bit.ly/API-TipsFB-WH" target="_blank" class="betslip_event william-hill wrapper-signup-button">
                     <div class="signup-button">£30</div>
                  </a>
               </div>
               <div class="betway multi-betslip">
                  <div class="wrapper-betslip-logo">
                     <div class="betslip-logo betway bet-155554" itemprop="result" data-odds="12.333825">£123.34<span>*</span></div>
                  </div>
                  <a target="_blank" href="https://sports.betway.com/outcomes/222396505-223172915-222397920-223431977?s=bw39549&amp;a=bwadid66244 " itemprop="url" class="wrapper-betslip-button disabled">
                     <div class="betslip-button">Add to betslip</div>
                  </a>
                  <a href="http://bit.ly/API-TipsFB-Betway" target="_blank" class="betslip_event betway wrapper-signup-button">
                     <div class="signup-button">£30</div>
                  </a>
               </div>
               <div class="betvictor multi-betslip">
                  <div class="wrapper-betslip-logo">
                     <div class="betslip-logo betvictor bet-155554" itemprop="result" data-odds="11.9284375">£119.28<span>*</span></div>
                  </div>
                  <a target="_blank" href="http://www.betvictor.com/sports/en/coupon/remotes?outcomeids=[50393785600,50476005000,50311026900,50437765800]&amp;btagid=90663564" itemprop="url" class="wrapper-betslip-button disabled">
                     <div class="betslip-button">Add to betslip</div>
                  </a>
                  <a href="http://bit.ly/API-TipsFB-BV" target="_blank" class="betslip_event betvictor wrapper-signup-button">
                     <div class="signup-button">£40</div>
                  </a>
               </div>
               <div class="betfair multi-betslip">
                  <div class="wrapper-betslip-logo">
                     <div class="betslip-logo betfair bet-155554" itemprop="result" data-odds="11.72115">£117.21<span>*</span></div>
                  </div>
                  <a target="_blank" href="/freebet-redirect/?bookmaker=betfair&amp;device=desktop&amp;bssid=309109;48224;59044;505982&amp;bsmid=924.121817001;924.121864598;924.121815798;924.121883079&amp;affiliateID=2780097" itemprop="url" class="desktop wrapper-betslip-button disabled">
                     <div class="betslip-button">Add to betslip</div>
                  </a>
                  <a target="_blank" href="/freebet-redirect?encoded=http%3A%2F%2Fads.betfair.com%2Fredirect.aspx%3Fpid%3D2780097%26bid%3D9810%26redirecturl%3Dhttps%3A%2F%2Fwww.betfair.com%2Fsport%2F%2523%2Fbetslip%3Fbets%3D924.121817001%7C309109%3B924.121864598%7C48224%3B924.121815798%7C59044%3B924.121883079%7C505982" itemprop="url" class="mobile wrapper-betslip-button disabled">
                     <div class="betslip-button">Add to betslip</div>
                  </a>
                  <a href="/freebet-redirect/?ru=http://bit.ly/API-TipsFB-Betfair" target="_blank" class="betslip_event betfair wrapper-signup-button">
                     <div class="signup-button">£100</div>
                  </a>
               </div>
               <p class="missingMsg">*some bets may not be available with this bookmaker</p>
            </div>
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
                  <a class="fb-sb-wrapper bg-offset-betway side-bet-ext_event ppc-betway" title="Get up to a £30 Free Bet!" target="_blank" href="http://bit.ly/FSTSidebarBetway">
                     <div class="fb-sb-head bg-betway">
                        <h4>Get up to a £30 Free Bet!</h4>
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
                        <div class="fb-sb-subhead">+ Cash Out &amp; Acca Insurance<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
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
                  <a class="fb-sb-wrapper bg-offset-ladbrokes side-bet-ext_event ppc-ladbrokes" title="Get a Free Bet Up To £50!" target="_blank" href="http://bit.ly/FSTSidebarLads50">
                     <div class="fb-sb-head bg-ladbrokes">
                        <h4>Get a Free Bet Up To £50!</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">+ Acca Insurance, Cash Out &amp; Daily Odds Boosts<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
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
                        <div class="fb-sb-subhead">+ Cash Out &amp; Acca Insurance<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                        <div class="fb-sb-button-wrapper">
                           <div class="fb-sb-button">Claim Now</div>
                        </div>
                     </div>
                  </a>
                  <a class="fb-sb-wrapper bg-offset-betfred side-bet-ext_event ppc-betfred" title="Bet £10, Get £60 In Bonuses!" target="_blank" href="http://bit.ly/Betfred60Sidebar">
                     <div class="fb-sb-head bg-betfred">
                        <h4>Bet £10, Get £60 In Bonuses!</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">£30 Free Bet &amp; £30 In Casino Bonuses<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
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
                        <div class="fb-sb-subhead">Money Back In Cash If It Loses<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
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
                  <a class="fb-sb-wrapper bg-offset-betfair side-bet-ext_event ppc-betfair" title="Get up to £100 in Free Bets!" target="_blank" href="/freebet-redirect/?ru=http://bit.ly/FSTSidebarBF">
                     <div class="fb-sb-head bg-betfair">
                        <h4>Get up to £100 in Free Bets!</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">+ Acca Insurance, Cash Out &amp; Acca Bonuses<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
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
               </div>
               <!-- end tab one -->
               <div class="tab-2 tab-content fb-sb-list">
                  <a class="fb-sb-wrapper bg-offset-888 side-bet-ext_event ppc-888" title="Bet £10, Get £30 + £10 Free Bets on Tottenham vs West Ham!" target="_blank" href="http://bit.ly/bet10get30TotWhFST">
                     <div class="fb-sb-head bg-888">
                        <h4>Bet £10, Get £30 + £10 Free Bets on Tottenham vs West Ham!</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                        <div class="fb-sb-button-wrapper">
                           <div class="fb-sb-button">Claim Now</div>
                        </div>
                     </div>
                  </a>
                  <a class="fb-sb-wrapper bg-offset-coral side-bet-ext_event ppc-coral" title="33/1 Tottenham to beat West Ham!" target="_blank" href="http://bit.ly/CoralFootball4">
                     <div class="fb-sb-head bg-coral">
                        <h4>33/1 Tottenham to beat West Ham!</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                        <div class="fb-sb-button-wrapper">
                           <div class="fb-sb-button">Claim Now</div>
                        </div>
                     </div>
                  </a>
                  <a class="fb-sb-wrapper bg-offset-betfair side-bet-ext_event ppc-betfair" title="20% Bonus Profit With Acca Edge" target="_blank" href="/freebet-redirect/?ru=http://bit.ly/BetfairExistingFST">
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
                  <a class="fb-sb-wrapper bg-offset-paddy-power side-bet-ext_event ppc-paddy-power" title="£10 Free Bet Every Week" target="_blank" href="http://bit.ly/PPVIPPClubFST">
                     <div class="fb-sb-head bg-paddy-power">
                        <h4>£10 Free Bet Every Week</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">Opt in now to claim yours<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                        <div class="fb-sb-button-wrapper">
                           <div class="fb-sb-button">Claim Now</div>
                        </div>
                     </div>
                  </a>
                  <a class="fb-sb-wrapper bg-offset-coral side-bet-ext_event ppc-coral" title="£10 In Free Bets Every Week!" target="_blank" href="http://bit.ly/CoralBetGetClubFST">
                     <div class="fb-sb-head bg-coral">
                        <h4>£10 In Free Bets Every Week!</h4>
                     </div>
                     <div class="fb-sb-content">
                        <div class="fb-sb-subhead">Opt in now to claim yours<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
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
         <div class="desktop">
            <div class="ui horizontal divider invis_clss">Today's Football Free Bets &amp; Special Offers</div>
            <div class="ui list todays-fb">
               <div class="home-bet-wrapper bg-offset-coral">
                  <a class="ppc-coral home-freebets in-content-freebet-table" title="33/1  Tottenham to beat West Ham!" target="_blank" href="http://bit.ly/CoralFootball4">
                     <div class="home-freebets-head bg-coral">
                        <h4>33/1  Tottenham to beat West Ham!</h4>
                     </div>
                     <div class="home-freebets-content">
                        <div class="home-freebets-text">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                        <div class="home-freebets-button-wrapper">
                           <div class="home-freebets-button">Claim Now</div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="home-bet-wrapper bg-offset-888">
                  <a class="ppc-888 home-freebets in-content-freebet-table" title=" Bet £10, Get £30 + £10 Free Bets on Tottenham vs West Ham!" target="_blank" href="http://bit.ly/bet10get30TotWhFST">
                     <div class="home-freebets-head bg-888">
                        <h4> Bet £10, Get £30 + £10 Free Bets on Tottenham vs West Ham!</h4>
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
               <div class="home-bet-wrapper bg-offset-betfred">
                  <a class="ppc-betfred home-freebets in-content-freebet-table" title=" Bet £10, Get £60 In Bonuses!" target="_blank" href="http://bit.ly/FSTMatchPreviewBetfred60">
                     <div class="home-freebets-head bg-betfred">
                        <h4> Bet £10, Get £60 In Bonuses!</h4>
                     </div>
                     <div class="home-freebets-content">
                        <div class="home-freebets-text">£30 Free Bet &amp; £30 In Casino Bonuses<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
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
         </div>
         <div class="generic-tips">
            <h2 class="preview-dark-heading ft">Today's Tips</h2>
            <?php $args = array( 'post_type' => 'tips', 'posts_per_page' => 6 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
                     <a href=<?php the_permalink() ?> class="tip featured-tip">
                        <div class="tip-start">
                           <div class="date"><?php the_field('date');?></div>
                           <div class="time"><?php the_field('time');?></div>
                        </div>
                        <div class="tip-button hide-500">View Tip</div>
                        <div class="tip-title">
                           <h4><?php the_title();?></h4>
                           <p class="tip-sub"><?php the_field('tip_subtitle');?></p>
                           <div class="tip-button show-500">View Tip</div>
                        </div>
                        <div style="clear:both;"></div>
                     </a>
                  <?php endwhile;?>
         </div>
         <div id="featured-previews">
            <!-- Todays Featured Matches -->
<div id="featured-previews">
   <h3>Todays Featured Matches</h3>
   <?php $args = array( 'post_type' => 'matches', 'posts_per_page' => 5);
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
   <a href="/previews/" class="view-all-prevs">View All Match Tips</a>
</div>
</div>
<!-- End -->
         <br>
         <div class="fst segment">
             <?php $args = array( 'post_type' => 'post','category_name'=>'bankroll-builder-main','posts_per_page' => 1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
          <!-- <h1><?php the_title();?></h1> -->
   <?php the_content();?>
 <?php endwhile;?>
         </div>
      </div>
   </div>
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