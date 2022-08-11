<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car</title>

<?php wp_head(); ?>


</head>
<body>
<header class="header">
    <div class="container">
        <div class="header_top">
            <?php the_custom_logo(); ?>
            <a href="<?php the_field('phone_number'); ?>" class="phone"><?php the_field('phone'); ?></a>
        </div>
        <div class="header_content">
            <h1 class="header_title">авто из сша “под ключ”</h1>
            <h2 class="header_subtitle">ЗАКАЖИ СЕБЕ АВТО ИЗ США С ВЫГОДОЙ ДО 40%</h2>
            <p class="header_text">Подбор, покупка, доставка, растаможка, ремонт, оформление по договору</p>
            <a href="#" class="header_button">Консультация эксперта</a>
                <div class="social header_social">
                    <a class="social_link" href="<?php the_field('instagram_link'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/instagram.svg" alt="logo" class="social_img"></a>
                    <a class="social_link" href="<?php the_field('telegram_link') ; ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/telegram.svg" alt="logo" class="social_img"></a>
                    <a class="social_link" href="<?php the_field('whatsapp_link') ; ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/whatsapp.svg" alt="logo" class="social_img"></a>
                    <a class="social_link" href="<?php the_field('facebook_link') ; ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook.svg" alt="logo" class="social_img"></a>
                </div>
                    <img class="header_img" src="<?php the_field('top_image'); ?>" alt="car" >
        </div>                         
    </div>
</header>