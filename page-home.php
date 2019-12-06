<?php
/**
 * Template Name: Home Page
 **/
?>
<?php get_header(); ?>
<div class="container-fluid padding-none">
<?php get_template_part('loops/content', 'home'); ?>

    <?php $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb'); $title = get_the_title($post->ID); ?>
    <div class="top-section" style="background: url('<?= $thumb_url[0]; ?>') no-repeat">
        <div class="top-section__description">
            <h1 class="top-section__title"><?php echo get_post_meta(get_the_ID(), 'home_title', true); ?></h1>
            <div class="top-section__text"><?php echo get_post_meta(get_the_ID(), 'home_description', true); ?></div>
            <button type="button" class="button-main button-main--single js-info"><?php pll_e('button-info'); ?></button>
        </div>
    </div>

    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <p class="main-title h3"><?php echo get_post_meta(get_the_ID(), 'home_about_title', true); ?></p>
                    <div class="about-section__description"><?php echo get_post_meta(get_the_ID(), 'home_about', true); ?></div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">

                </div>
            </div>
        </div>
    </div>

    <div class="block-special">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg-6">
                    <?php
                    $attachment_id = get_post_meta(get_the_ID(), 'special_bg', true);
                    $attachment_element = wp_get_attachment_url($attachment_id);
                    ?>
                    <div class="block-special__bg" style="background: url('<?php echo $attachment_element; ?>') no-repeat center / cover"></div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div><?php echo get_post_meta(get_the_ID(), 'special_title', true); ?></div>
                    <div><?php echo get_post_meta(get_the_ID(), 'special_description', true); ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="review-wrapper">
       <div class="container">
           <p class="main-title h3 text-center"><?php pll_e('review-title'); ?></p>
           <?php echo do_shortcode('[bw-reviews] '); ?>
           <div class="text-center">
               <button type="button" class="button-main button-main--single js-send-review">
                   <?php pll_e('review-button-text'); ?>
               </button>
           </div>
       </div>
    </div>

    <div class="responsive-wrapper">
        <div class="container">
            <div class="blog-section">
                <p class="main-title h3"><?php pll_e('articles-title'); ?></p>
                <?php $page_id = 53; ?>
                <a href="<?php echo get_page_link( $page_id ); ?>" class="button-simple"><?php pll_e('articles-button-text'); ?></a>
            </div>
            <?php echo do_shortcode('[bw-advert count=4 class=front-news]'); ?>
        </div>
    </div>

    <div class="footer__bg">
        <div class="container-fluid padding-none">
            <div class="footer__wrapper">
                <div class="footer__column">
                    <div class="footer__logo">
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
                    <div class="footer__list">
                        <div class="footer__field">
                            <div class="footer__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="footer__description">
                                <?php pll_e('Address') ?>
                            </div>
                        </div>
                        <div class="footer__field">
                            <div class="footer__icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="footer__description">
                                <?php pll_e('Work Schedule') ?>
                            </div>
                        </div>
                        <div class="footer__field">
                            <div class="footer__icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="footer__description">
                                <?php echo do_shortcode('[bw-phone]'); ?>
                            </div>
                        </div>
                        <div class="footer__field footer--centered">
                            <div class="footer__sub-title">
                                <?php pll_e('social-title'); ?>
                            </div>
                            <div class="footer__description">
                                <?php echo do_shortcode('[bw-social]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__map-wrapper">
                    <iframe width="994" height="754" id="gmap_canvas" src="https://maps.google.com/maps?q=%D0%B8%D1%80%D0%BF%D0%B5%D0%BD%D1%8C&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->
<?php get_footer(); ?>
