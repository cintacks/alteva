<?php 

$slides = pods('slide', array('limit' => -1));

$data = array(); 

while($slides->fetch()) {
  $data[] = array(
    'id' => $slides->field('ID'),
    'title' => $slides->display('title'),
    'subtitle' => $slides->display('subtitle'),
    'link' => $slides->field('link'),
    'order' => $slides->field('ordering')
  );
}

function sortSlides($slide1, $slide2) {
  if($slide1['order'] == $slide2['order'])
    return 0;

  return ($slide1['order'] > $slide2['order']) ? 1 : -1;
}

usort($data, 'sortSlides');
?>
<div class="row">
<div class="pagination-centered" id="slideshow">
  <div class="slides">
  <?php foreach($data as $slide) : ?>
    <div class="slide">  
      <?php echo pods_image(
        get_post_meta($slide['id'], 'image', true ), 
        'original'
      ); ?>

      <h3><?php echo $slide['title'] ?></h3> 
      
      <div class="slide-subtitle">
        <?php echo $slide['subtitle'] ?>
      </div>
      
      <a href="<?php echo $slide['link']; ?>">Learn More</a> 
   </div>
  <?php endforeach; ?>
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
