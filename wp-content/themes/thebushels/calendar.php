<?php
 /*
Template Name: Calendar
*/

get_header(); ?>

<div class="mid-cont">

	<div id="main-title">LIVE</div>
	<?php query_posts(array('post_type' => 'calendar', 'order' => 'ASC' )); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="event-post">
			<div class="date-block"><span class="short-date"><?php the_field('short_date')?></span></div>
			<div class="event-block">
				<div class="full-date"><?php the_field('date')?></div>
				<div class="event-title"><?php the_title(); ?></div>
				<?php the_field('location')?>
			</div>
		</div>
	<?php endwhile; // end of the loop. ?>

</div>

		
<?php get_footer(); ?>