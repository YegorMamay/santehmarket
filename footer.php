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

<!-- custom arrows -->
<div style="display: none">
    <svg width="0" height="0" class="hidden">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.711 25.333" id="arrow-left">
            <path d="M15.711 25.333L0 13.158 15.711 0 9.819 12.667z"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.711 25.333" id="arrow-right">
            <path d="M0 25.333l15.711-12.175L0 0l5.891 12.667z"></path>
        </symbol>
    </svg>
</div>
</body>
</html>
