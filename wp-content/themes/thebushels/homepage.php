<?php
 /*
Template Name: Homepage
*/

get_header(); ?>

	<?php echo do_shortcode('[nggallery id=1]'); ?>
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
		<div id="music-nav"><?php wp_nav_menu( array( 'menu' => 'wood-and-steel' )); ?></div>
	</div>

		
<?php get_footer(); ?>