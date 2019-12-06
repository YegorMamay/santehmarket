<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">

    <!-- OpenGraph -->
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:locale:alternate" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php if ( is_front_page() ) {echo bloginfo('name');} else { echo single_post_title(); } ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:url" content="<?php echo esc_url(site_url()); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:image" content="<?php echo esc_url(the_post_thumbnail_url()); ?>" />
    <meta property="og:image:secure_url" content="<?php echo esc_url(the_post_thumbnail_url()); ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" />
    <meta name="twitter:image" content="<?php echo esc_url(the_post_thumbnail_url()); ?>" />
    <!-- OpenGraph end-->

    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body_open(); ?>
<div class="wrapper js-container"><!--Do not delete!-->

    <header class="page-header fixed-to-top">
        <div class="page-header__top-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                        <div class="logo">
                            <?php get_default_logo_link([
                                'name'    => 'logo.svg',
                                'options' => [
                                    'class'  => 'logo-img',
                                    'width'  => 200,
                                    'height' => 50,
                                ],
                            ])
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                        <div class="page-header__wrapper">
                            <div class="page-header__item">
                                <div class="page-header__icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <?php pll_e('Address') ?>
                            </div>
                            <div class="page-header__item">
                                <div class="page-header__icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <?php pll_e('Work Schedule') ?>
                            </div>
                            <div class="page-header__item">
                                <?php echo do_shortcode('[bw-social]'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="page-header__item-wrapper">
                            <div class="page-header__item">
                                <div class="page-header__icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <?php if (has_phones()) { ?>
                                    <ul class="phone-dropdown">
                                        <li class="phone-dropdown__item">
                                            <?php foreach(get_phones() as $key => $phone) { ?>
                                            <?php reset(get_phones()); ?>
                                            <?php if ($key === key(get_phones())) { ?>
                                            <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>" class="phone-dropdown__link phone-dropdown--main">
                                                <?php echo esc_html($phone); ?>
                                            </a>
                                            <button type="button" class="phone-dropdown__button js-dropdown"></button>
                                            <ul class="phone-dropdown__list js-phone-list">
                                                <?php  } else { ?>
                                                    <li class="phone-dropdown__item">
                                                        <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>" class="phone-dropdown__link">
                                                            <?php echo esc_html($phone); ?>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                    </ul>
                                <?php } ?>
                            </div>
                            <button type="button" class="button-main button-main--style <?php the_lang_class('js-call-back'); ?>">
                                <?php _e('Call back', 'brainworks'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header__bottom-section">
            <div class="container">
                <div class="row align-items-center">
                    <?php if (has_nav_menu('main-nav')) { ?>
                        <nav class="nav js-menu">
                            <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'main-nav',
                                'container' => false,
                                'menu_class' => 'menu-container',
                                'menu_id' => '',
                                'fallback_cb' => 'wp_page_menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 3
                            )); ?>
                        </nav>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu start-->
    <div class="nav-mobile-header">
        <div class="logo">
            <?php get_default_logo_link([
                'name'    => 'logo-footer.svg',
                'options' => [
                    'class'  => 'logo-img',
                    'width'  => 200,
                    'height' => 50,
                ],
            ])
            ?>
        </div>
        <button class="hamburger js-hamburger" type="button" tabindex="0">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
        </button>
    </div>
    <?php if (has_nav_menu('main-nav')) { ?>
        <nav class="nav js-menu hide-on-desktop">
            <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
            <?php wp_nav_menu(array(
            'theme_location' => 'main-nav',
            'container' => false,
            'menu_class' => 'menu-container',
            'menu_id' => '',
            'fallback_cb' => 'wp_page_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 3
        )); ?>
        </nav>
    <?php } ?>
    <!-- Mobile menu end-->
