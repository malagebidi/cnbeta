<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cnBeta
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'position-relative border-bottom pb-3 mb-3' ); ?>>
		
			<div class="post-thumbnail mb-2">
				<?php the_post_thumbnail(
    					'full-thumbnail',
    					array(
        					'class' => "w-100 img-fluid rounded",
        					'alt' => the_title_attribute(array('echo' => false))
   						 )
					);
				?>
			</div>

			<div class="entry-header">

				<h2 class="entry-title fs-6 lh-base fw-bold mb-1">
					<a class="text-decoration-none link-dark stretched-link" target="_blank" href="<?php echo wp_strip_all_tags(get_the_excerpt()); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>

				<div class="entry-meta text-secondary small">
					<?php
						$date = get_the_time();
						$category = get_the_category();
						$parent = get_cat_name($category[0]->category_parent);
						$category_output = !empty($parent) ? $parent . ' > ' . $category[0]->cat_name : $category[0]->cat_name;

						echo $date . ' · ' . $category_output;
					?>
				</div>

			</div>
		
</article>