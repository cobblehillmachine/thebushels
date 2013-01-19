<?php
 /*
Template Name: Gallery
*/

get_header(); ?>

<?php echo do_shortcode('[nggallery id=3]'); ?>
<div class="thumb-cont"><?php echo do_shortcode('[jj-ngg-jquery-carousel html_id="about-jcarousel" gallery="3" max_pictures="12"]'); ?></div>

		
<?php get_footer(); ?>