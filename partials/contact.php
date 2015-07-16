<section class="block block--contact" id="contact">
    <div class="block__content block__content--contact">
        <?php $post = get_post(10); ?>
            <h2 class="block__title block__title--contact"><?php echo $post->post_title; ?></h2>
        <?php echo $post->post_content; ?>

        <div class="contact">
            <ul class="contact-list">
                <li class="contact-list__item">
                    <i class="contact-list__icon icon-mail"></i>
                    <a class="contact-list__link" href="eklind.r@gmail.com">Rasmus Eklind</a>
                </li>

                <li class="contact-list__item">
                    <i class="contact-list__icon icon-mobile"></i>
                    <a class="contact-list__link" href="tel:+0730743147">073 074 31 47</a>
                </li>
            </ul>
        </div>
    </div>
</section>