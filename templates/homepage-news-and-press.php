<?php $news = pods('news_article', array('limit' => 3, 'orderby' => 'pub_date DESC'));  ?>
<div class="row home-bottom span15">  
  <div class="span6 home-news">
    <div class="whitebg">
      <h2 class="light lgrey">Investor</h2> 
      <h1 class="large dgrey">Overview</h1>
    </div>
    <a href="<?php echo get_permalink(get_page_by_path('company/investors/news')); ?>" class="button-lightgrey">View Entire Overview</a>
    <?php while($news->fetch()) : ?>
      <div class="view-row">
        <div class="news-date"><?php echo date('F j, Y', strtotime($news->field('pub_date'))) ?></div>
        <div class="news-source"><?php echo $news->display('source') ?></div>
        <a href="<?php echo $news->field('permalink') ?>" class="newslink"><?php echo $news->display('title'); ?></a>
      </div>
    <?php endwhile; ?>
  </div>
<div class="floathr"></div>
<?php $press = pods('press_release', array('limit' => 3, 'orderby' => 'pub_date DESC')); ?>
  <div class="span6 home-press">
    <div class="whitebg">
      <h2 class="light lgrey">Alteva</h2>
      <h1 class="large dgrey">News</h1>
    </div>
    <a href="<?php echo get_permalink(get_page_by_path('press-releases')); ?>" class="button-lightgrey">View All Alteva News</a>
    <?php while($press->fetch()) : ?>
      <div class="view-row">
        <div class="news-date"><?php echo date('F j, Y', strtotime($press->field('pub_date'))) ?></div>
        <a href="<?php echo $press->field('permalink') ?>" class="presslink"><?php echo $press->display('title'); ?></a>
      </div>
    <?php endwhile; ?>
  </div>
</div>