<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<div id="footer-top">
	<div class="mid-cont">
		<div id="signup-cont">
			<div class="section-title">join our newsletter</div>
			<?php if ( dynamic_sidebar('sidebar-3') ) : ?><?php endif; ?>
		</div>
	</div>
</div>
<div id="footer-bottom">
	<div class="mid-cont">
		<div id="social-cont">
			<a id="facebook" class="social-icon" target="_blank" href="http://www.facebook.com/pages/The-Bushels/405987452798786"></a>
			<a id="twitter" class="social-icon" target="_blank" href="http://www.twitter.com/thebushels"></a>
			<a id="itunes" class="social-icon" target="_blank" href="https://itunes.apple.com/us/artist/the-bushels/id372237396"></a>
		</div>
		<a id="credits" href="http://www.cobblehilldigital.com" target="_blank">Site by Cobble Hill</a>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>