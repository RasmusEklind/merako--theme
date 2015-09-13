<section class="block block--intro" id="Intro">
    <article class="intro">
        <div class="intro__container">
        <?php $post = get_post(2); ?>
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail(800, array('class' => 'intro__container--image'));
        } else {
            echo wp_get_attachment_image(206, 'large', false, array('class' => 'intro__container--image'));
        }
        ?>
            <div class="intro__container--slogan">
            <span class="intro__container--slogan--logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php get_template_part('partials/svg-icon'); ?></span>
            <h1 class="intro__container--slogan--h1 fadein"></h1></div>

            <div class="intro__overlay"></div>
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