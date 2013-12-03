<?php
$press = pods('press_release', array('limit' => 5, 'orderby' => 'pub_date DESC')); 
?>
<div class="row category-listing-label">Latest Press Releases</div>
<div class="news-listing">  
    <?php while($press->fetch()) : ?>
      <div class="row"><div class="span12">
      <div class="news-date"><?php echo date('F j, Y', strtotime($press->field('pub_date'))) ?></div>
      <a href="<?php echo $press->field('permalink') ?>" class="title-link"><?php echo $press->display('title'); ?></a>
      <?php echo $press->display('excerpt'); ?>
      </div></div>
    <?php endwhile; ?>
      <?php echo $press->pagination(); ?>
</div>
