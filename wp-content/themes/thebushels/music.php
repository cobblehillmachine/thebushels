<?php
 /*
Template Name: Music
*/

get_header(); ?>

<div class="mid-cont">
	<div id="music-cont">
		<div class="title"><?php the_field('main_title'); ?></div>
		<div class="image"><?php the_post_thumbnail('full'); ?></div>
		
		<div id="text-cont">
			<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
				<div id="quote"></div>
				<div class="content-text">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?><?php endif; ?>
		</div>
		
	</div>
	<div id="music-nav">
		<a target="_blank" href="<?php the_field('itunes'); ?>">buy on itunes</a>
		<a target="_blank" href="<?php the_field('amazon'); ?>">buy on amazon</a>
		<a target="_blank" href="<?php the_field('spotify'); ?>">listen on spotify</a>		
	</div>
	<div class="title">past albums</div>
		<?php $subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'order' => 'ASC', 'meta_key' => '_thumbnail_id' ));
		    if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post(); ?>
				<div class="past-cont">
					<div class="album-cover"><?php the_post_thumbnail('full'); ?></div>
					<div class="album-info-cont">
						<div class="album-title"><?php the_title(); ?></div>
						<div class="year"><?php the_field('year'); ?></div>
						<div class="album-info"><?php the_content(); ?></div>
					</div>
					<div class="album-links-cont">
						<a class="music-links" target="_blank" href="<?php the_field('itune_link'); ?>">buy on itunes</a>
						<a class="music-links" target="_blank" href="<?php the_field('amazon_link'); ?>">buy on amazon</a>
						<a class="music-links" target="_blank" href="<?php the_field('spotify_link'); ?>">listen on spotify</a>
					</div>
				
					
				</div>
					
	<?php endwhile; endif; wp_reset_postdata(); ?>
</div>
		
<?php get_footer(); ?>