<article id="post-<?php the_ID(); ?>" class="article">
  <header class="article__header">
    <h2 class="article__title"><?php the_title(); ?></h2>
  </header>

  <section class="article__body">
    <?php the_content(); ?>
  </section>

  <footer class="article__footer">
    <section class="article__author">
      <p class="article__date">Uppdaterad den <?php the_modified_time('j F Y'); ?></p>
      <i class="article__avatar"><?php echo get_avatar(get_the_author_meta('ID'), 50);?></i>
      <p class="article__name"><?php the_author(); ?></p>
      <a class="article__email" href="mailto:<?php the_author_email();?>"><?php echo the_author_email(); ?></a>
    </section>
  </footer>
</article>
