<footer class="footer js-footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>
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
    <div class="container">
        <div class="copyright">
            <div class="date">&copy; <?php echo date('Y'); ?>. Все права защищены</div>
            <div class="developer">
                <?php _e('Developed by ', 'brainworks') ?><a href="https://brainworks.pro/" target="_blank">BRAIN WORKS</a> 
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end Do not delete! -->

<?php scroll_top(); ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
