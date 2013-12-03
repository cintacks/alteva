<footer class="content-info" role="contentinfo" id="footer"><div class="container">

  

  <div class="row span12">
    <?php echo nav_html('primary_navigation'); ?> <a href="/get-started" class="get-started button-green">Get Started</a>
  </div>

  <div class="row2 span12">
    <div id="footerlogo">Alteva Logo</div>
    <div class="social">
      <a href="https://twitter.com/AltevaInc" class="tw"  target="_blank">Twitter</a>
      <a href="http://www.youtube.com/user/AltevaLLC" class="yt" target="_blank">YouTube</a>
      <a href="http://www.linkedin.com/company/alteva" class="li" target="_blank">LinkedIn</a>
    </div>

    <div class="footer-right">
        <span class="lblue first">
            Alteva Communications
      </span>
          <?php echo nav_html('footer_1'); ?>
        </div>
    </div>

    <div class="row3 row">
       <div class="first">
        <p class="lgrey">&copy; Copyright <?php echo date('Y'); ?>, <?php bloginfo('name'); ?>. All Rights Reserved.</p> 
       </div>
       <div class="first"> 
        <?php echo nav_html('footer_2'); ?> 
        </div>    
    </div>



  <a id="toTop" href="#">Back to Top</a>

  <?php //dynamic_sidebar('sidebar-footer'); ?>
 
</div></footer>

<?php wp_footer(); ?>