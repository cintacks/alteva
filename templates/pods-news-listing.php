<?php
$news = pods('news_article', array('limit' => 5, 'orderby' => 'pub_date DESC')); 
?>
<div class="row category-listing-label">Investor Overview</div>
<div class="news-listing">  
    <?php while($news->fetch()) : ?>
      <div class="row"><div class="span12">
      <div class="news-date"><?php echo date('F j, Y', strtotime($news->field('pub_date'))) ?></div>
      <div class="news-source"><?php echo $news->display('source') ?></div>
      <a href="<?php echo $news->field('permalink') ?>" class="title-link"><?php echo $news->display('title'); ?></a>
      <?php echo $news->display('excerpt'); ?>
      </div></div>
    <?php endwhile; ?>
      <?php echo $news->pagination(); ?>
</div>
