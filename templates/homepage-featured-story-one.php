<?php 
$story = pods(
  'featured_story', 
  array('limit' => 1, 'where' => 'featured_spot.meta_value = 1')); 
?>

<?php while($story->fetch()) : ?>
  <?php
      $link =  $story->field('read_more_url');
      if(empty($link)) $link = $story->field('permalink');
  ?>
  <div class="span1"></div>
  <div class="row span14" id="featured-story-one">
    <div class="span5 spancontent">
     <h1 class="light lgrey"><?php echo $story->display('subtitle') ?></h1>
     <h1 class="dgrey large"><?php echo $story->display('subtitle2') ?></h1>
     <p><?php echo $story->display('excerpt') ?></p>
     <a href="<?php echo $link; ?>" class="button-blue-light">Learn More</a>
    </div>
    <div class="span7"></div>
  </div>
   <style type="text/css">
    #featured-story-one {
      background: url(<?php echo pods_image_url(get_post_meta($story->field('ID'), 'image', true), 'original');  ?>) 100% 0 no-repeat;
    }
  </style> 
<?php endwhile; ?>
