<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aryabhatta website</title>
    <?php wp_head(); ?>
</head>
<body>

<section id="top-bar">
        <div class="container">
            <marquee behavior="" direction="">
                <p class="text-center"><?php the_field('marquee_text'); ?></p>
            </marquee>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white border-bottom border-3 rounded-4">
    <div class="container">
        <a class="navbar-brand" href="#">
            <?php if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
            }?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto text-center mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
        </div>
    </div>
</nav>

<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>