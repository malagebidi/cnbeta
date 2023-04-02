<?php
/**
 * The single template file
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
				?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'border-bottom-0' ); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

				</article>

			<?php endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		
	</main>

<?php
get_footer();
