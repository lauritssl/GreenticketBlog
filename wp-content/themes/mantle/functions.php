<?php

/**
 * Reset customizer settings so the child theme shows up
 */
add_action( 'admin_notices', 'mantle_reset_customizer_settings' );
function mantle_reset_customizer_settings() {
	global $pagenow;
	$generate_settings = get_option('generate_settings');
	
	if ( empty($generate_settings) )
		return;
		
	if ( is_admin() && $pagenow == "themes.php" && isset( $_GET['activated'] ) ) {
		echo '<div class="updated below-h2">';
			echo '<p>';
				_e('<strong>Almost done!</strong> Previous GeneratePress options detected in your database. Please <a href="' . admin_url('themes.php?page=generate-options#gen-delete') . '">click here</a> and delete your current options for Mantle to take full effect.','generate');
			echo '</p>';
		echo '</div>';
	}
}

/**
 * Remove unnecessary actions
 */
add_action('after_setup_theme','mantle_setup');
function mantle_setup()
{
	
	remove_action( 'generate_after_entry_header', 'generate_post_image' );
	
	if ( !function_exists('generate_page_header') ) :
		remove_action('generate_after_header','generate_featured_page_header', 10);
	endif;
	
	if ( function_exists('generate_page_header_post_image') ) :
		remove_action( 'generate_after_entry_header', 'generate_page_header_post_image' );
		add_action( 'generate_before_content', 'generate_page_header_post_image' );
	endif;
}

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'mantle_scripts' );
function mantle_scripts() {

	// Generate scripts
	wp_enqueue_script( 'stickynav', get_stylesheet_directory_uri() . '/js/scripts.js', array(), GENERATE_VERSION, true );

}

if ( !function_exists( 'mantle_new_defaults' ) ) :
	add_filter( 'generate_option_defaults','mantle_new_defaults' );
	function mantle_new_defaults()
	{
		$new_defaults = array(
			'hide_title' => '',
			'hide_tagline' => '',
			'logo' => '',
			'container_width' => '960',
			'header_layout_setting' => 'fluid-header',
			'center_header' => 'true',
			'center_nav' => 'true',
			'nav_layout_setting' => 'fluid-nav',
			'nav_position_setting' => 'nav-above-header',
			'content_layout_setting' => 'separate-containers',
			'layout_setting' => 'no-sidebar',
			'blog_layout_setting' => 'no-sidebar',
			'single_layout_setting' => 'no-sidebar',
			'post_content' => 'full',
			'footer_layout_setting' => 'fluid-footer',
			'footer_widget_setting' => '2',
			'background_color' => '#222222',
			'text_color' => '#222222',
			'link_color' => '#1e73be',
			'link_color_hover' => '#222222',
			'link_color_visited' => '',
		);
		
		return $new_defaults;
	}
endif;

/**
 * Set default options
 */
if ( !function_exists( 'mantle_get_color_defaults' ) ) :
	add_filter( 'generate_color_option_defaults','mantle_get_color_defaults' );
	function mantle_get_color_defaults()
	{
		$mantle_color_defaults = array(
			'header_background_color' => '#ffffff',
			'header_text_color' => '#222222',
			'header_link_color' => '',
			'header_link_hover_color' => '',
			'site_title_color' => '#222222',
			'site_tagline_color' => '#999999',
			'navigation_background_color' => '#1e72bd',
			'navigation_text_color' => '#FFFFFF',
			'navigation_background_hover_color' => '#4f8bc6',
			'navigation_text_hover_color' => '#ffffff',
			'navigation_background_current_color' => '#4f8bc6',
			'navigation_text_current_color' => '#ffffff',
			'subnavigation_background_color' => '#4f8bc6',
			'subnavigation_text_color' => '#ffffff',
			'subnavigation_background_hover_color' => '',
			'subnavigation_text_hover_color' => '#06529e',
			'subnavigation_background_current_color' => '',
			'subnavigation_text_current_color' => '#06529e',
			'content_background_color' => '#FFFFFF',
			'content_text_color' => '#3a3a3a',
			'content_link_color' => '',
			'content_link_hover_color' => '',
			'content_title_color' => '',
			'blog_post_title_color' => '#1E72BD',
			'blog_post_title_hover_color' => '#222222',
			'entry_meta_text_color' => '#888888',
			'entry_meta_link_color' => '#666666',
			'entry_meta_link_color_hover' => '#1E72BD',
			'sidebar_widget_background_color' => '#FFFFFF',
			'sidebar_widget_text_color' => '#3a3a3a',
			'sidebar_widget_link_color' => '#686868',
			'sidebar_widget_link_hover_color' => '#1e72bd',
			'sidebar_widget_title_color' => '#000000',
			'footer_widget_background_color' => '#ffffff',
			'footer_widget_text_color' => '#222222',
			'footer_widget_link_color' => '',
			'footer_widget_link_hover_color' => '',
			'footer_widget_title_color' => '#222222',
			'footer_background_color' => '#1e72bd',
			'footer_text_color' => '#ffffff',
			'footer_link_color' => '#ffffff',
			'footer_link_hover_color' => '#f5f5f5',
			'form_background_color' => '#FAFAFA',
			'form_text_color' => '#666666',
			'form_background_color_focus' => '#FFFFFF',
			'form_text_color_focus' => '#666666',
			'form_border_color' => '#CCCCCC',
			'form_border_color_focus' => '#BFBFBF',
			'form_button_background_color' => '#666666',
			'form_button_background_color_hover' => '#606060',
			'form_button_text_color' => '#FFFFFF',
			'form_button_text_color_hover' => '#FFFFFF'
		);
		
		return $mantle_color_defaults;
	}
endif;

/**
 * Set default options
 */
if ( !function_exists('mantle_get_default_fonts') ) :
	add_filter( 'generate_font_option_defaults','mantle_get_default_fonts' );
	function mantle_get_default_fonts()
	{
		$mantle_font_defaults = array(
			'font_body' => 'Arial, Helvetica, sans-serif',
			'body_font_weight' => 'normal',
			'body_font_transform' => 'none',
			'body_font_size' => '15',
			'font_site_title' => 'Oxygen:300,regular,700',
			'site_title_font_weight' => '300',
			'site_title_font_transform' => 'none',
			'site_title_font_size' => '60',
			'font_site_tagline' => 'Oxygen:300,regular,700',
			'site_tagline_font_weight' => 'normal',
			'site_tagline_font_transform' => 'none',
			'site_tagline_font_size' => '15',
			'font_navigation' => 'Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic',
			'navigation_font_weight' => 'normal',
			'navigation_font_transform' => 'none',
			'navigation_font_size' => '15',
			'font_widget_title' => 'Oxygen:300,regular,700',
			'widget_title_font_weight' => '300',
			'widget_title_font_transform' => 'none',
			'widget_title_font_size' => '20',
			'font_heading_1' => 'Oxygen:300,regular,700',
			'heading_1_weight' => '300',
			'heading_1_transform' => 'none',
			'heading_1_font_size' => '50',
			'font_heading_2' => 'Oxygen:300,regular,700',
			'heading_2_weight' => '300',
			'heading_2_transform' => 'none',
			'heading_2_font_size' => '40',
			'font_heading_3' => 'inherit',
			'heading_3_weight' => 'normal',
			'heading_3_transform' => 'none',
			'heading_3_font_size' => '30',
			'font_heading_4' => 'inherit',
			'heading_4_weight' => 'normal',
			'heading_4_transform' => 'none',
			'heading_4_font_size' => '20',
		);
		
		return $mantle_font_defaults;
	}
endif;

/**
 * Prints the Post Image to post excerpts
 */
if ( ! function_exists( 'mantle_post_image' ) ) :
	add_action( 'generate_before_content', 'mantle_post_image' );
	function mantle_post_image()
	{
		if ( !has_post_thumbnail() )
			return;
			
		if ( 'post' == get_post_type() && !is_single() ) {
		?>
			<div class="post-image">
				<a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
		<?php
		}
	}
endif;

/**
 * Add page header above content
 * @since 1.0.2
 */
add_action( 'generate_before_content', 'mantle_featured_page_header' );
function mantle_featured_page_header()
{
	if ( function_exists('generate_page_header') )
		return;

	if ( is_page() ) :
		
		generate_featured_page_header_area('page-header-image');
	
	endif;
}

/**
 * Add dynamic CSS
 * @since 0.4
 */
function mantle_custom_css()
{

	if ( function_exists( 'generate_spacing_get_defaults' ) ) :
		
		$spacing_settings = wp_parse_args( 
			get_option( 'generate_spacing_settings', array() ), 
			generate_spacing_get_defaults() 
		);
			
	endif;
	
	if ( function_exists('generate_spacing_get_defaults') ) :
		$top_padding = $spacing_settings['content_top'];
		$right_padding = $spacing_settings['content_right'];
		$bottom_padding = $spacing_settings['content_bottom'];
		$left_padding = $spacing_settings['content_left'];
		$menu_height = $spacing_settings['menu_item_height'];
	else :
		$top_padding = 40;
		$right_padding = 40;
		$bottom_padding = 40;
		$left_padding = 40;
		$menu_height = 50;
	endif;
	
	$return = '';
		
	$return .= '.separate-containers .post-image, .separate-containers .inside-article .page-header-image-single, .separate-containers .inside-article .page-header-content-single, .separate-containers .inside-article .page-header-image, .no-sidebar .inside-article .page-header-image-single, .no-sidebar .inside-article .page-header-image { margin: -' . $top_padding . 'px -' . $right_padding . 'px ' . $bottom_padding . 'px -' . $left_padding . 'px }';
	$return .= '.nav-above-header.stickynav {padding-top: ' . $menu_height . 'px}';
	return $return;
}

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'mantle_css', 50 );
function mantle_css() {
	wp_add_inline_style( 'generate-style', mantle_custom_css() );
}