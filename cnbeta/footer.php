<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cnBeta
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">© <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>