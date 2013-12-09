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

<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
