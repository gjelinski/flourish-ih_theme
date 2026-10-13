<?php
/**
 * Flourish Integrated Health theme functions.
 *
 * @package Flourish
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'FLOURISH_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles.
 */
function flourish_setup() {
	load_theme_textdomain( 'flourish', get_template_directory() . '/languages' );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 120,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	add_editor_style( 'assets/css/theme.css' );
}
add_action( 'after_setup_theme', 'flourish_setup' );

/**
 * Front-end stylesheet for enhancements theme.json cannot express.
 */
function flourish_enqueue_assets() {
	wp_enqueue_style(
		'flourish-theme',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		FLOURISH_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'flourish_enqueue_assets' );

/**
 * Pattern categories shown in the inserter.
 */
function flourish_register_pattern_categories() {
	register_block_pattern_category(
		'flourish',
		array(
			'label'       => __( 'Flourish', 'flourish' ),
			'description' => __( 'Sections designed for the Flourish Integrated Health website.', 'flourish' ),
		)
	);
	register_block_pattern_category(
		'flourish-pages',
		array(
			'label'       => __( 'Flourish: Full pages', 'flourish' ),
			'description' => __( 'Complete page layouts for the clinic website.', 'flourish' ),
		)
	);
}
add_action( 'init', 'flourish_register_pattern_categories' );

/**
 * Block style variations. CSS for each lives in assets/css/theme.css.
 */
function flourish_register_block_styles() {
	$styles = array(
		'core/group'        => array(
			'flourish-card'    => __( 'Card', 'flourish' ),
			'flourish-panel'   => __( 'Rounded panel', 'flourish' ),
		),
		'core/column'       => array(
			'flourish-card' => __( 'Card', 'flourish' ),
		),
		'core/image'        => array(
			'flourish-arch' => __( 'Arch', 'flourish' ),
		),
		'core/cover'        => array(
			'flourish-rounded' => __( 'Rounded', 'flourish' ),
		),
		'core/heading'      => array(
			'flourish-eyebrow' => __( 'Subheader (Poppins caps)', 'flourish' ),
		),
		'core/paragraph'    => array(
			'flourish-eyebrow' => __( 'Subheader (Poppins caps)', 'flourish' ),
			'flourish-lead'    => __( 'Lead', 'flourish' ),
			'flourish-accent'  => __( 'Accent (Cormorant italic)', 'flourish' ),
		),
		'core/list'         => array(
			'flourish-checks' => __( 'Checkmarks', 'flourish' ),
		),
		'core/button'       => array(
			'flourish-soft' => __( 'Soft', 'flourish' ),
		),
		'core/separator'    => array(
			'flourish-monogram' => __( 'Monogram', 'flourish' ),
		),
	);

	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}
add_action( 'init', 'flourish_register_block_styles' );

/**
 * Helper for patterns: URL of a bundled image.
 *
 * @param string $file File name inside assets/images.
 * @return string
 */
function flourish_image( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
