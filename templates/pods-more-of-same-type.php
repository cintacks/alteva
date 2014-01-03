<?php if (current_post_is_category()) : ?>
  <div class="row"><div class="span6 more-listing">
    <span class="more-text">More <?php echo current_category_plural(); ?></span>
    <span class="more-title mobile blue"><?php echo current_category_plural(); ?></span>
    <?php echo get_more_posts_of_same_type(); ?>
  </div></div>
<?php endif; ?>