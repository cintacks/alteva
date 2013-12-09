<?php
$pod = pods('career', array('limit' => 25, 'orderby' => 'title ASC')); 
?>
<p></p>
<div class="news-listing">  
  <?php while($pod->fetch()) : ?>
    <div class="row"><div class="xspan12">
      <a href="<?php echo $pod->field('permalink') ?>" class="title-link"><?php echo $pod->display('title'); ?></a>
      <div class="news-date"><?php echo $pod->field('location'); ?></div>
      <?php echo $pod->display('excerpt'); ?>
    </div></div>
  <?php endwhile; ?>
  <?php echo $pod->pagination(); ?>
</div>
