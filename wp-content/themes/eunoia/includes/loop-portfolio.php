<?php 
/*
* The Loop for portfolio overview pages. Works in conjunction with the file template-portfolio.php and taxonomy-portfolio_entries.php
*/



global $avia_config;
$pagination = "";
$avia_config['avia_is_overview'] = true;
if(empty($post_loop_count)) $post_loop_count = 1;

do_action( 'avia_action_query_check' , 'loop-portfolio' );

$loop_counter = 1;


// check if we got a page to display:
if (have_posts()) :
	
	$extraClass = 'first';
	$style = 'portfolio-entry-no-description';
	
	$grid = 'one_fourth';
	$image_size = 'portfolio';

	
	
	switch($avia_config['portfolio']['portfolio_columns'])
	{
		case "1": $grid = 'fullwidth';  $image_size = 'fullsize'; break;
		case "2": $grid = 'one_half';   break;
		case "3": $grid = 'one_third';  break;
		case "4": $grid = 'one_fourth'; $image_size = 'portfolio_small'; break;
	}
	
	$avia_config['portfolio']['portfolio_columns_iteration'] = $avia_config['portfolio']['portfolio_columns'];
	if(isset($avia_config['portfolio']['portfolio_text']) && $avia_config['portfolio']['portfolio_text'] == 'yes' ) $style = 'portfolio-entry-description';

	
	$includeArray = "";
	if(isset($avia_config['new_query']['tax_query'][0]['terms'])) $includeArray = $avia_config['new_query']['tax_query'][0]['terms'];
	
	$args = array(
	
		'taxonomy'	=> 'portfolio_entries',
		'hide_empty'=> 0,
		'include'	=> $includeArray
	
	);

	$categories = get_categories($args);
	$container_id = "";
	$sortable = "avia_not_sortable";
	$current_page_cats = array();
	while (have_posts()){
		the_post();
		$current_item_cats = get_the_terms( $id, 'portfolio_entries' );
		if(!empty($current_item_cats))
		{
			foreach($current_item_cats as $current_item_cat)
			{
				$current_page_cats[] = $current_item_cat->term_id;
			}
		}
	}
	$current_page_cats = array_unique($current_page_cats);
	
	if(isset($avia_config['portfolio']['portfolio_sorting']) && $avia_config['portfolio']['portfolio_sorting'] == 'yes')
	{
		if(!empty($categories[0]))
		{
			$sortable = 'avia_sortable';
			$output = "<div class='sort_width_container' ><div id='js_sort_items'>";
	
			$hide = "hidden";
			if (isset($categories[1])){ $hide = ""; }
			
			$output .= "<div class='sort_by_cat $hide '>";
			$output .= "<a href='#' data-filter='all_sort' class='all_sort_button active_sort'>".__('All','avia_framework')."</a>";
			
			foreach($categories as $category)
			{
				if(in_array($category->term_id, $current_page_cats))
				{
			
				$output .= "<span class='text-sep ".$category->category_nicename."_sort_sep'>/</span>";
				$output .= "<a href='#' data-filter='".$category->category_nicename."_sort' ";
				$output .= "class='".$category->category_nicename."_sort_button' >".$category->cat_name."</a>";
				
				$container_id .= $category->term_id;
				
				}
			}
			
			$output .= "</div>";
			$output .= "</div></div>";
			
			
			//fake pagesplit
			if(empty($avia_config['dynamic_portfolio'])){
			$output .= "</div></div></div>";
			$fake_pagesplit = true;
			}
			
			echo $output;
		}
	}


	
	if(empty($avia_config['dynamic_portfolio'])){
	
		if(empty($fake_pagesplit))
		{
			echo "</div></div></div>";
			$fake_pagesplit = true;
		}
	
	}
	
	$stretch = "stretch_full";
	if(avia_layout_class( 'main' ,false ) !== 'fullsize') $stretch = 'no_stretch';
	$color_class = !empty($avia_config['page_split_style']) ? $avia_config['page_split_style'] : 'main_color';
	
	echo "<div class='portfolio-wrap ".$color_class." ".$avia_config['portfolio']['portfolio_ajax_class']." $sortable'>";
	

	echo "<div class='portfolio-sort-container isotope'>";	
	//iterate over the posts
	while (have_posts()) : the_post();	
	
		
	$the_id 	= get_the_ID();
	$parity		= $post_loop_count % 2 ? 'odd' : 'even';
	$post_class = "portfolio-entry-overview portfolio-loop-".$post_loop_count." portfolio-parity-".$parity;
	
	
	//get the categories for each post and create a string that serves as classes so the javascript can sort by those classes
	$sort_classes = "";
	$item_categories = get_the_terms( $the_id, 'portfolio_entries' );

	if(is_object($item_categories) || is_array($item_categories))
	{
		foreach ($item_categories as $cat)
		{
			$sort_classes .= $cat->slug.'_sort ';
		}
	}
			
?>

		
		<div data-ajax-id='<?php echo $the_id;?>' class='isotope-item post-entry post-entry-<?php echo $the_id;?> no_margin flex_column all_sort <?php echo $post_class .' '. $sort_classes.' '.$grid.' '.$extraClass.' '.$style; ?>'>
			
			<div class='inner-entry'>										
				<?php 
										
					$forceSmall = true;
					$the_id = get_the_ID();
					$slider = new avia_slideshow($the_id);
					$slider -> setImageSize($image_size);
					if(!empty($avia_config['portfolio']['portfolio_ajax_class'])) $slider -> set_links(get_permalink());
					if(isset($avia_config['portfolio']['portfolio_greyscale']) && $avia_config['portfolio']['portfolio_greyscale'] == 'no') {
					
						$slider -> set_overlay(false);
					}
					
					$slider -> set_caption(false);
					
					echo $slider->display($forceSmall);
					
					if(isset($avia_config['portfolio']['portfolio_text']) && $avia_config['portfolio']['portfolio_text'] == 'yes')
					{
						echo avia_title(array('class'=>'portfolio-title', 'link' => get_permalink($the_id), 'html' => "<div class='{class} title_container'><h1 class='main-title'>{title}</h1></div>"), $the_id);
						
							/*
							if(get_the_excerpt()) 
							{
								echo "<div class='portfolio_excerpt'>";
								the_excerpt();
								echo "</div>";
							}
							*/
					}
				 
				?>		
			</div>		        
		<!-- end post-entry-->
		</div>
	
	<?php 

	$loop_counter++;
	$extraClass = "";

	if($loop_counter > $avia_config['portfolio']['portfolio_columns_iteration'])
	{
		$loop_counter = 1;
		$extraClass = 'first';
	}


	endwhile;
	
	echo "</div>";	// end portfolio-sort-container
	echo "</div>";	// end loading
	

	if(isset($avia_config['portfolio']['portfolio_pagination']) && $avia_config['portfolio']['portfolio_pagination'] == 'yes')
	{
		$pagination = avia_pagination();
	}	
	echo "<!-- end -->"; //dont remove
	else: 
?>	
	
	<div class="entry">
		<h1 class='post-title'><?php _e('Nothing Found', 'avia_framework'); ?></h1>
		<p><?php _e('Sorry, no posts matched your criteria', 'avia_framework'); ?></p>
	</div>
<?php

	


	endif;
if(empty($avia_config['dynamic_portfolio'])){
	if(!empty($fake_pagesplit))
	{
		$output = " <div class='container_wrap container_split $color_class'><div class='container'>";
		$output .= "<div class='content ".avia_layout_class('content', false)." units '>";
		echo $output;
	}
}
if($pagination){echo $pagination;}

	
unset($avia_config['avia_is_overview']);		
?>
