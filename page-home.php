<?php
/**
 * Template Name: Home Page
 **/
?>
<?php get_header(); ?>
<div class="container-fluid padding-none">
<?php get_template_part('loops/content', 'home'); ?>

    <?php
    $attachment_elem_id = get_post_meta(get_the_ID(), 'first_screen_img', true);
    $attachment_image = wp_get_attachment_url($attachment_elem_id);
    ?>
    <div class="top-section" style="background: url('<?php echo $attachment_image; ?>') no-repeat">
        <div class="top-section__description">
            <h1 class="top-section__title"><?php echo get_post_meta(get_the_ID(), 'home_title', true); ?></h1>
            <div class="top-section__text"><?php echo get_post_meta(get_the_ID(), 'home_description', true); ?></div>
            <a href="#about" type="button" class="button-main button-main--single js-info"><?php pll_e('button-info'); ?></a>
        </div>
    </div>

    <div class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <p class="main-title h3"><?php echo get_post_meta(get_the_ID(), 'home_about_title', true); ?></p>
                    <div class="about-section__description"><?php echo get_post_meta(get_the_ID(), 'home_about', true); ?></div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="benefits">
                        <?php
                        global $post;
                        $args = array(
                            'post_type'=> 'benefits',
                            'publish' => true,
                            'posts_per_page' => 20
                        );
                        $benefits_item = get_posts($args);
                        foreach ($benefits_item as $post) {
                            ?>
                            <div class="benefits__item">
                                <p class="benefits__title"><?php the_title(); ?></p>
                                <div class="benefits__description"><?php echo get_post_meta(get_the_ID(), 'benefits_description', true); ?></div>
                            </div>
                            <?php
                        }

                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-special">
        <?php
        $attachment_id = get_post_meta(get_the_ID(), 'special_bg', true);
        $attachment_element = wp_get_attachment_url($attachment_id);
        ?>
        <div class="block-special__bg" style="background: url('<?php echo $attachment_element; ?>') no-repeat center / cover">
            <div class="container">
                <div class="block-special__wrapper">
                    <div class="block-special__item-wrapper">
                        <div class="block-special__description">
                            <p class="block-special__title"><?php echo get_post_meta(get_the_ID(), 'special_title', true); ?></p>
                            <div class="block-special__sub-title"><?php echo get_post_meta(get_the_ID(), 'special_description', true); ?></div>
                        </div>
                        <button type="button" class="block-special__button js-details"><?php pll_e('button-special-text'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-categories" id="category">
        <div class="container">
            <p class="main-title h3 text-center"><?php echo get_post_meta(get_the_ID(), 'categories_title', true); ?></p>
            <div class="product-categories__sub-title"><?php echo get_post_meta(get_the_ID(), 'categories_description', true); ?></div>
            <div class="row align-items-center">
                <?php
                global $post;
                $args = array(
                    'post_type'=> 'product_categories',
                    'publish' => true,
                    'posts_per_page' => 25
                );
                $products_item = get_posts($args);
                foreach ($products_item as $post) {
                    ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-categories__item">
                            <div class="product-categories__strips"></div>
                            <?php the_post_thumbnail('full', array('class' => 'product-categories__image')); ?>
                            <div class="product-categories__title"><?php the_title(); ?></div>
                        </div>
                    </div>
                    <?php
                }

                wp_reset_postdata();
                ?>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="product-categories__item product-categories--style js-availability">
                        <button class="product-categories__button" type="button">
                            <?php pll_e('product-availability'); ?>
                            <svg class="product-categories__arrow"><use xlink:href="#arrow-right"></use></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="brand-slider" id="brands">
        <div class="container">
            <?php echo do_shortcode('[show-logos]'); ?>
        </div>
    </div>

    <div class="review-wrapper" id="reviews">
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

    <div class="responsive-wrapper" id="news">
        <div class="container">
            <div class="blog-section">
                <p class="main-title h3"><?php pll_e('articles-title'); ?></p>
                <?php $page_id = 53; ?>
                <a href="<?php echo get_page_link( $page_id ); ?>" class="button-simple"><?php pll_e('articles-button-text'); ?></a>
            </div>
            <?php echo do_shortcode('[bw-advert count=4 class=front-news]'); ?>
        </div>
    </div>

    <div class="footer__bg" id="contacts">
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
                    <iframe width="994" height="754" id="gmap_canvas" src="<?php echo get_post_meta(get_the_ID(), 'google_map', true); ?>" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->
<?php get_footer(); ?>
