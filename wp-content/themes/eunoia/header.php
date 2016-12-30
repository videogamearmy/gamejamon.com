<?php
	global $avia_config;

	$style 		= $avia_config['box_class'];
	$responsive	= avia_get_option('responsive_layout','responsive');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo avia_get_browser('class', true); echo " html_$style ".$responsive;?> ">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php

	/*
	 * outputs a rel=follow or nofollow tag to circumvent google duplicate content for archives
	 * located in framework/php/function-set-avia-frontend.php
	 */
	 if (function_exists('avia_set_follow') && empty($avia_config['deactivate_seo'])) { echo avia_set_follow(); }


	 /*
	 * outputs a favicon if defined
	 */
	 if (function_exists('avia_favicon'))    { echo avia_favicon(avia_get_option('favicon')); }

	echo "\n\n\n<!-- page title, displayed in your browser bar -->\n";

	if(!empty($avia_config['deactivate_seo']))
	{
		$avia_page_title = wp_title('', false);
	}
	else
	{
		$avia_page_title = get_bloginfo('name') . ' | ' . (is_home() ? get_bloginfo('description') : wp_title('', false));
	}

	echo "<title>$avia_page_title</title>";
?>


<!-- add feeds, pingback and stuff-->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> RSS2 Feed" href="<?php avia_option('feedburner',get_bloginfo('rss2_url')); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!-- add css stylesheets -->

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/grid.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/base.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/layout.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/shortcodes.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/slideshow.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen"/>


<!-- mobile setting -->
<?php
if($responsive === 'responsive') echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">';
?>


<?php

	/* add javascript */

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'avia-default' );
	wp_enqueue_script( 'avia-prettyPhoto' );
	wp_enqueue_script( 'avia-html5-video' );
	wp_enqueue_script( 'aviapoly-slider' );
	wp_enqueue_script( 'avia-social' );




	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }

?>

<!-- plugin and theme output with wp_head() -->
<?php

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */

	wp_head();
?>


<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/custom.css" type="text/css" media="screen"/>

</head>



<?php
/*
 * prepare big slideshow if available
 * If we are displaying a dynamic template the slideshow might already be set
 * therefore we dont need to call it here
 */

if(!avia_is_dynamic_template(avia_get_the_ID()))
{
	if(isset($post))
	{
		$slider = new avia_slideshow(avia_get_the_ID());
		$slider->customClass('stretch_full');

		$avia_config['slide_output'] =  $slider->display_big();
	}
}

if(!empty($avia_config['slide_output'])) {$style .= " big_slider_active ";}
?>


<body id="top" <?php body_class($style." ".$avia_config['font_stack']); ?>>

	<div id='wrap_all'>

				<!-- ####### HEAD CONTAINER ####### -->
				<div id='header_meta' class='stretch_full <?php avia_is_dark_bg($avia_config['backend_colors']['style']['body_color']); ?>'>

					<div class='container_wrap'>

					<?php

						/*
						* Hook that can be used for plugins and theme extensions like the wpml language selector
						*/



						echo "<div class='header_meta container stretch_full'>";

						do_action('avia_meta_header');

						$small_header_info = avia_get_option('small_header');
						if($small_header_info) echo "<div class='small_header_info meta-color'>$small_header_info</div>";

							/*
							*	display the themes social media icons, defined in the wordpress backend
							*   the avia_social_media_icons function is located in includes/helper-social-media-php
							*/
							$args = array('outside'=>'ul', 'inside'=>'li', 'append' => '');
							avia_social_media_icons($args);


						echo "</div>";
						?>

					 </div>

			 </div>

			<!-- ####### HEAD CONTAINER ####### -->
				<div id='header'>

				<div class='container_wrap main_color <?php avia_is_dark_bg('main_color'); ?>'>

						<div class='container' id='menu_container'>

						<?php
						/*
						*	display the theme logo by checking if the default logo was overwritten in the backend.
						*   the function is located at framework/php/function-set-avia-frontend-functions.php in case you need to edit the output
						*/
						echo avia_logo(AVIA_BASE_URL.'images/layout/logo.png');

						/*
						*	display the main navigation menu
						*   check if a description for submenu items was added and change the menu class accordingly
						*   modify the output in your wordpress admin backend at appearance->menus
						*/


						echo "<div class='main_menu' data-selectname='".__('Select a page','avia_framework')."'>";
						$args = array('theme_location'=>'avia', 'fallback_cb' => 'avia_fallback_menu');
						wp_nav_menu($args);
						echo "</div>";
						?>

						</div><!-- end container-->

				</div><!-- end container_wrap-->

			<!-- ####### END HEAD CONTAINER ####### -->
			</div>


			<?php
			//display slideshow big if one is available
			if(!empty($avia_config['slide_output']))
			{
				echo "<!-- ####### SLIDESHOW CONTAINER ####### -->";
				echo "<div id='slideshow_big' class='main_color container_wrap ".avia_is_dark_bg('main_color', true)."'>";
				echo "<div class='container'>".$avia_config['slide_output']."</div></div>";
			}
			?>




		<!-- ####### MAIN CONTAINER ####### -->
		<div id='main'>