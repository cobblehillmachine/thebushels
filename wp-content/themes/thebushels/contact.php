<?php
 /*
Template Name: Contact
*/

get_header(); ?>

<div class="mid-cont">

	<div id="main-title"><?php the_title(); ?></div>
	<div id="album-cont">
		<?php if ( dynamic_sidebar('sidebar-1') ) : ?><?php endif; ?>
	</div>
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
		<div id="contact-cont"><?php the_content(); ?></div>
	<?php endwhile; ?><?php endif; ?>


</div>

		
<?php get_footer(); ?>