<section class="block block--instagram" id="instagram">
    <div class="block__content block__content--instagram">
        <?php $post = get_post(12); ?>

        <h2 class="block__title block__title--contact"><?php echo $post->post_title; ?></h2>
        <?php echo $post->post_content; ?>
    </div>
    <div class="instagram--wrapper">
        <div id="instafeed" class="instafeed-feed"></div>
      </div>
      <div class="button button--instagram"><a>MORE</a>
    </div>
  <div class="block__divider">
    <?php get_template_part('partials/svg-divider'); ?>
  </div>
</section>
