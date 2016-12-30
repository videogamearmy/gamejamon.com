<?php 
	global $avia_config, $more;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */	
	 get_header();
 	
 	
	 $description = is_tag() ? tag_description() : category_description();
	 echo avia_title(array('title' => avia_which_archive(), 'subtitle' => $description)); 
 		
	?>


		
		<div class='container_wrap main_color <?php avia_layout_class( 'main' ); ?> <?php avia_is_dark_bg('main_color'); ?>'>
		
			<div class='container template-blog padding-container'>	
				
				<div class='content <?php avia_layout_class( 'content' ); ?> units'>
				<?php
				
				/* Run the loop to output the posts.
				* If you want to overload this in a child theme then include a file
				* called loop-index.php and that will be used instead.
				*/
				
				
				$more = 0;
				get_template_part( 'includes/loop', 'index' );
				?>
				
				
				<!--end content-->
				</div>
				
				<?php 

				//get the sidebar
				$avia_config['currently_viewing'] = 'blog';
				get_sidebar();
				
				?>
				
			</div><!--end container-->

	


<?php get_footer(); ?>