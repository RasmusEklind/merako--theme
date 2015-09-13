<?php
$nav = wp_get_nav_menu_object('Huvudmeny');

if ($nav != false):
    $links = wp_get_nav_menu_items($nav->term_id); ?>

    <nav class="nav" role="navigation">
        <ul class="nav__list">
            <?php foreach ($links as $key => $link): ?>
                <li class="nav__item">
                    <a class="nav__link" href="#<?php echo $link->title; ?>"><?php echo $link->title; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
<?php endif; ?>