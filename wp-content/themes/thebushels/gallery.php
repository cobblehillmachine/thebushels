<?php
 /*
Template Name: Gallery
*/

get_header(); ?>

<div class="gallery-wrap">

<?php 
  echo  do_shortcode("[galleryview id=3 showPanels=true showCaptions=false showFilmstrip=true panelWidth=1000 panelHeight=650 panelScale=nocrop transitionSpeed=800 transitionInterval=4000 fadePanels=true frameWidth=60 frameHeight=60 filmstripPosition=bottom pointerSize=8 frameScale=crop frameGap=15 frameOpacity=0.3 easingValue=easeOutBounce navTheme=dark startFrame=1 pauseOnHover=true]"); 
?>
</div>

<!-- <div class="thumb-cont"><?php// echo do_shortcode('[jj-ngg-jquery-carousel html_id="about-jcarousel" gallery="3" max_pictures="12"]'); ?></div> -->

		
<?php get_footer(); ?>