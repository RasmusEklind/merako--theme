<?php get_header(); ?>

<main class="main" role="main">
  <section class="section section--single">
    <div class="section__content section__content--single">
      <?php
      while (have_posts()) : the_post();
        if (($post)) {
          get_template_part('partials/content', 'post');
        }
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
