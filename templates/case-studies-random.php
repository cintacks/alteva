<?php 
$case = pods(
  'case_study', 
  array('limit' => 1, 'where' => 'featured.meta_value = 1')); 
?>

<?php while($case->fetch()) : ?>
<div class="row case-study">
  <div class="span5 case-study-image">
    <?php echo pods_image(get_post_meta($case->field('ID'), 'featured_image', true), 'original') ?>
  </div>
  <div class="span6 case-study-body">
    <h2 class="light">Case Study:</h2>
    <h1 class="white large"><?php echo $case->display('title') ?></h1>
    <p><?php echo $case->display('excerpt') ?></p>
    <a class="button-white" href="<?php echo $case->field('permalink') ?>">Learn More</a>
    <a class="button-white" href="<?php echo get_permalink(get_page_by_path('case-studies')); ?>">View All Case Studies</a>
  </div>
</div>
<?php endwhile; ?>
