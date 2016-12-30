<?php 

function avia_prepare_dynamic_styles($options = false)
{		
	global $avia_config;
	
	if(!$options) $options 		= avia_get_option();
	$color_set 	= $styles		= array(); 
	$post_id 					= avia_get_the_ID();
	$options 					= apply_filters('avia_pre_prepare_colors', $options);
	
	//boxed or stretched layout? may be hardcoded for some themes
	$avia_config['box_class'] = "boxed"; // empty($options['color-body_style']) ? "stretched" : $options['color-body_style'];

	//iterate over the options array to get the color and bg image options and save them to new array
	foreach ($options as $key => $option)
	{
		if(strpos($key, 'colorset-') === 0)
		{
			$newkey = explode('-', $key);
			
			//add the option to the new array
			$color_set[$newkey[1]][$newkey[2]] = $option;
		}
		
		if(strpos($key, 'color-') === 0)
		{
			$newkey = explode('-', $key);
	
			//add the option to the new array
			$styles[$newkey[1]] = $option;
		}
	}
	
	
	######################################################################
	# optimize the styles array and set teh background image and sizing
	######################################################################
	
	if($avia_config['box_class'] == 'boxed')
	{
		if($styles['body_img'] == 'custom')
		{
			$styles['body_img'] = $styles['body_customimage'];
			unset($styles['body_customimage']);
		}
		
		if($styles['body_repeat']  == 'fullscreen')
		{
			$avia_config['fullscreen_image'] = $styles['body_img'];
			unset($styles['body_img']);
		}
		else
		{
			$bg = empty($styles['body_color']) ? 'transparent' : $styles['body_color'];
			$styles['body_background'] = "$bg url(".$styles['body_img'].") ".$styles['body_pos']."  ".$styles['body_repeat']." ".$styles['body_attach'];
		}
	}
	else
	{
		unset($styles['body_img'], $styles['body_color']);
	}
	
	
	######################################################################
	# optimize the array to make it smaller
	######################################################################
	
	foreach($color_set as $key => $set)
	{
		if($color_set[$key]['img'] == 'custom')
		{
			$color_set[$key]['img'] = $color_set[$key]['customimage'];
			unset($color_set[$key]['customimage']);
		}
		
		if($color_set[$key]['img'] == '')
		{
			unset($color_set[$key]['img'], $color_set[$key]['pos'], $color_set[$key]['repeat'], $color_set[$key]['attach']);
		}
		else
		{
			$bg = empty($color_set[$key]['bg']) ? 'transparent' : $color_set[$key]['bg'];
			$color_set[$key]['background_image'] = "$bg url(".$color_set[$key]['img'].") ".$color_set[$key]['pos']."  ".$color_set[$key]['repeat']." ".$color_set[$key]['attach'];
		}
		
		if(isset($color_set[$key]['customimage'])) unset($color_set[$key]['customimage']);
		
		//checks if we have a dark or light background and then creates a stronger version of the main font color for headings
		$shade = avia_backend_calc_preceived_brightness($color_set[$key]['bg'], 70) ? 'lighter' : 'darker';
		$color_set[$key]['heading'] = avia_backend_calculate_similar_color($color_set[$key]['color'], $shade, 4);
		
		// creates a new color from the background color and the heading color (results in a lighter color)
		$color_set[$key]['meta'] 	= avia_backend_merge_colors($color_set[$key]['heading'], $color_set[$key]['bg']); 
		
		
		
		
	}

	
	$avia_config['backend_colors']['color_set'] = $color_set;
	$avia_config['backend_colors']['style'] = $styles;
	
	require_once( AVIA_BASE.'css/dynamic-css.php');

}





