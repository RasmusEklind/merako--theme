<section class="block block--about" id="about">
    <div class="block__content block__content--about">
        <?php $post = get_post(6); ?>
        <h2 class="block__title block__title--contact"><?php echo $post->post_title; ?></h2>
        <?php echo $post->post_content; ?>
    </div>
  <div class="block__divider">
    <?php get_template_part('partials/svg-divider'); ?>
  </div>
</section>