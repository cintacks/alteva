<?php if (current_post_is_category()) : ?>
  <div class="row"><div class="span6 more-listing">
    <span class="more-text">More <?php echo current_category_plural(); ?></span>
    <span class="more-title mobile blue"><?php echo current_category_plural(); ?></span>
    <?php echo get_more_posts_of_same_type(); ?>
  </div></div>
<?php endif; ?>

<?php $top_level_pages = array('solutions', 'services', 'industries'); ?>
<?php if(in_array(current_page(), $top_level_pages)) : ?>
  <?php $label = current_page_pod_label_plural(); ?> 
  <div class="row"><div class="span6 more-listing">
    <span class="more-text">More <?php echo $label; ?></span>
    <span class="more-title mobile blue"><?php echo $label; ?></span>
    <ul class="other-categories"><?php echo solcat(); ?></ul>
  </div></div>
<?php endif; ?>
