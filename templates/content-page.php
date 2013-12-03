<?php while (have_posts()) : the_post(); ?>
<div class="row">
  <div class="span8 main-content">
    <?php 
      if(current_page() == 'support') {
        $message = get_current_network_status();
        if($message != "") {
          echo "<div class='network-status'>{$message}</div>";
        }
      }
     ?>

    <?php the_content(); ?>

    <?php if(current_post_type() == 'career') : ?>
      <?php get_template_part('templates/careers', 'custom-fields'); ?>
    <?php endif; ?>
    
  </div>
  <div class="span4 sidebar-content">
    <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
    <?php endif; ?>
  </div>
</div>

<?php $content = get_category_listing(); ?>
<?php if(!empty($content)) : ?>
  <?php $label = get_category_listing_label(); ?>
  <?php if($label != '') :?>
  <div class="row category-listing-label"><div>
     <?php echo $label; ?>
  </div></div>
  <?php endif; ?>
  <div class="row category-listing"><div class="">
     <?php echo $content; ?>
  </div></div>
<?php endif; ?>

<?php if(current_page() == 'news') : ?>
    <?php get_template_part('templates/pods', 'news-listing'); ?>
<?php endif; ?>

<?php if(current_page() == 'press-releases') : ?>
    <?php get_template_part('templates/pods', 'press-listing'); ?>
<?php endif; ?>

<?php if(current_page() == 'careers') : ?>
  <?php get_template_part('templates/pods', 'career-listing'); ?>
<?php endif; ?>

  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
