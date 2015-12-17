<?php
global $hide_author;
global $hide_meta;
global $extra_class;
?>

<article class="teaser <?php echo $extra_class; ?>">
  <header class="teaser__header">
    <h3 class="teaser__title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>

    <?php if (!$hide_meta): ?>
      <p class="teaser__date">Publicerad <?php the_time('j F Y'); ?></p>
    <?php endif; ?>
  </header>

  <section class="teaser__body">
    <?php echo the_excerpt(); ?>
  </section>

  <?php if (!$hide_meta && !$hide_author): ?>
    <section class="teaser__footer">
      <div class="teaser__author">
        <i class="teaser__author-avatar"><?php echo get_avatar(get_the_author_meta('ID'), 50); ?></i>
        <p class="teaser__author-name"><strong><?php echo the_author_posts_link(); ?></strong></p>
        <p class="teaser__author-description"><?php echo get_the_author_meta('description'); ?></p>
      </div>
    </section>
  <?php elseif (!$hide_author): ?>
    <p><a href="<?php echo the_permalink(); ?>"> Mer om <?php the_title();?></a></p>
  <?php endif; ?>
</article>
