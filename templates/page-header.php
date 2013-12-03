<div class="page-header">
  <?php if(!is_front_page() && function_exists('bcn_display')) : ?>
    <div class='breadcrumbs'><?php bcn_display(); ?></div>
  <?php endif; ?>
    
  <h1 class="blue up title"><?php echo roots_title(); ?></h1> 
</div>