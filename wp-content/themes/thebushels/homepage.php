<?php
 /*
Template Name: Homepage
*/

get_header(); ?>

	<?php echo do_shortcode('[nggallery id=1]'); ?>
	<!-- <div id="home-slide" style="background:<?php//  nggSlideshowWidget(1,780,200); ?>"></div>
	<?php// if ( dynamic_sidebar('sidebar-2') ) : ?><?php //endif; ?> -->
		
	<div class="mid-cont">
		<div id="home-cont">
			<div class="title"><?php the_field('title'); ?></div>
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
	</div>

		
<?php get_footer(); ?>