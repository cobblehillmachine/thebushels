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

<div id="footer">
	<div class="mid-cont">
		<div id="signup-cont">
			<div class="section-title">join our newsletter</div>
			<?php if ( dynamic_sidebar('sidebar-3') ) : ?><?php endif; ?>
		</div>
	</div>
	<div id="footer-bottom">
		<div class="mid-cont">
			<div id="social-cont">
				<a id="facebook" class="social-icon" target="_blank" href="#"></a>
				<a id="twitter" class="social-icon" target="_blank" href="#"></a>
				<a id="itunes" class="social-icon" target="_blank" href="#"></a>
			</div>
			<a id="credits" href="http://www.cobblehilldigital.com" target="_blank">Site by Cobble Hill</a>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>