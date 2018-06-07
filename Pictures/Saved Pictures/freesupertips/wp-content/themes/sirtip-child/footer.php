<div class="wrapper" id="footer">
   <div class="inner-wrapper">
      <div class="ui three column stackable grid foot-wrap">
         <div class="column foot foot-logo-social">
            <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
         </div>
         <div class="column foot foot-sports">

             <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
             
         </div>
         <div class="column foot foot-football">
           <?php dynamic_sidebar( 'third-footer-widget-area' ); ?> 
         </div>
      </div>
      <div class="foot-imp-links">
         <p><a href="/terms-conditions/">Terms &amp; Conditions</a> | <a href="/about-us/">About Us</a> | <a href="/disclaimer/">Disclaimer</a> | <a href="/privacy-policy/">Privacy Policy</a></p>
         <p>Copyright © 2018 Developed by <a href="http://pearl-soft.com">Pearl Soft</a></p>
      </div>
   </div>
</div>
<script>
   $('.sub-menu').hide();
   
   $("a").click(function(){
   
      $(this).parent().children("ul").toggle();
   
   })
</script>
<?php wp_footer(); ?>
</body>
</html>