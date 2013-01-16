<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>


		<div class="mid-cont">

			<div id="main-title">BLOG</div>
			<div id="album-cont">
				<div class="section-title">new album out now</div>
				<?php if ( dynamic_sidebar('sidebar-1') ) : ?>
					<div id="music-nav"><?php wp_nav_menu( array( 'menu' => 'wood-and-steel' )); ?></div>
				<?php endif; ?>
			</div>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php endif; ?>
		</div>


<?php get_footer(); ?>