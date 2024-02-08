<?php
/**
 * @package AccessPress Root
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
		<?php if(has_post_thumbnail()): ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail('accesspress-blog-big-thumbnail'); ?>
			</div>
		<?php endif; ?>
		<h2 class="post-title"><?php the_title();?></h2>		
        <?php comments_popup_link('Sin comentarios', '1 Comentario', '% Comentarios'); ?>
        </p>
		<div class="content-page">
		  <?php the_content(); ?>
        </div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Páginas:', 'accesspress-store' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
