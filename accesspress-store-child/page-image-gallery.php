<?php

/**
 * Template Name: Galería de Imágenes
 * 
 * The template for displaying a Page with an Image Gallery.
 *
 * @package AccessPress Store
 */
get_header();

global $post;
$single_page_layout = esc_attr(get_post_meta($post->ID, 'accesspress_store_sidebar_layout', true));
if (empty($single_page_layout)) {
    $single_page_layout = esc_attr(get_theme_mod('single_page_layout', 'right-sidebar'));
}
?>
<div class="inner">
    <main id="main" class="site-main clearfix <?php echo esc_attr($single_page_layout); ?>">
        <div class="entry-content">

            <div class="content-inner clearfix">
                <h2 class="image-gallery-page-title"><?php the_title(); ?></h2>
                <div class="content-page">
                    <?php
                    while (have_posts()) :
                        the_post();
                        the_content();
                    endwhile; // end of the loop.
                    ?>
                </div>

                <div class="gallery-container">
                    <div class="gallery-item" data-index="1">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/bicho-godano.jpg' ?>">
                        <p class="traveler-image-caption">
                            Víctor "Bicho" Godano y Javier López
                        </p>
                    </div>
                    <div class="gallery-item" data-index="2">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/bicho-godano-2.jpg' ?>">
                        <p class="traveler-image-caption">
                            Javier López y Víctor "Bicho" Godano
                        </p>
                    </div>
                    <div class="gallery-item" data-index="3">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/daniel-arcucci.jpeg' ?>">
                        <p class="traveler-image-caption">
                            Daniel Arcucci
                        </p>
                    </div>
                    <div class="gallery-item" data-index="4">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/dany-moreno.jpeg' ?>">
                        <p class="traveler-image-caption">
                            Dany Moreno
                        </p>
                    </div>
                    <div class="gallery-item" data-index="5">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/fantino.jpeg' ?>">
                        <p class="traveler-image-caption">
                            Alejandro Fantino
                        </p>
                    </div>
                    <div class="gallery-item" data-index="6">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/lito-pintos.jpeg' ?>">
                        <p class="traveler-image-caption">
                            Lito Pintos
                        </p>
                    </div>
                    <div class="gallery-item" data-index="7">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/mariana-fabiani.jpg' ?>">
                        <p class="traveler-image-caption">
                            Mariana Fabiani
                        </p>
                    </div>
                    <div class="gallery-item" data-index="8">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/maxi-pullaro.jpg' ?>">
                        <p class="traveler-image-caption">
                            Maxi Pullaro
                        </p>
                    </div>
                    <div class="gallery-item" data-index="9">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/nino-tuburcio.jpg' ?>">
                        <p class="traveler-image-caption">
                            Nino Tuburcio
                        </p>
                    </div>
                    <div class="gallery-item" data-index="10">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/unknown.jpg' ?>">
                        <p class="traveler-image-caption">
                            Cali Fidalgo
                        </p>
                    </div>
                    <div class="gallery-item" data-index="10">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/unknown-2.jpg' ?>">
                        <p class="traveler-image-caption">
                            Pedro Cachín
                        </p>
                    </div>

                </div>
            </div> <!-- .content-inner -->
        </div> <!-- .entry-content -->
    </main>
</div>

<?php get_footer();
