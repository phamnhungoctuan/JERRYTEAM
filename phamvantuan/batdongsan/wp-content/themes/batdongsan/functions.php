<?php 
/**
@ Khai bao gia tri
	@ THEME_URL = lay đuongan cua thu muc theme
	@ CORE = lay duong dan cua thu muc core
**/
define('THEME_URL', get_stylesheet_directory_uri());
define('CORE', THEME_URL."/core");

/**
@ Nhung core/ini/php
**/

//require(CORE."/init.php");

/** 
@thiet lap chieu rong
**/

if(!isset($content_width)){
	$content_width = 700;

}

/**
@Khai bao chuc nang theme
**/

if(!function_exists('tuanpham_theme_setup')){
	function tuanpham_theme_setup(){
		$language_folder = THEME_URL. 'languages';

		add_theme_support('automatic-feed-links');

		add_theme_support('post-thumbnails');

		add_theme_support('post-formats',array(
			'image',
			'video',
			'gallery',
			'quote',
			'link'
			));
		add_theme_support('title-tag');
		$defaults = array(
		'default-color'          => '',
		'default-image'          => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
		);
		add_theme_support( 'custom-background', $defaults );
		add_theme_support( 'custom-header' );
		register_nav_menu('primary-menu',__('Primary Menu','tuanpham'));
	

	function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu','tuanpham'));
}
add_action( 'init', 'register_my_menu' );


		add_theme_support( 'custom-logo' );

		add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
		) );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

		$sidebar = array(
	        'name' => __('Main sidebar','tuanpham'),
	        'id' => "main-sidebar",
	        'description' => '',
	        'class' => 'main-sidebar',
	        'before_title' => '<h2 class="widgettitle">',
	        'after_title' => "</h2>\n",
	    );
		register_sidebar($sidebar);

	}
	add_action('init','tuanpham_theme_setup');
}
if(!function_exists('tuanpham_menu')){
	function tuanpham_menu($menu){
		$menu = array(
			'theme_location'=>$menu,
			'container_class'=>'sub-menu',
			 'menu_class'=> 'mainmenu pull-left',
    		'items_wrap' => '<ul class="menutop">%3$s<li><a href="#search"><img src="http://i.imgur.com/EdH3xiN.png"></a></li></ul>',);
		wp_nav_menu($menu);
		}
}

function tp_has_featured_posts() {
	return ! is_paged() && (bool) tp_has_featured_posts();
}


if(!function_exists('tuanpham_phantrang')){
	function tuanpham_phantrang(){
		if($GLOBALS['wp_query']->max_num_pages < 2){
			return '';
		}?>

		<nav class="pagination" role ="navigation">
			<?php if(get_next_posts_link()): ?>
				<div class="next"><?php next_posts_link(__('<button type="button" class="btn btn-info"><i class="fa fa-forward">Trang tiếp</i></button>','tuanpham')); ?>
				<?php endif; ?>
				<?php if(get_previous_posts_link()) : ?>
					<div class="pre"><?php echo get_previous_posts_link(__('<button type="button" class="btn btn-info"><i class="fa fa-backward"> Trang sau</i></button>','tuanpham')); ?>
					<?php endif; ?>
		</nav>
		<?php }
}

/** thumdnail**/

if(!function_exists('thuanpham_thumbnail')){
	function thuanpham_thumbnail($size){
		
			return the_post_thumbnail_url($size);   
	
	}
}

add_action( 'after_setup_theme', 'mytheme_custom_thumbnail_size' );
function mytheme_custom_thumbnail_size(){
    add_image_size( 'thumb', 360, 284.675, true ); // Hard crop to exact dimensions (crops sides or top and bottom)
    add_image_size( 'thumb-medium', 520, 9999 ); // Crop to 520px width, unlimited height
    add_image_size( 'thumb-large', 720, 340 ); // Soft proprtional crop to max 720px width, max 340px height
}


if(!function_exists('tuanpham_entry_header')){ 
	function tuanpham_entry_header(){?>
		<?php if( is_single() ) : ?>
		<hr><h1 class="entry-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h1><hr>
		<?php else: ?>
		<hr><h2 class="entry-title" style="text-align: center;"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"> <?php the_title();?></a></h2><hr>
		<?php endif; ?>
		<?php }
}

if(!function_exists('tuanpham_entry_meta')){ 
	function tuanpham_entry_meta() { ?>
		<?php if (!is_page()) :?>
				<?php 
					printf(__('<span class="date-published">%1$s ','tuanpham'),get_the_date());
				?>
				<?php endif;?>
	<?php }
}

if(!function_exists('tuanpham_entry_content')){ 
	function tuanpham_entry_content(){
		if(!is_single() && !is_page()){
			the_excerpt();
		}
		else {
			the_content();
		}
		
	}
}

if(!function_exists('tuanpham_entry_tag')){ 
	function tuanpham_entry_tag(){
		if(has_tag()):
			echo '<div class="entry-tag">';
		printf(__('Tagged in %1$s','tuanpham'),get_the_tag_list('',','));
		echo '</div>';
		endif;
	}
}

function tuanpham_style(){
	wp_register_style('main-style',THEME_URL."/style.css",'all');
	wp_enqueue_style('main-style');

		wp_register_style('reponsive-style',THEME_URL."/reponsive.css",'all');
		 wp_enqueue_style('reponsive-style');







}
add_action('wp_enqueue_scripts','tuanpham_style');

function wpdocs_scripts_method() {
    
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );




if(!function_exists('tuanpham_url')){ 
	function tuanpham_url(){
		return get_site_url()."/wp-content/themes/batdongsan/";
	}
}

//require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

/**
 * Loads Theme Options
 */
//require( trailingslashit( get_template_directory() ) . 'option-tree/theme-options.php' );