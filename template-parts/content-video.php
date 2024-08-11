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
		
			<div class="position-relative post-thumbnail mb-2">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail(
    					'full-thumbnail',
    					array(
        					'class' => "w-100 img-fluid rounded",
        					'alt' => the_title_attribute(array('echo' => false))
   						 )
					);
				} else {
					echo '<picture><source srcset="../wp-content/themes/cnbeta/assets/no-thumbnail-512x288.png 512w, ../wp-content/themes/cnbeta/assets/no-thumbnail-1024x576.png 1024w, ../wp-content/themes/cnbeta/assets/no-thumbnail-1536x864.png 1536w" sizes="(max-width: 512px) 100vw, 512px" media="(prefers-color-scheme: light) or (prefers-color-scheme: no-preference)"><source srcset="../wp-content/themes/cnbeta/assets/no-thumbnail-dark-512x288.png 512w, ../wp-content/themes/cnbeta/assets/no-thumbnail-dark-1024x576.png 1024w, ../wp-content/themes/cnbeta/assets/no-thumbnail-dark-1536x864.png 1536w" sizes="(max-width: 512px) 100vw, 512px" media="(prefers-color-scheme: dark)"><img width="512" height="288" src="../wp-content/themes/cnbeta/assets/no-thumbnail-512x288.png" class="w-100 img-fluid rounded" alt="Default Thumbnail" srcset="../wp-content/themes/cnbeta/assets/no-thumbnail-512x288.png 512w, ../wp-content/themes/cnbeta/assets/no-thumbnail-1024x576.png 1024w, ../wp-content/themes/cnbeta/assets/no-thumbnail-1536x864.png 1536w" sizes="(max-width: 512px) 100vw, 512px"></picture>';
				}
				?>
			</div>

			<div class="entry-header">

				<h2 class="entry-title fs-6 lh-base fw-bold mb-1">
					<a class="text-decoration-none link-dark stretched-link" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>

				<div class="entry-meta text-secondary small">
					<?php
						$excerpt = has_excerpt() ? get_the_excerpt() : '';
						$category = get_the_category();
						$cat_output = ($parent = get_cat_name($category[0]->category_parent)) ? "$parent > {$category[0]->cat_name}" : $category[0]->cat_name;

						if ($excerpt) {
							echo "<span class='entry-excerpt text-decoration-underline'>$excerpt</span>";
						} else {
							echo "<span class='entry-time'>" . get_the_time() . "</span>";
						}
						echo " · <span class='entry-category'>$cat_output</span>";
					?>
				</div>

			</div>
		
</article>
