<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_parent_css')) :
	function chld_thm_cfg_parent_css()
	{
		wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array('font-awesome', 'animate', 'slick', 'ticker'));
	}
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

// END ENQUEUE PARENT ACTION

// Cambiar Texto de añadir al carrito
add_filter('add_to_cart_text', 'texto_personalizado_boton_anadir_carrito_archivo'); // versiones menores a 2.1
add_filter('woocommerce_product_add_to_cart_text', 'texto_personalizado_boton_anadir_carrito_archivo'); // 2.1 o superior

function texto_personalizado_boton_anadir_carrito_archivo()
{
	return __('Ver Tour', 'woocommerce');
}

// Eliminar campo Web de Comentarios en Blog

function dcms_disable_url_comment($fields)
{
	unset($fields['url']);
	return $fields;
}
add_filter('comment_form_default_fields', 'dcms_disable_url_comment');


// Agregar Scripts y Estilos para la página de Galería de Viajeros

if (!function_exists('chld_thm_cfg_gallery_page')) :
	function chld_thm_cfg_gallery_page()
	{
		if (is_page_template('page-image-gallery.php')) {
			wp_enqueue_style('image-gallery-style', get_template_directory_uri() . '-child/css/image-gallery.css', array(), null);
			wp_enqueue_script('image-gallery-scripts', get_template_directory_uri() . '-child/js/image-gallery.js', array(), null, true);
		}
	}
endif;

add_action('wp_enqueue_scripts', 'chld_thm_cfg_gallery_page', 10);