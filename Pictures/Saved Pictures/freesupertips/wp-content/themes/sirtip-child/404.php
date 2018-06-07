<?php
   // Template Name: Previews
   ?>
<?php get_header(); ?>
<div class="wrapper" id="to-wrapper">
<!-- remove comment to run takeover -->
<div class="inner-wrapper" id="content-container">
   <div class="ui stackable grid" id="content">
      <div class="ten wide column">
        <center><img src="http://stagingonline.net/projects/freesupertips/wp-content/uploads/2018/01/404-page-error.png" alt="404 Page Not Found"></center>
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