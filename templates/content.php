<?php global $post; ?>
<article <?php post_class(); ?>>
  <header>
    <?php if($post->post_type == 'qa_faqs') : ?>
      <h2 class="test entry-title"><?php the_title(); ?></h2>
    <?php else: ?>
      <h2 class="test entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php endif; ?> 
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php if($post->post_type == 'qa_faqs') : ?>
      <?php the_content(); ?>
    <?php else : ?>
      <?php the_excerpt(); ?>
  <?php endif; ?>
  </div>
</article>
