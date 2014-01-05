<header class="banner" role="banner">
  <div class="container nav-collapse collapse">
    <span class="desktop"><a href="/get-started" class="get-started button-green">Get Started</a></span>
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
    <div class="mobile start"><a href="/get-started" class="get-started button-green mobile">Get Started</a></div>
  </div>
</header>