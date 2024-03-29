<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package AccessPress Store
 */
?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    
   <?php if ( is_active_sidebar( 'footer-1' ) ||  is_active_sidebar( 'footer-2' )  || is_active_sidebar( 'footer-3' )  || is_active_sidebar( 'footer-4' )) : ?>
    <div id="top-footer" class="clearfix columns-<?php echo esc_attr(accesspress_footer_count()); ?>">
     <div class="ak-container">
         <div class="top-footer-wrap clearfix">
             <?php if( is_active_sidebar('footer-1') ): ?>
                <div class="top-footer-block">
                   <?php dynamic_sidebar('footer-1') ?>
               </div>
           <?php endif; ?>

           <?php if( is_active_sidebar('footer-2') ): ?>
            <div class="top-footer-block">
               <?php dynamic_sidebar('footer-2') ?>
           </div>
       <?php endif; ?>

       <?php if( is_active_sidebar('footer-3') ): ?>
        <div class="top-footer-block">
           <?php dynamic_sidebar('footer-3') ?>
       </div>
   <?php endif; ?>

   <?php if( is_active_sidebar('footer-4') ): ?>
    <div class="top-footer-block">
       <?php dynamic_sidebar('footer-4') ?>
   </div>
<?php endif; ?>
</div>
</div>
</div> <!-- top footer end -->
<?php endif; ?>
<div class="footer-bottom">
    <div class="ak-container">
        <div class="seal-logo-wrap">
            <?php
            $payment_partner_1 = get_theme_mod('paymentlogo1_image');
            $payment_partner_2 = get_theme_mod('paymentlogo2_image');
            $payment_partner_3 = get_theme_mod('paymentlogo3_image');
            $payment_partner_4 = get_theme_mod('paymentlogo4_image');
            $ssl_seal = get_theme_mod('other1_image');
            $other_seal_1 = get_theme_mod('other2_image');
            $other_seal_2 = get_theme_mod('other3_image');
            ?>
            <?php if(!empty($payment_partner_1)) : ?>
                <img id="partner_logo1" class="partner-logos" src="<?php echo esc_url($payment_partner_1)?>" alt="<?php esc_html_e('Partner Logo 1', 'accesspress-store') ?>" />
            <?php endif; ?>

            <?php if(!empty($payment_partner_2)) : ?>
                <img id="partner_logo2" class="partner-logos" src="<?php echo  esc_url($payment_partner_2)?>" alt="<?php esc_html_e('Partner Logo 2', 'accesspress-store') ?>" />
            <?php endif; ?>

            <?php if(!empty($payment_partner_3)) : ?>
                <img id="partner_logo3" class="partner-logos" src="<?php echo  esc_url($payment_partner_3)?>" alt="<?php esc_html_e('Partner Logo 3', 'accesspress-store') ?>" />
            <?php endif; ?>

            <?php if(!empty($payment_partner_4)) : ?>
                <img id="partner_logo4" class="partner-logos" src="<?php echo  esc_url($payment_partner_4)?>" alt="<?php esc_html_e('Partner Logo 4', 'accesspress-store') ?>" />
            <?php endif; ?>

            <?php if(!empty($ssl_seal)) : ?>
                <img id="ssl_seal" class="partner-logos" src="<?php echo  esc_url($ssl_seal)?>" alt="<?php esc_html_e('SSL Seal', 'accesspress-store') ?>" />
            <?php endif; ?>

            <?php if(!empty($other_seal_1)) : ?>
                <img id="other_seal1" class="partner-logos" src="<?php echo  esc_url($other_seal_1)?>" alt="<?php esc_html_e('Other Seal 1', 'accesspress-store') ?>" />
            <?php endif; ?>

            <?php if(!empty($other_seal_2)) : ?>
                <img id="other_seal2" class="partner-logos" src="<?php echo  esc_url($other_seal_2)?>" alt="<?php esc_html_e('Other Seal 2', 'accesspress-store') ?>" />
            <?php endif; ?>

        </div>
        <div class="site-info">

          <?php
           $copyright = get_theme_mod('accesspress_store_copyright');
            if(!empty($copyright)) :
                echo wp_kses_post($copyright);
            else :
              printf(wp_kses_post('&copy; %1$s %2$s'), esc_html(get_the_time("Y")), esc_html(get_bloginfo('name')));
            endif;
          ?>
        </div><!-- .site-info -->
    </div>
</div>

</footer><!-- #colophon -->
</div><!-- #page -->
<div id="ak-top"><i class="fa fa-reply"></i></div>
<?php wp_footer(); ?>
</body>
</html>
