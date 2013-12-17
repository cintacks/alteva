<footer class="content-info" role="contentinfo" id="footer"><div class="container">

  

  <div class="row span10">
    <?php echo nav_html('primary_navigation'); ?> <a href="/get-started" class="get-started button-green desktop">Get Started</a>
  </div>

  <div class="row2 span14">
    <div class="mobile-center">
      <div id="footerlogo">Alteva Logo</div>
      <div class="social">
        <a href="https://twitter.com/AltevaInc" class="tw"  target="_blank">Twitter</a>
        <a href="http://www.youtube.com/user/AltevaLLC" class="yt" target="_blank">YouTube</a>
        <a href="http://www.linkedin.com/company/alteva" class="li" target="_blank">LinkedIn</a>
      </div>
    </div>

    <div class="container nav-collapse collapse always-on">
    <nav class="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
      <nav class="nav-main top-mobile" role="navigation">
            <?php
            if (has_nav_menu('top_navigation')) :
              wp_nav_menu(array('theme_location' => 'top_navigation', 'menu_class' => 'nav nav-pills'));
            endif;
            ?>
      </nav>
    </nav>
    <div class="mobile"><a href="/get-started" class="get-started button-green mobile">Get Started</a></div>
  </div>

    <div class="footer-right desktop">
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



  <a id="toTop" href="#" class="desktop">Back to Top</a>

  <?php //dynamic_sidebar('sidebar-footer'); ?>
 
</div></footer>

<?php wp_footer(); ?>