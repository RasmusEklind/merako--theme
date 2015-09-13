<section class="block block--about" id="Om">
    <div class="block__content block__content--about">
        <?php
        $posts = get_posts(array('om' => 1, 'posts_per_page' => 5));
        foreach ($posts as $post) :
        setup_postdata($post); ?>
            <article class="article-teaser article-teaser--collections">
                <header class="article-teaser__header">
                    <a class="no-border" href="<?php echo the_permalink(); ?>">
                        <?php
                        $image_classes = 'article-teaser__featured article-teaser__featured-collections';

                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('class' => $image_classes));
                        } else {
                            echo wp_get_attachment_image(206, 'medium', false, array('class' => $image_classes));
                        }
                        ?>
                    </a>

                    <h3 class="article-teaser__title article-teaser__title--collections"><a class="article-teaser__link" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </header>

                <section class="article-teaser__body">
                    <?php
                    if (has_excerpt()) {
                        echo truncated_excerpt(100);
                    }
                    ?>
                </section>
            </article>

            <?php
        endforeach;
        wp_reset_postdata();
        ?>
    </div>
  <div class="block__divider">
    <?php get_template_part('partials/svg-divider'); ?>
  </div>
</section>