<section class="block block--intro" id="intro">
    <article class="intro">
        <div class="intro__container">

        <?php $post = get_post(3); ?>
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail(800, array('class' => 'hero__image'));
        } else {
            echo wp_get_attachment_image(206, 'large', false, array('class' => 'hero__image'));
        }
        ?>
        </div>
        <div class="block__content">
            <h2 class="block__title block__title--intro"><?php echo $post->post_title; ?></h2>
            <?php echo $post->post_content; ?>
        </div>
    </article>
  <div class="block__divider">
    <?php get_template_part('partials/svg-divider'); ?>
  </div>
</section>