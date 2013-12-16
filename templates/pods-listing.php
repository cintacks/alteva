<?php

if($pod = get_current_pod()) {
  
  switch($pod->pod) {
  case 'industry_category':
    $pod_listing_type = 'industry';
    break;
  case 'service_category':
    $pod_listing_type = 'service';
    break;
  case 'solution_category':
    $pod_listing_type = 'solution';
    break;
  default:
    return;
 }

  $listing = pods(
    $pod_listing_type, 
    array(
      'where' => 't.post_status = "Publish" AND category.id = '.$pod->field('ID'),
      'orderby' => 'CAST(display_order.meta_value AS SIGNED) ASC'
    )
  );

  $position = 'left';
}
?>  

<?php if(isset($listing)) : ?>
<div class="pod-listing">
<?php while($listing->fetch()) : ?>
  <div class="row listing">

  <?php if($position == 'left') : ?>
    <div class="span6 listing-text left">
      <h2 class="up"><?php echo $listing->display('title') ?></h2>
      <p><?php echo get_custom_excerpt($listing->display('content')); ?></p>
    </div>
     <div class="span6 listing-image right">
      <?php echo pods_image(get_post_meta($listing->field('ID'), 'image', true), 'original') ?>
    </div>
    <?php $position = 'right'; ?>

  <?php else: ?>  
    <div class="span6 listing-image left">
      <?php echo pods_image(get_post_meta($listing->field('ID'), 'image', true), 'original') ?>
    </div>
    <div class="span6 listing-text right">
      <h2 class="up"><?php echo $listing->display('title') ?></h2>
      <p><?php echo get_custom_excerpt($listing->display('content')); ?></p>
    </div>
   <?php $position = 'left'; ?>
  <?php endif; ?>
  </div>
<?php endwhile; ?>
</div>
<?php endif; ?>