<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->
  <div class="navbar-inverse">
    <div class="navbar-inner">
    <div>
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <div class="nav-icons">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </div>
        <span class="mobilenavtext">Main Nav</span>
      </a>
    </div>
  </div>
  </div>
  <div id="topbar">
    <div class="maindiv">
      <div class="span1"></div>
      <div class="span8">
            <nav class="nav-main" role="navigation">
            <?php
            if (has_nav_menu('top_navigation')) :
              wp_nav_menu(array('theme_location' => 'top_navigation', 'menu_class' => 'nav nav-pills'));
            endif;
            ?>
            </nav>
          </div>
          <div class="span3">
           <?php get_template_part('templates/searchform'); ?> 
        </div>
      </div>
  </div>

  <div class="wrap container" role="document">
    
    <div class="content row">
      

    </div> 

   <div class="content row">   
     <div class="main span14 <?php //echo roots_main_class(); ?>" role="main">
     
       <span class="wide-logo"><?php get_template_part('templates/site-logo'); ?></span>
       <?php
         do_action('get_header');
         
         if (current_theme_supports('bootstrap-top-navbar')) {
           get_template_part('templates/header-top-navbar');
         } else {
           get_template_part('templates/header');
         }
        ?>
        <span class="mobile-logo"><?php get_template_part('templates/site-logo'); ?></span>

<?php
include roots_template_path(); 
get_template_part('templates/pods', 'more-of-same-type');
get_template_part('templates/pods', 'listing');


?>

      </div><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

<script type="text/javascript">
  (function() {
    var didInit = false;
    function initMunchkin() {
      if(didInit === false) {
	didInit = true;
	Munchkin.init('892-SSF-453');
      }
    }
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = '//munchkin.marketo.net/munchkin.js';
    s.onreadystatechange = function() {
      if (this.readyState == 'complete' || this.readyState == 'loaded') {
	initMunchkin();
      }
    };
    s.onload = initMunchkin;
    document.getElementsByTagName('head')[0].appendChild(s);
  })();
</script>
</body>
</html>
