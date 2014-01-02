<?php while (have_posts()) : the_post(); ?>
<div class="row">
  <div class="span6 main-content">
    <?php 
      if(current_page() == 'support') {
        $message = get_current_network_status();
        if($message != "") {
          echo "<div class='network-status'>{$message}<div id='close-alert'></div></div>";
        }
      }
     ?>

    <?php the_content(); ?>


    <?php if(current_page() == 'company/careers/careers') : ?>
      <?php get_template_part('templates/pods', 'career-listing'); ?>
    <?php endif; ?>


    <?php if(current_post_type() == 'career') : ?>
      <?php get_template_part('templates/careers', 'custom-fields'); ?>
    <?php endif; ?>
    
  </div>
  <div class="span3 sidebar-content">
    <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
    <?php endif; ?>
  </div>
</div>

<?php get_template_part('templates/content', 'page-bottom'); ?>

<?php endwhile; ?>
