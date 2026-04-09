<?php
/**
 * MK Agency Theme - functions.php
 *
 * @package mkagency
 * @version 1.0.0
 */

defined( 'ABSPATH' ) || exit;

// ─── Constants ───────────────────────────────────────────────────────────────
define( 'MKAGENCY_VERSION', '1.0.0' );
define( 'MKAGENCY_DIR', get_template_directory() );
define( 'MKAGENCY_URI', get_template_directory_uri() );

// ─── Theme Setup ─────────────────────────────────────────────────────────────
add_action( 'after_setup_theme', 'mkagency_setup' );
function mkagency_setup() {

	// Internationalization
	load_theme_textdomain( 'mkagency', MKAGENCY_DIR . '/languages' );

	// Block editor styles
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor.css' );

	// Responsive embeds
	add_theme_support( 'responsive-embeds' );

	// HTML5
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	] );

	// Post thumbnails
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'mkagency-card',      600, 400, true );
	add_image_size( 'mkagency-portfolio', 900, 600, true );
	add_image_size( 'mkagency-hero',     1920, 1080, true );

	// Title tag
	add_theme_support( 'title-tag' );

	// Custom logo
	add_theme_support( 'custom-logo', [
		'height'      => 60,
		'width'       => 200,
		'flex-width'  => true,
		'flex-height' => true,
	] );

	// ── WooCommerce ──────────────────────────────────────────────────────────
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	// ── Navigation Menus ─────────────────────────────────────────────────────
	register_nav_menus( [
		'primary'         => __( 'Menú Principal', 'mkagency' ),
		'footer-col-1'    => __( 'Footer Columna 1', 'mkagency' ),
		'footer-col-2'    => __( 'Footer Columna 2', 'mkagency' ),
		'footer-col-3'    => __( 'Footer Columna 3', 'mkagency' ),
		'language-switcher' => __( 'Selector de Idioma', 'mkagency' ),
	] );
}

// ─── Enqueue Scripts & Styles ────────────────────────────────────────────────
add_action( 'wp_enqueue_scripts', 'mkagency_enqueue' );
function mkagency_enqueue() {

	// Google Fonts
	wp_enqueue_style(
		'mkagency-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap',
		[],
		null
	);

	// Main stylesheet
	wp_enqueue_style(
		'mkagency-style',
		MKAGENCY_URI . '/assets/css/main.css',
		[ 'mkagency-fonts' ],
		MKAGENCY_VERSION
	);

	// WooCommerce overrides
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style(
			'mkagency-woocommerce',
			MKAGENCY_URI . '/assets/css/woocommerce.css',
			[ 'mkagency-style' ],
			MKAGENCY_VERSION
		);
	}

	// Main JS (mobile menu + misc)
	wp_enqueue_script(
		'mkagency-main',
		MKAGENCY_URI . '/assets/js/main.js',
		[],
		MKAGENCY_VERSION,
		[ 'strategy' => 'defer', 'in_footer' => true ]
	);

	// Pass localized data to JS
	wp_localize_script( 'mkagency-main', 'mkagencyData', [
		'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
		'nonce'     => wp_create_nonce( 'mkagency-nonce' ),
		'menuOpen'  => __( 'Abrir menú', 'mkagency' ),
		'menuClose' => __( 'Cerrar menú', 'mkagency' ),
	] );
}

// ─── Block Patterns ──────────────────────────────────────────────────────────
add_action( 'init', 'mkagency_register_block_pattern_categories' );
function mkagency_register_block_pattern_categories() {
	register_block_pattern_category(
		'mkagency',
		[ 'label' => __( 'MK Agency', 'mkagency' ) ]
	);
	register_block_pattern_category(
		'mkagency-sections',
		[ 'label' => __( 'MK Agency – Secciones', 'mkagency' ) ]
	);
	register_block_pattern_category(
		'mkagency-woocommerce',
		[ 'label' => __( 'MK Agency – WooCommerce', 'mkagency' ) ]
	);
}

// ─── WPML / Polylang compatibility ───────────────────────────────────────────

/**
 * Allow WPML/Polylang language switcher in nav menus.
 * Both plugins hook into wp_nav_menu_items automatically when active.
 * This filter ensures the language switcher slot is available in the
 * Primary menu registered above.
 */
add_filter( 'wp_nav_menu_items', 'mkagency_language_switcher_in_menu', 10, 2 );
function mkagency_language_switcher_in_menu( $items, $args ) {
	// Only inject into primary menu
	if ( 'primary' !== $args->theme_location ) {
		return $items;
	}

	// WPML
	if ( function_exists( 'icl_get_languages' ) ) {
		$languages = icl_get_languages( 'skip_missing=0' );
		if ( ! empty( $languages ) ) {
			$switcher = '<li class="menu-item menu-item-language-switcher">';
			foreach ( $languages as $l ) {
				$active = $l['active'] ? ' class="active"' : '';
				$switcher .= '<a href="' . esc_url( $l['url'] ) . '"' . $active . '>'
					. esc_html( strtoupper( $l['language_code'] ) ) . '</a> ';
			}
			$switcher .= '</li>';
			$items .= $switcher;
		}
	}

	// Polylang
	if ( function_exists( 'pll_the_languages' ) ) {
		ob_start();
		pll_the_languages( [
			'show_flags'   => 0,
			'show_names'   => 1,
			'display_names_as' => 'slug',
			'hide_current' => 0,
			'echo'         => 1,
		] );
		$items .= ob_get_clean();
	}

	return $items;
}

// ─── WooCommerce Overrides ────────────────────────────────────────────────────

// Remove default WooCommerce styles so our theme CSS takes over
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Breadcrumbs separator
add_filter( 'woocommerce_breadcrumb_defaults', function( $args ) {
	$args['delimiter'] = ' / ';
	return $args;
} );

// Products per page
add_filter( 'loop_shop_per_page', function() {
	return 12;
} );

// Columns in shop archive
add_filter( 'loop_shop_columns', function() {
	return 3;
} );

// ─── Contact Form Compatibility ───────────────────────────────────────────────

/**
 * Contact Form 7 – remove default styles so theme CSS applies.
 */
add_filter( 'wpcf7_load_css', '__return_false' );

/**
 * WPForms – remove default styling in favour of theme CSS.
 */
add_filter( 'wpforms_frontend_css_disable', '__return_true' );

// ─── Custom Excerpt Length ────────────────────────────────────────────────────
add_filter( 'excerpt_length', function() {
	return 25;
} );

add_filter( 'excerpt_more', function() {
	return '&hellip;';
} );

// ─── Block editor: remove inline layout CSS (we manage it) ───────────────────
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

// ─── Security Headers ────────────────────────────────────────────────────────
add_action( 'send_headers', function() {
	header( 'X-Content-Type-Options: nosniff' );
	header( 'X-Frame-Options: SAMEORIGIN' );
	header( 'Referrer-Policy: strict-origin-when-cross-origin' );
} );

// ─── Remove WordPress version from head ──────────────────────────────────────
remove_action( 'wp_head', 'wp_generator' );
