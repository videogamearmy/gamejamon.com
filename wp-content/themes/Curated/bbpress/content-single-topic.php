<?php

/**
 * Single Topic Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="bbpress-forums">

	<?php do_action( 'bbp_template_before_single_topic' ); ?>

	<?php if ( post_password_required() ) : ?>

		<?php bbp_get_template_part( 'form', 'protected' ); ?>

	<?php else : ?>

		<header>
			<h1 itemprop="name" class="entry-title"><?php bbp_topic_title(); ?></h1>
			<div class="title-divider"></div>
			<div class="meta-share">
				<span class="header-font"><?php _e('SHARE', MAHA_TEXT_DOMAIN); ?> </span>
				<a class="social-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink($post->ID); ?>&amp;t=<?php echo get_the_title($post->ID); ?>" title="Share on Facebook" target="_blank"><i class="icon-facebook"></i></a>
				<a class="social-twitter" href="https://twitter.com/home?status=<?php echo get_the_title($post->ID); ?>+<?php echo get_permalink($post->ID); ?>" title="Share on Twitter" target="_blank"><i class="icon-twitter"></i></a>
				<a class="social-googleplus" href="https://plus.google.com/share?url=<?php echo get_permalink($post->ID); ?>" title="Share on Google+" target="_blank"><i class="icon-gplus"></i></a>
				<a class="social-pinterest" href="http://pinterest.com/pin/create/button/?url=<?php echo get_permalink($post->ID); ?>&amp;media=<?php echo maha_featured_url( $post->ID , ''); ?>&amp;description=<?php echo get_the_title($post->ID); ?>" title="Share on Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
			</div>
			<div class="maha-bbp-tag maha-heading-font">
			<?php
				bbp_topic_favorite_link();

				$topic_tag = bbp_get_topic_tag_list();
				$args = array( 'before' => ' / ' );
				if ( !empty( $topic_tag )) {
					$args['after'] = ' / ';
				}

				bbp_topic_subscription_link( $args );

				echo $topic_tag;
			?>
			</div>
		</header>

		<?php if ( bbp_show_lead_topic() ) : ?>

			<?php bbp_get_template_part( 'content', 'single-topic-lead' ); ?>

		<?php endif; ?>

		<?php if ( bbp_has_replies() ) : ?>

			<?php bbp_get_template_part( 'loop',       'replies' ); ?>

			<?php bbp_get_template_part( 'pagination', 'replies' ); ?>

		<?php endif; ?>

		<?php bbp_get_template_part( 'form', 'reply' ); ?>

	<?php endif; ?>

	<?php do_action( 'bbp_template_after_single_topic' ); ?>

</div>
