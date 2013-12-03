<?php
$story = pods(
  'featured_story',
  array('limit' => 1, 'where' => 'featured_spot.meta_value = 2'));
?>

<?php while($story->fetch()) : ?>
  <?php
      $link =  $story->field('read_more_url');
      if(empty($link)) $link = $story->field('permalink');
  ?>
  <div class="span1"></div>
  <div class="row span16" id="featured-story-two">
    <div class="span6"></div>
    <div class="span6 spancontent">
      <h1 class="light lgrey"><?php echo $story->display('title') ?></h3>
      <h1 class="dgrey large"><?php echo $story->display('subtitle') ?></h3>
      <p><?php echo $story->display('excerpt') ?></p>
      <a href="<?php echo $link; ?>" class="button-blue-dark">Learn More</a>
    </div>
  </div>
  <style type="text/css">
    #featured-story-two {
      background: url(<?php echo pods_image_url(get_post_meta($story->field('ID'), 'image', true), 'original');  ?>) no-repeat;
    }  
  </style>
<?php endwhile; ?>
