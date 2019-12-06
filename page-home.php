<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<div class="container-fluid padding-none">

<?php get_template_part('loops/content', 'home'); ?>

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

<?php echo do_shortcode('[bw-advert count=4 class=front-news]'); ?>

</div><!-- /.container -->
<?php get_footer(); ?>
