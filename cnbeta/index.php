<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cnBeta
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			if ( get_next_posts_link() ) :
				?>
				<nav class="navigation posts-navigation border-bottom pb-3 mb-3">
    				<div class="nav-next d-grid">
						<?php next_posts_link( '下一页', 0 ); ?>
					</div>
				</nav>
				<?php
			endif;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		
	</main>

<?php
get_footer();
