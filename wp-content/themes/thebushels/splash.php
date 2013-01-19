<?php
 /*
Template Name: Splash
*/

get_header(); ?>



	<div id="splash-wrap">
		<div id="splash-logo"></div>
		<div id="splash-cont">
			<form id="splash-form" name="form1" method="post" action="wp-content/themes/thebushels/contactformprocess.php">
		        <div class="section-title">Enter Your Email for free download:</div>
		        <input name="email" type="text" id="email" size="25" maxlength="100"/ >
		        <input type="submit" name="submit" id="submit" value="submit" class="submit" />
		  	</form>
			<a id="home-link" href="/home">NO Thanks, Let Me In</a>
		</div>
	</div>


		
<?php get_footer(); ?>