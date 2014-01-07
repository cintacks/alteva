<?php if (current_post_is_category()) : ?>
  <div class="row"><div class="span6 more-listing">
    <span class="more-text">More <?php echo current_category_plural(); ?></span>
    <span class="more-title mobile blue"><?php echo current_category_plural(); ?></span>
    <?php echo get_more_posts_of_same_type(); ?>
  </div></div>
<?php endif; ?>

<?php if (current_page() == 'solutions') : ?>
   <div class="row"><div class="span6 more-listing">
    <span class="more-text">More Solutions</span>
    <span class="more-title mobile blue">Solutions</span>
	<ul class="other-categories"><?php echo solcat(); ?></ul>

  </div></div>
<?php endif; ?>

<?php if (current_page() == 'services') : ?>
   <div class="row"><div class="span6 more-listing">
    <span class="more-text">More Services</span>
    <span class="more-title mobile blue">Services</span>
	<ul class="other-categories"><?php echo solcat(); ?></ul>

  </div></div>
<?php endif; ?>

<?php if (current_page() == 'industries') : ?>
   <div class="row"><div class="span6 more-listing">
    <span class="more-text">More Industries</span>
    <span class="more-title mobile blue">Industries</span>
	<ul class="other-categories"><?php echo solcat(); ?></ul>

  </div></div>
<?php endif; ?>