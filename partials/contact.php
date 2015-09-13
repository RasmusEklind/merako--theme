<section class="block block--contact" id="Kontakt">
    <div class="block__content block__content--contact">

        <?php $post = get_post(8); ?>
            <h2 class="block__title block__title--contact"><?php echo $post->post_title; ?></h2>
        <?php echo $post->post_content; ?>

    </div>
</section>