<div class="post-box-big" itemscope itemtype="http://schema.org/Article">
	<?php
	// Thumbnail
	if ( has_post_thumbnail() ) { // Set Featured Image
		?>
		<div class="thumb-wrap zoom-zoom">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
				<img height="193" width="360" itemprop="image" class="entry-thumb zoom-it three" src="<?php echo maha_featured_url( get_the_ID() , 'mh_medium'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
			</a>
		</div>
		<?php
    } elseif( maha_first_post_image() ) { // Set the first image from the editor
		echo '<div class="thumb-wrap zoom-zoom">';
		echo '<img height="193" width="360" itemprop="image" class="entry-thumb zoom-it three" src="'.maha_first_post_image().'" alt="'.get_the_title().'" title="'.get_the_title().'"/>';
		echo '</div>';
   	}
	?>
	<div class="meta-info no-bottom">
		<span class="ava-auth">
			<img width="14" height="14" itemprop="image" class="entry-thumb" src="<?php echo maha_avatar_url(get_avatar( get_the_author_meta('user_email'), 48 )); ?>" alt="" title="<?php the_author(); ?>"/>
		</span>
		<span itemprop="author" class="entry-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span><span class="coma">,</span> 
		<time itemprop="dateCreated" class="entry-date" datetime="<?php the_time( 'c' ); ?>" >
			<?php the_time( get_option( 'date_format' ) ); ?>
		</time>
	</div>
	<h3 itemprop="name" class="entry-title">
		<a itemprop="url" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
			<?php the_title(); ?>
		</a>
	</h3>
	<div class="meta-count">
		<?php if ( maha_meta_review( get_the_ID() ) != '' ) { ?>
		<span class="td-page-meta" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
			<meta itemprop="worstRating" content="1">
			<meta itemprop="bestRating" content="10">
			<meta itemprop="ratingValue" content="<?php echo maha_meta_review( get_the_ID() ); ?>">
		</span>
		<span class="i-review"><i class="icon-star"></i> <?php echo maha_meta_review( get_the_ID() ); ?></span>
		<?php } ?>
		<span class="i-category"><?php maha_post_category( get_the_ID() ); ?></span>
	</div>
	<?php if ($post->i_summary and $post->i_summary == true) { ?>
	<div class="i-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php } ?>
</div>