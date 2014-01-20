<?php while (have_posts()) : the_post(); ?>
<div class="row">
  <div class="span3 sidebar-content">
    <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php include roots_sidebar_path(); ?>
        <?php 
          if(current_page() == 'support') {
            $message = get_current_network_status();
            if($message != "") {
              echo "<div class='network-status'>{$message}</div>";
            }
          }
        ?>
      </aside><!-- /.sidebar -->
    <?php endif; ?>
  </div>
  <div class="span6 main-content">
    <?php if(current_post_type() == 'career') : ?>
      <div id="jobdesc">
        <?php echo "<strong>Job Description:</strong>"; ?>
        <?php the_content(); ?>
      </div>
      <?php else: ?>
        <?php the_content(); ?>
      <?php endif; ?>


    <?php if(current_page() == 'company/careers/careers') : ?>
      <?php get_template_part('templates/pods', 'career-listing'); ?>
    <?php endif; ?>


    <?php if(current_post_type() == 'career') : ?>
      <?php get_template_part('templates/careers', 'custom-fields'); ?>
    <?php endif; ?>

    <?php if(current_page() == 'company/investors/news') : ?>
      <?php get_template_part('templates/pods', 'news-listing'); ?>
    <?php endif; ?>
    
  </div>
  
</div>

<?php get_template_part('templates/content', 'page-bottom'); ?>

<?php endwhile; ?>
