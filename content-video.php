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
				<button class="play-button">
					<svg viewBox="0 0 60 60">
						<g>
							<path d="M45.563,29.174l-22-15c-0.307-0.208-0.703-0.231-1.031-0.058C22.205,14.289,22,14.629,22,15v30
									c0,0.371,0.205,0.711,0.533,0.884C22.679,45.962,22.84,46,23,46c0.197,0,0.394-0.059,0.563-0.174l22-15
									C45.836,30.64,46,30.331,46,30S45.836,29.36,45.563,29.174z M24,43.107V16.893L43.225,30L24,43.107z"/>
							<path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
									S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
						</g>
					</svg>
				</button>
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
						$date = get_the_time();
						$category = get_the_category();
						$parent = get_cat_name($category[0]->category_parent);
						$category_output = !empty($parent) ? $parent . ' > ' . $category[0]->cat_name : $category[0]->cat_name;

						echo $date . ' · ' . $category_output;
					?>
				</div>

			</div>
		
</article>
