<?php 
/* Template Name: FootBall Tips */ 
get_header(); ?>
      <div class="wrapper" id="to-wrapper">
         <!-- remove comment to run takeover -->
         <div class="inner-wrapper" id="content-container">
            <div class="ui  stackable grid" id="content">
               <!-- need to padd it if adding colour to cols) -->
               <div class="ui ten wide column">
                  <div class="content">
                     <div class="title_h1">
                        <h1>Free Football Betting Tips</h1>
                     </div>
                     <!--<div class="fst ui segment"><p>Never miss an inplay bet again with the FreeSuperTips app. We bring the best football betting tips straight to YOU for FREE! Claim over £500 in free bets* and join in the BOOMS now!</p> <a class="app-tracking-apple" href="https://itunes.apple.com/gb/app/freesupertips/id1154565903?mt=8" target="_blank"> <img class="app-tracking-apple" src="http://stagingonline.net/projects/freesupertips/wp-content/themes/freesupertips/image/app-store-badge.png"> </a> <a class="app-tracking-android" href="http://stagingonline.net/projects/freesupertips/app-android/"> <img class="app-tracking-android" src="http://stagingonline.net/projects/freesupertips/wp-content/themes/freesupertips/image/android-badge-4.png"> </a></div> --><a href="http://stagingonline.net/projects/freesupertips/app/"> <img src="http://stagingonline.net/projects/freesupertips/wp-content/uploads/2018/01/fst-banner-2.jpg" style="display: block; max-width: 100%;"> </a>
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
                     <div class="ui horizontal divider">
                        <!--- win-accumulator--> <i class="ui white custom football icon" style="height:28px !important; background-position: -85px 84px !important;"></i> Win Accumulator
                     </div>
                     <div itemscope="" itemtype="http://schema.org/Product" class="fst red segment tip-content">
                      <?php $args = array( 'post_type' => 'post','category_name'=>'win-accumulator','posts_per_page' => 1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
                        <h2 itemprop="name" class="ui header" style="margin-top:0px;"><?php the_title();?></h2>
                        <div itemprop="description" style="color:#333"> <?php the_content();?> </div>
                          <?php endwhile;?>
                       
                        <div itemscope="" itemprop="potentialAction" itemtype="http://schema.org/Action" class="wrapper-multi-betslip">
                           <div class="stake-header">
                              <div class="stake-selector-wrapper">
                                 <select id="stake-selector" name="stake-selector" class="stake-selector" data-betid="155362">
                                    <option value="10" selected="">£10.00</option>
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
                           <div class="betway multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betway bet-155362" itemprop="result" data-odds="13.04835">£130.48</div>
                              </div>
                              <a target="_blank" href="https://sports.betway.com/outcomes/222403696-223433484-223434974-223433011?s=bw39549&amp;a=bwadid66244" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Betway" target="_blank" class="betslip_event betway wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                           <div class="betvictor multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betvictor bet-155362" itemprop="result" data-odds="12.43431">£124.34</div>
                              </div>
                              <a target="_blank" href="http://www.betvictor.com/sports/en/coupon/remotes?outcomeids=[50352745900,50437642900,50437509500,50437679400]&amp;btagid=90663564" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-BV" target="_blank" class="betslip_event betvictor wrapper-signup-button">
                                 <div class="signup-button">£40</div>
                              </a>
                           </div>
                           <div class="coral multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo coral bet-155362" itemprop="result" data-odds="12.050535">£120.51</div>
                              </div>
                              <a target="_blank" href="http://sports.coral.co.uk/bet_coral?action=AddSelection&amp;ev_oc_id=683142492&amp;ev_oc_id=665033706&amp;ev_oc_id=665034882&amp;ev_oc_id=665031479&amp;creferer=BTAG:a_24892b_12680" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Coral" target="_blank" class="betslip_event coral wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                           <div class="ladbrokes multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo ladbrokes bet-155362" itemprop="result" data-odds="12.050535">£120.51</div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect?encoded=http%3A%2F%2Fonline.ladbrokes.com%2FpromoRedirect%3Fkey%3Dej0xNTQzODU5MyZsPTE1NDM4NjAxJnA9NzAxNTEz%26selections%3D652790604%2C643520515%2C643522023%2C643518621" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Lads" target="_blank" class="betslip_event ladbrokes wrapper-signup-button">
                                 <div class="signup-button">£50</div>
                              </a>
                           </div>
                           <div class="william-hill multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo william-hill bet-155362" itemprop="result" data-odds="10.99231575">£109.92</div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?bookmaker=william-hill&amp;multiple=TRUE&amp;theIDs=~~1820318875~~1819193967~~1819192963~~1819195043&amp;affiliateID=191329964" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-WH" target="_blank" class="betslip_event william-hill wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                           <div class="betfair multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betfair bet-155362" itemprop="result" data-odds="6.06711">£60.67<span>*</span></div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?bookmaker=betfair&amp;device=desktop&amp;bssid=495321;48799;13700238&amp;bsmid=924.121883076;924.121883078;924.122059159&amp;affiliateID=2780097" itemprop="url" class="desktop wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect?encoded=http%3A%2F%2Fads.betfair.com%2Fredirect.aspx%3Fpid%3D2780097%26bid%3D9810%26redirecturl%3Dhttps%3A%2F%2Fwww.betfair.com%2Fsport%2F%2523%2Fbetslip%3Fbets%3D924.121883076%7C495321%3B924.121883078%7C48799%3B924.122059159%7C13700238" itemprop="url" class="mobile wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?ru=http://bit.ly/API-TipsFB-Betfair" target="_blank" class="betslip_event betfair wrapper-signup-button">
                                 <div class="signup-button">£100</div>
                              </a>
                           </div>
                           <p class="missingMsg">*some bets may not be available with this bookmaker</p>
                        </div>
                     </div>
                     <!--betvictor--> 
                     <a class="fb-sb-wrapper in-content bg-offset-betvictor ppc-betvictor advert_event" title=" Bet £10, Get £40 Free Bets!" target="_blank" href="http://bit.ly/FSTtips30">
                        <div class="fb-sb-head bg-betvictor">
                           <h4> Bet £10, Get £40 Free Bets!</h4>
                        </div>
                        <div class="fb-sb-content">
                           <div class="fb-sb-subhead">+ Cash Out &amp; Acca Insurance<br><span>New customers only. T&amp;Cs apply, 18+. begambleaware.org</span></div>
                           <div class="fb-sb-button-wrapper">
                              <div class="fb-sb-button">Claim Now</div>
                           </div>
                        </div>
                     </a>
                     <div class="ui horizontal divider">
                         <i class="ui white custom football icon" style="height:28px !important; background-position: -85px 84px !important;"></i> Both Teams To Score
                     </div>
                      <div itemscope="" itemtype="http://schema.org/Product" class="fst red segment tip-content">
                      <?php $args = array( 'post_type' => 'post','category_name'=>'both-teams-to-score-accumulator','posts_per_page' => 1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
                        <h2 itemprop="name" class="ui header" style="margin-top:0px;"><?php the_title();?></h2>
                        <div itemprop="description" style="color:#333"> <?php the_content();?> </div>
                          <?php endwhile;?>
                        <div itemscope="" itemprop="potentialAction" itemtype="http://schema.org/Action" class="wrapper-multi-betslip">
                           <div class="stake-header">
                              <div class="stake-selector-wrapper">
                                 <select id="stake-selector" name="stake-selector" class="stake-selector" data-betid="155377">
                                    <option value="10" selected="">£10.00</option>
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
                           <div class="william-hill multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo william-hill bet-155377" itemprop="result" data-odds="16.1749305">£161.75</div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?bookmaker=william-hill&amp;multiple=TRUE&amp;theIDs=~~1819193559~~1819176746~~1819215066~~1819214571~~1819195078&amp;affiliateID=191329964" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-WH" target="_blank" class="betslip_event william-hill wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                           <div class="betfair multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betfair bet-155377" itemprop="result" data-odds="15.972552">£159.73</div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?bookmaker=betfair&amp;device=desktop&amp;bssid=30246;30246;30246;30246;30246&amp;bsmid=924.122050270;924.121860463;924.121816080;924.121816938;924.122059153&amp;affiliateID=2780097" itemprop="url" class="desktop wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect?encoded=http%3A%2F%2Fads.betfair.com%2Fredirect.aspx%3Fpid%3D2780097%26bid%3D9810%26redirecturl%3Dhttps%3A%2F%2Fwww.betfair.com%2Fsport%2F%2523%2Fbetslip%3Fbets%3D924.122050270%7C30246%3B924.121860463%7C30246%3B924.121816080%7C30246%3B924.121816938%7C30246%3B924.122059153%7C30246" itemprop="url" class="mobile wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?ru=http://bit.ly/API-TipsFB-Betfair" target="_blank" class="betslip_event betfair wrapper-signup-button">
                                 <div class="signup-button">£100</div>
                              </a>
                           </div>
                           <div class="coral multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo coral bet-155377" itemprop="result" data-odds="15.7589388">£157.59</div>
                              </div>
                              <a target="_blank" href="http://sports.coral.co.uk/bet_coral?action=AddSelection&amp;ev_oc_id=665076749&amp;ev_oc_id=674419861&amp;ev_oc_id=686791628&amp;ev_oc_id=677495576&amp;ev_oc_id=665031334&amp;creferer=BTAG:a_24892b_12680" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Coral" target="_blank" class="betslip_event coral wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                           <div class="ladbrokes multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo ladbrokes bet-155377" itemprop="result" data-odds="15.7589388">£157.59</div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect?encoded=http%3A%2F%2Fonline.ladbrokes.com%2FpromoRedirect%3Fkey%3Dej0xNTQzODU5MyZsPTE1NDM4NjAxJnA9NzAxNTEz%26selections%3D643563490%2C648370901%2C649780892%2C649803880%2C643518547" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Lads" target="_blank" class="betslip_event ladbrokes wrapper-signup-button">
                                 <div class="signup-button">£50</div>
                              </a>
                           </div>
                           <div class="betway multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betway bet-155377" itemprop="result" data-odds="15.2921925">£152.92</div>
                              </div>
                              <a target="_blank" href="https://sports.betway.com/outcomes/223435531-223170929-222395365-222395862-223433004?s=bw39549&amp;a=bwadid66244" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Betway" target="_blank" class="betslip_event betway wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                           <div class="betvictor multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betvictor bet-155377" itemprop="result" data-odds="13.5268875">£135.27</div>
                              </div>
                              <a target="_blank" href="http://www.betvictor.com/sports/en/coupon/remotes?outcomeids=[50437548000,50455855700,50393667600,50393666700,50437684700]&amp;btagid=90663564" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-BV" target="_blank" class="betslip_event betvictor wrapper-signup-button">
                                 <div class="signup-button">£40</div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <!--coral--> 
                     <a class="fb-sb-wrapper in-content bg-offset-coral ppc-coral advert_event" title=" Bet £10, Get £30 In Free Bets!" target="_blank" href="http://bit.ly/CoralBet10Get30FSTTips">
                        <div class="fb-sb-head bg-coral">
                           <h4> Bet £10, Get £30 In Free Bets!</h4>
                        </div>
                        <div class="fb-sb-content">
                           <div class="fb-sb-subhead">+ Acca Insurance &amp; Cash Out<br><span>New customers only. T&amp;Cs apply, 18+. begambleaware.org</span></div>
                           <div class="fb-sb-button-wrapper">
                              <div class="fb-sb-button">Claim Now</div>
                           </div>
                        </div>
                     </a>
                     <div class="ui horizontal divider">
                        <i class="ui white custom football icon" style="height:28px !important; background-position: -85px 84px !important;"></i> Both Teams To Score and Win Accumulator
                     </div>
                     <div itemscope="" itemtype="http://schema.org/Product" class="fst red segment tip-content">
                      <?php $args = array( 'post_type' => 'post','category_name'=>'both-teams-to-score-and-win-accumulator','posts_per_page' => 1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
                        <h2 itemprop="name" class="ui header" style="margin-top:0px;"><?php the_title();?></h2>
                        <div itemprop="description" style="color:#333"> <?php the_content();?> </div>
                          <?php endwhile;?>
                        <div itemscope="" itemprop="potentialAction" itemtype="http://schema.org/Action" class="wrapper-multi-betslip">
                           <div class="stake-header">
                              <div class="stake-selector-wrapper">
                                 <select id="stake-selector" name="stake-selector" class="stake-selector" data-betid="155380">
                                    <option value="10" selected="">£10.00</option>
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
                                 <div class="betslip-logo coral bet-155380" itemprop="result" data-odds="14.722">£147.22</div>
                              </div>
                              <a target="_blank" href="http://sports.coral.co.uk/bet_coral?action=AddSelection&amp;ev_oc_id=686792548&amp;ev_oc_id=665034213&amp;creferer=BTAG:a_24892b_12680" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Coral" target="_blank" class="betslip_event coral wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                           <div class="ladbrokes multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo ladbrokes bet-155380" itemprop="result" data-odds="14.722">£147.22</div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect?encoded=http%3A%2F%2Fonline.ladbrokes.com%2FpromoRedirect%3Fkey%3Dej0xNTQzODU5MyZsPTE1NDM4NjAxJnA9NzAxNTEz%26selections%3D649781357%2C643520510" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Lads" target="_blank" class="betslip_event ladbrokes wrapper-signup-button">
                                 <div class="signup-button">£50</div>
                              </a>
                           </div>
                           <div class="betvictor multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betvictor bet-155380" itemprop="result" data-odds="14.7">£147.00</div>
                              </div>
                              <a target="_blank" href="http://www.betvictor.com/sports/en/coupon/remotes?outcomeids=[50393684400,50437694600]&amp;btagid=90663564" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-BV" target="_blank" class="betslip_event betvictor wrapper-signup-button">
                                 <div class="signup-button">£40</div>
                              </a>
                           </div>
                           <div class="betway multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betway bet-155380" itemprop="result" data-odds="14.28">£142.80</div>
                              </div>
                              <a target="_blank" href="https://sports.betway.com/outcomes/222395369-223433492?s=bw39549&amp;a=bwadid66244" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Betway" target="_blank" class="betslip_event betway wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                           <div class="betfair multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betfair bet-155380" itemprop="result" data-odds="14">£140.00</div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?bookmaker=betfair&amp;device=desktop&amp;bssid=44508;495321&amp;bsmid=924.121816013;924.122055788&amp;affiliateID=2780097" itemprop="url" class="desktop wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect?encoded=http%3A%2F%2Fads.betfair.com%2Fredirect.aspx%3Fpid%3D2780097%26bid%3D9810%26redirecturl%3Dhttps%3A%2F%2Fwww.betfair.com%2Fsport%2F%2523%2Fbetslip%3Fbets%3D924.121816013%7C44508%3B924.122055788%7C495321" itemprop="url" class="mobile wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?ru=http://bit.ly/API-TipsFB-Betfair" target="_blank" class="betslip_event betfair wrapper-signup-button">
                                 <div class="signup-button">£100</div>
                              </a>
                           </div>
                           <div class="william-hill multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo william-hill bet-155380" itemprop="result" data-odds="13.86">£138.60</div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?bookmaker=william-hill&amp;multiple=TRUE&amp;theIDs=~~1819215345~~1819194327&amp;affiliateID=191329964" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-WH" target="_blank" class="betslip_event william-hill wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <!--ladbrokes--> 
                     <a class="fb-sb-wrapper in-content bg-offset-ladbrokes ppc-ladbrokes advert_event" title=" Get a Free Bet Up To £50!" target="_blank" href="http://bit.ly/FSTTipsSectionLads50">
                        <div class="fb-sb-head bg-ladbrokes">
                           <h4> Get a Free Bet Up To £50!</h4>
                        </div>
                        <div class="fb-sb-content">
                           <div class="fb-sb-subhead">+ Acca Insurance, Cash Out &amp; Daily Odds Boosts<br><span>New customers only. T&amp;Cs apply, 18+. begambleaware.org</span></div>
                           <div class="fb-sb-button-wrapper">
                              <div class="fb-sb-button">Claim Now</div>
                           </div>
                        </div>
                     </a>
                     <div class="ui horizontal divider">
                        <i class="ui white custom football icon" style="height:28px !important; background-position: -85px 84px !important;"></i> Correct Score
                     </div>
                     <div itemscope="" itemtype="http://schema.org/Product" class="fst red segment tip-content">
                      <?php $args = array( 'post_type' => 'post','category_name'=>'both-teams-to-score-and-win-accumulator','posts_per_page' => 1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
                        <h2 itemprop="name" class="ui header" style="margin-top:0px;"><?php the_title();?></h2>
                        <div itemprop="description" style="color:#333"> <?php the_content();?> </div>
                          <?php endwhile;?>
                        <div itemscope="" itemprop="potentialAction" itemtype="http://schema.org/Action" class="wrapper-multi-betslip">
                           <div class="stake-header">
                              <div class="stake-selector-wrapper">
                                 <select id="stake-selector" name="stake-selector" class="stake-selector" data-betid="155383">
                                    <option value="10" selected="">£10.00</option>
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
                           <div class="william-hill multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo william-hill bet-155383" itemprop="result" data-odds="110.5">£1105.00</div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?bookmaker=william-hill&amp;multiple=TRUE&amp;theIDs=~~1819176663~~1820318551&amp;affiliateID=191329964" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-WH" target="_blank" class="betslip_event william-hill wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                           <div class="betfair multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betfair bet-155383" itemprop="result" data-odds="102">£1020.00</div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?bookmaker=betfair&amp;device=desktop&amp;bssid=7;6&amp;bsmid=924.121860518;924.121941771&amp;affiliateID=2780097" itemprop="url" class="desktop wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect?encoded=http%3A%2F%2Fads.betfair.com%2Fredirect.aspx%3Fpid%3D2780097%26bid%3D9810%26redirecturl%3Dhttps%3A%2F%2Fwww.betfair.com%2Fsport%2F%2523%2Fbetslip%3Fbets%3D924.121860518%7C7%3B924.121941771%7C6" itemprop="url" class="mobile wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?ru=http://bit.ly/API-TipsFB-Betfair" target="_blank" class="betslip_event betfair wrapper-signup-button">
                                 <div class="signup-button">£100</div>
                              </a>
                           </div>
                           <div class="betvictor multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betvictor bet-155383" itemprop="result" data-odds="97.75">£977.50</div>
                              </div>
                              <a target="_blank" href="http://www.betvictor.com/sports/en/coupon/remotes?outcomeids=[50455843900,50352727900]&amp;btagid=90663564" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-BV" target="_blank" class="betslip_event betvictor wrapper-signup-button">
                                 <div class="signup-button">£40</div>
                              </a>
                           </div>
                           <div class="coral multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo coral bet-155383" itemprop="result" data-odds="88">£880.00</div>
                              </div>
                              <a target="_blank" href="http://sports.coral.co.uk/bet_coral?action=AddSelection&amp;ev_oc_id=674419986&amp;ev_oc_id=683142092&amp;creferer=BTAG:a_24892b_12680" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Coral" target="_blank" class="betslip_event coral wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                           <div class="ladbrokes multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo ladbrokes bet-155383" itemprop="result" data-odds="88">£880.00</div>
                              </div>
                              <a target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect?encoded=http%3A%2F%2Fonline.ladbrokes.com%2FpromoRedirect%3Fkey%3Dej0xNTQzODU5MyZsPTE1NDM4NjAxJnA9NzAxNTEz%26selections%3D648371020%2C652790019" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Lads" target="_blank" class="betslip_event ladbrokes wrapper-signup-button">
                                 <div class="signup-button">£50</div>
                              </a>
                           </div>
                           <div class="betway multi-betslip">
                              <div class="wrapper-betslip-logo">
                                 <div class="betslip-logo betway bet-155383" itemprop="result" data-odds="85">£850.00</div>
                              </div>
                              <a target="_blank" href="https://sports.betway.com/outcomes/223170950-222403633?s=bw39549&amp;a=bwadid66244" itemprop="url" class="wrapper-betslip-button disabled">
                                 <div class="betslip-button">Add to betslip</div>
                              </a>
                              <a href="http://bit.ly/API-TipsFB-Betway" target="_blank" class="betslip_event betway wrapper-signup-button">
                                 <div class="signup-button">£30</div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <!--betfair--> 
                     <a class="fb-sb-wrapper in-content bg-offset-betfair ppc-betfair advert_event" title=" Get up to £100 in Free Bets!" target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?ru=http://bit.ly/FSTTipsSectionBF">
                        <div class="fb-sb-head bg-betfair">
                           <h4> Get up to £100 in Free Bets!</h4>
                        </div>
                        <div class="fb-sb-content">
                           <div class="fb-sb-subhead">+ Weekly Winning Accumulator Bonuses<br><span>New customers only. T&amp;Cs apply, 18+. begambleaware.org</span></div>
                           <div class="fb-sb-button-wrapper">
                              <div class="fb-sb-button">Claim Now</div>
                           </div>
                        </div>
                     </a>
                     <div class="ui horizontal divider">Match Goals Accumulator</div>
                     <div class="fst ui segment">Tips will be updated at 12pm, check out our <a href="http://stagingonline.net/projects/freesupertips/previews/">betting previews</a> and stats while you wait or get yourself <a href="http://stagingonline.net/projects/freesupertips/free-bets/">free bets</a> ready to join in risk free.<br></div>
                     <!--betfred--> 
                     <a class="fb-sb-wrapper in-content bg-offset-betfred ppc-betfred advert_event" title=" Bet £10, Get £60 In Bonuses!" target="_blank" href="http://bit.ly/Betfred60FSTtips">
                        <div class="fb-sb-head bg-betfred">
                           <h4> Bet £10, Get £60 In Bonuses!</h4>
                        </div>
                        <div class="fb-sb-content">
                           <div class="fb-sb-subhead">£30 Free Bet &amp; £30 In Casino Bonuses<br><span>New customers only. T&amp;Cs apply, 18+. begambleaware.org</span></div>
                           <div class="fb-sb-button-wrapper">
                              <div class="fb-sb-button">Claim Now</div>
                           </div>
                        </div>
                     </a>
                     <!-- Todays Featured Matches -->
<div id="featured-previews">
   <h3>Todays Featured Matches</h3>
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
   <a href="/previews/" class="view-all-prevs">View All Match Tips</a>
</div>
<!-- End -->
                     <div class="ui horizontal divider">Bankroll Builder</div>
                     <div class="fst ui segment">Tips will be updated at 12pm, check out our <a href="http://stagingonline.net/projects/freesupertips/previews/">betting previews</a> and stats while you wait or get yourself <a href="http://stagingonline.net/projects/freesupertips/free-bets/">free bets</a> ready to join in risk free.<br></div>
                     <div class="mobile" style="width:100%;">
                        <div class="ui horizontal divider" id="freebets_section"> <i class="ui white custom cash icon"></i> Free Bets &amp; Offers</div>
                        <div id="freebet-sidebar">
                           <ul class="tabs showCasino">
                              <li class="tab-link current" data-tab="tab-1">Free Bets</li>
                              <li class="tab-link" data-tab="tab-2">Special Offers</li>
                              <li class="tab-link" data-tab="tab-3">Casino Offers</li>
                           </ul>
                           <div class="tab-1 tab-content current fb-sb-list">
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
                              <a class="fb-sb-wrapper bg-offset-betfair side-bet-ext_event ppc-betfair" title="Get up to £100 in Free Bets!" target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?ru=http://bit.ly/FSTSidebarBF">
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
                              <a class="fb-sb-wrapper bg-offset-888 side-bet-ext_event ppc-888" title="Bet £10, Get £30 + £10 Free Bets on Arsenal vs Chelsea!" target="_blank" href="http://bit.ly/bet10get30ArsCheFST">
                                 <div class="fb-sb-head bg-888">
                                    <h4>Bet £10, Get £30 + £10 Free Bets on Arsenal vs Chelsea!</h4>
                                 </div>
                                 <div class="fb-sb-content">
                                    <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                    <div class="fb-sb-button-wrapper">
                                       <div class="fb-sb-button">Claim Now</div>
                                    </div>
                                 </div>
                              </a>
                              <a class="fb-sb-wrapper bg-offset-ladbrokes side-bet-ext_event ppc-ladbrokes" title="28/1 – Any team to win a corner in Arsenal vs Chelsea!" target="_blank" href="http://bit.ly/28to1ArsCheLads">
                                 <div class="fb-sb-head bg-ladbrokes">
                                    <h4>28/1 – Any team to win a corner in Arsenal vs Chelsea!</h4>
                                 </div>
                                 <div class="fb-sb-content">
                                    <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                    <div class="fb-sb-button-wrapper">
                                       <div class="fb-sb-button">Claim Now</div>
                                    </div>
                                 </div>
                              </a>
                              <a class="fb-sb-wrapper bg-offset-coral side-bet-ext_event ppc-coral" title="25/1 – A goal to be scored in Arsenal vs Chelsea!" target="_blank" href="http://bit.ly/CoralFootball4">
                                 <div class="fb-sb-head bg-coral">
                                    <h4>25/1 – A goal to be scored in Arsenal vs Chelsea!</h4>
                                 </div>
                                 <div class="fb-sb-content">
                                    <div class="fb-sb-subhead">Paid in Free Bets!<br><span>New customers only. T&amp;Cs apply, 18+, begambleaware.org</span></div>
                                    <div class="fb-sb-button-wrapper">
                                       <div class="fb-sb-button">Claim Now</div>
                                    </div>
                                 </div>
                              </a>
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
                              <a class="fb-sb-wrapper bg-offset-betfair side-bet-ext_event ppc-betfair" title="20% Bonus Profit With Acca Edge" target="_blank" href="http://stagingonline.net/projects/freesupertips/freebet-redirect/?ru=http://bit.ly/BetfairExistingFST">
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
                     <div class="ui horizontal divider">Outright Winner</div>
                     <div class="fst ui segment">Tips will be updated at 12pm, check out our <a href="http://stagingonline.net/projects/freesupertips/previews/">betting previews</a> and stats while you wait or get yourself <a href="http://stagingonline.net/projects/freesupertips/free-bets/">free bets</a> ready to join in risk free.<br></div>
                     <div class="ui horizontal divider">In Play Football Tips</div>
                     <div class="fst ui segment">
                        <p>
                           Never miss an inplay bet again with the FreeSuperTips app. <!--We bring the best football betting tips straight to YOU for FREE! Claim over £500 in free bets* and join in the BOOMS now!-->
                        </p>
                        <a class="app-tracking-apple" href="https://itunes.apple.com/gb/app/freesupertips/id1154565903?mt=8" target="_blank"> <img class="app-tracking-apple" src="http://stagingonline.net/projects/freesupertips/wp-content/uploads/2018/01/app-store-badge.png"> </a> <a class="app-tracking-android" href="http://stagingonline.net/projects/freesupertips/app-android/"> <img class="app-tracking-android" src="http://stagingonline.net/projects/freesupertips/wp-content/uploads/2018/01/android-badge-4.png"> </a>
                     </div>
                     <div class="ui segment">
                        <div class="half-col">
                           <p>Follow our tips by adding them to your bet slip automatically. Enter your stake and place the bet to follow, simple! Use one of our <a href="http://stagingonline.net/projects/freesupertips/free-bets/">free bets</a> to follow risk free.</p>
                        </div>
                        <div class="half-col">
                           <ul class="tips-meta-links">
                              <li><strong><a href="http://stagingonline.net/projects/freesupertips/how-to-follow-our-football-tips/">How to follow our Football Tips</a></strong></li>
                              <li><strong><a href="http://stagingonline.net/projects/freesupertips/5819-profit-2015-2016-football-season/">Football Tips - £5,819 profit this season</a></strong></li>
                              <li><strong><a href="https://twitter.com/FootySuperTips" target="_blank">Follow us on Twitter</a></strong></li>
                           </ul>
                        </div>
                     </div>
                     <!--<div class="mobile" style="width:100%;"></div> -->
                     <div class="fst segment">
                        <?php $args = array( 'post_type' => 'post','category_name'=>'football-tips','posts_per_page' => 1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
          ?>  
          <!-- <h1><?php the_title();?></h1> -->
   <?php the_content();?>
 <?php endwhile;?>
                     </div>
                  </div>
                  <!-- Twitter single-event website tag code --> <script src="./Free Football Betting Tips &amp; Football Predictions for Today &amp; Weekend_files/oct.js.download" type="text/javascript"></script> <script type="text/javascript">twttr.conversion.trackPid('nuek1', { tw_sale_amount: 0, tw_order_quantity: 0 });</script> 
                  <noscript> &lt;img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nuek1&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0" /&gt; &lt;img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nuek1&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0" /&gt; </noscript>
                  <!-- End Twitter single-event website tag code -->
               </div>
               <!-- end col -->
              <div class="six wide column full height">
                  <div class="desktop">
                     <div class="ui horizontal divider" id="freebets_section"> <i class="ui white custom cash icon"></i> Free Bets &amp; Offers</div>
                     <div id="freebet-sidebar">
                        <ul class="tabs showCasino">
                           <li class="tab-link current" data-tab="tab-1">Free Bets</li>
                           <li class="tab-link" data-tab="tab-2">Special Offers</li>
                           <li class="tab-link" data-tab="tab-3">Casino Offers</li>
                        </ul>
                        
                           <?php get_sidebar('1');?>
                        
             
                        
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
               <!-- end col -->
            </div>
         </div>
      </div>
      <iframe id="sumome-jquery-iframe" title="Sumo Hidden Content" style="display: none;" src="./Free Football Betting Tips &amp; Football Predictions for Today &amp; Weekend_files/saved_resource(1).html"></iframe>
      <div class="featured-bet-wrapper fb-betway" style="display: block;">
         <img id="fb-tab" src="./Free Football Betting Tips &amp; Football Predictions for Today &amp; Weekend_files/close-icon.png" alt=""> 
         <a id="featured-bet" class="sidebar-bet_event ppc-betway feat-bet-bookie" title="Get up to a £30 Free Bet!" target="_blank" href="http://bit.ly/FSTMobileBannerBetway">
            <div class="feat-bet-bookie bg-betway"></div>
            <div class="feat-bet-content bg-offset-betway">
               <div class="feat-bet-text">
                  <h4>Get up to a £30 Free Bet!</h4>
                  <span>+ £10 Free Bet Every Week</span>
                  <div class="feat-bet-terms">New customers only. T&amp;Cs apply, 18+, begambleaware.org</div>
               </div>
               <div class="feat-bet-button-wrapper">
                  <div class="feat-bet-button">Claim Now</div>
               </div>
            </div>
         </a>
      </div>
      <script data-cfasync="false" src="./Free Football Betting Tips &amp; Football Predictions for Today &amp; Weekend_files/email-decode.min.js.download"></script><script>$(document).ready(function checkCookie(){
         var fbCookie=getCookie("cookieFB");
         if (fbCookie!="Hide Featured Bet 36028") {
          $('.featured-bet-wrapper').show();
          $('#fb-tab').click(function(){
            $('.featured-bet-wrapper').hide('','',setCookie('cookieFB'));
          });
         }
         });
         
         function getCookie(cname) {
         var name = cname + "=";
         var ca = document.cookie.split(';');
         for(var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
         }
         return "";
         }
         function setCookie(cname) {
         var expTime = new Date();
         expTime.setTime(expTime.getTime() + (6*60*60*1000)); //add 6 hours to current time
         var expires = "expires="+ expTime.toUTCString();
         document.cookie = cname + "=Hide Featured Bet 36028;" + expires;
         }
      </script>  <script>$(document).ready(function(){
         $('.menu-top-container li > .custom-sub').parent().click(function() {
           var submenu = $(this).children('.custom-sub');
           var allsubs = $('.menu-top-container li > .custom-sub');
           if ($(allsubs).is(':visible')) {
            $(allsubs).slideUp(300);
           }
           if ( $(submenu).is(':hidden') ) {
          $(submenu).slideDown(300);
           } else {
          $(submenu).slideUp(300);
           }
         });
         });
      </script> <script>$( document ).ready(function() {
         $("#mobilemenubutton").click(function() {
          $("#mobilemenutarget" ).slideToggle();
         });
         });
      </script> <script>// BIT.LY Tracking added 25th Sept 2015
         var links = document.getElementsByTagName('a');
         
         for (var i = 0; i < links.length; i++) {
          if (links[i].getAttribute("href").indexOf("http://bit.ly") > -1
            || links[i].getAttribute("href").indexOf("http://pdy.pr") > -1) {
            links[i].onclick = function () {
              var hreflink = this.getAttribute("href");
              var currurl = window.location.href;
              ga('send', 'event', 'affiliate link', hreflink, currurl);
            }
          }
         }
      </script> <!-- facebook script -<div id="fb-root"></div> <script>(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=239203552842746";
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));</script> -- end facebook script --><!-- START ONCLICK FUNCTION FOR TOP MENU AND BUTTONS --> <script>$(function() {
         $("div.menu a.item").click(function() {
           $(this).addClass("active");
         });
         $("a.qLink").click(function() {
           $(this).addClass("active");
         });
         $("a.ui.black.button").click(function() {
           $(this).addClass("active");
         });
         $("p.view-post-button a").click(function() {
           $(this).addClass("active");
         });
         $(".mobile.ui.inverted.fluid.menu a.item").click(function() {
           $(this).addClass("active");
         });
         });
      </script> <!-- END ONCLICK FUNCTION FOR TOP MENU AND BUTTONS --><!-- ADD DIFFERENT CLASSES TO PORTRAIT AND LANDSCAPE IMAGES --> <script>$(document).ready(function() {
         var findImg = $("#featured-image img");
         if ((findImg.width()/2) > findImg.height()){
             $("#featured-image img").addClass("fullwidthImage");
             $(".sharing-icons.bot").addClass("show");
         } else if (findImg.width() > findImg.height()){
             $("#featured-image img").addClass("landscapeImage");
             $(".sharing-icons.bot").addClass("show");
         } else if (findImg.width() <= findImg.height()){
             $("#featured-image img").addClass("portraitImage");
             $(".sharing-icons.top").addClass("show");
         }
         });
      </script> <!-- END DIFFERENT CLASSES TO PORTRAIT AND LANDSCAPE IMAGES --> <script>$(window).on('resize',function() {
         if ($(window).width() > 1140) {
          var adWidth = (($(window).width() - 1140) / 2);
          $('#right-gutter-to').css('width', adWidth);
          $('#left-gutter-to').css('width', adWidth);
         }
         }).trigger('resize');
      </script> <!-- twitter script --> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
         if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
         js.src="//platform.twitter.com/widgets.js";
         fjs.parentNode.insertBefore(js,fjs);}
         }(document,"script","twitter-wjs");
      </script> <!-- end twitter script --><!-- betslip ajax returns --> <script>$(document).ready(function(){
         $('.stake-selector').each(function(){
          var betId = $(this).data('betid');
          $(this).change(function(e){
            var stake = $(this).val();
            $('.bet-'+betId).each(function(){
              var odds = $(this).data('odds');
              var returns = (stake * odds).toFixed(2);
              $(this).html('£'+returns);
            });
          });
         });
         });
      </script> <!-- new api stake selector --> <script>function calcReturns(val, odds, betID) {
         var returns = val * odds;
         $(".betslip-logo.bet-"+betID).text("£"+returns.toFixed(2));
         }
      </script> <script type="text/javascript">function closeTipOddsPop(betID) {
         $("#oddsPopWrapper-"+betID).addClass('hidden');
         }
         function tipOddsPop(betID) {
         $("#oddsPopWrapper-"+betID).removeClass('hidden');
         }
      </script><script id="wappalyzer" src="chrome-extension://gppongmhjkpfnbhagpmjfkannfbllamg/js/inject.js"></script><a href="javascript:void(0);" title="Sumo" style="background-color: rgb(0, 115, 183); border-radius: 3px 0px 0px 3px; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 10px; position: fixed; z-index: 2147483647; padding: 0px; width: 44px; height: 40px; text-indent: -10000px; opacity: 1; display: block !important; top: 40px; right: -40px;"><span style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden; border-radius: 3px 0px 0px 3px; margin-left: 4px; margin-right: 0px;">Sumo</span><span style="display: block; width: 40px; height: 40px; background: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoxZDQ2MjI4YS03NWY2LTRkZTQtOGJjYy1hODc1NjRkMjYxYTUiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDQ3MUVFMDFFMjVDMTFFNjlFQjhBRjdGODU5MDJBMDUiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDQ3MUVFMDBFMjVDMTFFNjlFQjhBRjdGODU5MDJBMDUiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKE1hY2ludG9zaCkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxZDQ2MjI4YS03NWY2LTRkZTQtOGJjYy1hODc1NjRkMjYxYTUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MWQ0NjIyOGEtNzVmNi00ZGU0LThiY2MtYTg3NTY0ZDI2MWE1Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+8JtvywAAAKhQTFRFzOPxSJvLA3W4Mo7FBna5w97u8vj7EHy8a67VhbzdsdTpVaLPh73d9/v9C3m6QZfJbq/WXKbR3u32JIfB3ez1KorDir/eBHW4+/3+rtPoZarUG4K/LIvDDnu7ocvkf7nbdrTY9fr8E328WKPQO5PITJ3MPpXJstXptdbq+Pv9cbHXaq3VU6HOkMLgnMnjDHq62uv1/P3+6/T53Oz1cLDX/f7+AHO3////ptOZ5QAAADh0Uk5T/////////////////////////////////////////////////////////////////////////wA7XBHKAAAAmUlEQVR42sSRRxLCMAxFRSq9907ovebr/jdDMWYGxmZL3sIqbyFbJv4B/VlkVlerKALTD3G46Mx3AOR1UZ/TsDxW6W0gfYRNVfTCFu2AWpAMgMItMW+zQJU2UjWI29D0+e5KWNPMk+A9Om+B/UgOJyCuwMJCrpuziYkIsglfRByZ/XM3eXnBFEu1kpMpjq9dxQYp/OAXTwEGAB7Rc1xVnPemAAAAAElFTkSuQmCC&quot;) 8px 8px no-repeat white; margin-left: 4px; border-radius: 3px 0px 0px 3px; margin-right: 0px;"></span></a><iframe style="display: none;" src="./Free Football Betting Tips &amp; Football Predictions for Today &amp; Weekend_files/saved_resource(2).html"></iframe>
      <div style="position:fixed;top:0;left:0;overflow:hidden;"><label for="focus_retriever" style="position:absolute;left:-1000px;">Focus Retriever</label><input style="position:absolute;left:-1000px;" type="text" name="focus_retriever" value="" id="focus_retriever" readonly="true"></div>
      <form id="gclp-frame-form" target="gclp-frame" method="post" style="display: none;"></form>
      <iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;" title="Twitter analytics iframe" src="./Free Football Betting Tips &amp; Football Predictions for Today &amp; Weekend_files/saved_resource(3).html"></iframe>
      <div class="sumome-share-client-wrapper sumome-share-client-wrapper-left-page sumome-share-client-light sumome-share-client-small" style="top: 219px;">
         <div class="sumome-share-client-show"><span></span></div>
         <div data-sumome-share-pos="lp" class="sumome-share-client sumome-share-client-left-page sumome-share-client-light sumome-share-client-small"><a title="Facebook" class="sumome-share-client-animated sumome-share-client-share" data-sumome-share="facebook" href="javascript:void(0);" style="background: rgb(59, 89, 152); color: rgb(255, 255, 255);"><img src="./Free Football Betting Tips &amp; Football Predictions for Today &amp; Weekend_files/facebook-white-60.png" alt="Facebook"></a><a title="Twitter" class="sumome-share-client-animated sumome-share-client-share" data-sumome-share="twitter" href="javascript:void(0);" style="background: rgb(0, 172, 237); color: rgb(255, 255, 255);"><img src="./Free Football Betting Tips &amp; Football Predictions for Today &amp; Weekend_files/twitter-white-60.png" alt="Twitter"></a><a title="Google+" class="sumome-share-client-animated sumome-share-client-share" data-sumome-share="googleplus" href="javascript:void(0);" style="background: rgb(221, 75, 57); color: rgb(255, 255, 255);"><img src="./Free Football Betting Tips &amp; Football Predictions for Today &amp; Weekend_files/googleplus-white-60.png" alt="Google+"></a><a title="Pinterest" class="sumome-share-client-animated sumome-share-client-share" data-sumome-share="pinterest" href="javascript:void(0);" style="background: rgb(203, 32, 39); color: rgb(255, 255, 255);"><img src="./Free Football Betting Tips &amp; Football Predictions for Today &amp; Weekend_files/pinterest-white-60.png" alt="Pinterest"></a><a title="Email" class="sumome-share-client-animated sumome-share-client-share" data-sumome-share="email" href="javascript:void(0);" style="background: rgb(170, 170, 170); color: rgb(255, 255, 255);"><img src="./Free Football Betting Tips &amp; Football Predictions for Today &amp; Weekend_files/email-white-60.png" alt="Email"></a></div>
         <div class="sumome-share-client-hide"><span></span></div>
      </div>
   </body>
</html>
<?php get_footer(); ?>