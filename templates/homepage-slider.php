<?php $slides = pods('slide', array('limit' => -1)); ?>

<div class="row">
<div class="pagination-centered" id="slideshow">
  <div class="slides">
  <?php while($slides->fetch()) : ?>
    <div class="slide">  
      <?php echo pods_image(
        get_post_meta($slides->field('ID'), 'image', true ), 
        'original'); ?>

      <h3><?php echo $slides->display('title') ?></h3> 
      
      <div class="slide-subtitle">
        <?php echo $slides->display('subtitle') ?>
      </div>
      
      <a href="<?php echo $slides->field('link'); ?>">Learn More</a> 
   </div>
  <?php endwhile; ?>
  </div>
  
  <a class="slider-prev">Prev</a>
  <a class="slider-next">Next</a>

  <ul class="slider-pager"></ul>
</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  $('#slideshow .slides').cycle({
    prev:  '#slideshow .slider-prev',
    next:  '#slideshow .slider-next', 
    pager: '#slideshow .slider-pager'
  });
});
</script>
