<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cnBeta
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'position-relative row align-items-start gx-0 border-bottom pb-3 mb-3' ); ?>>
		
			<div class="entry-header col">

				<h2 class="entry-title fs-6 lh-sm fw-bold">
					<a class="text-decoration-none link-dark stretched-link" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>

				<div class="entry-meta text-secondary small">
					<?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago · '; ?>
					<?php
						$category = get_the_category();
						$parent = get_cat_name($category[0]->category_parent);
							if (!empty($parent)) {
								echo $parent . ' > ' . $category[0]->cat_name;
							} else {
								echo $category[0]->cat_name;
							}
					?>
				</div>

			</div>

			<div class="post-thumbnail col-auto">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail(
    					'post-thumbnail',
    					array(
        					'class' => "rounded",
        					'alt' => the_title_attribute(array('echo' => false))
   						 )
					);
				} elseif ( get_the_author_meta('display_name') == 'cnbeta' && has_excerpt() ) {
					echo '<img width="128" height="72" class="rounded wp-post-image" alt="cnBeta External Thumbnail" src="' . esc_url(get_the_excerpt()) . '">';
				} else {
					echo '<picture><source srcset="../wp-content/themes/cnbeta/assets/no-thumbnail-128x72.png 128w, ../wp-content/themes/cnbeta/assets/no-thumbnail-256x144.png 256w, ../wp-content/themes/cnbeta/assets/no-thumbnail-384x216.png 384w" sizes="(max-width: 128px) 100vw, 128px" media="(prefers-color-scheme: light) or (prefers-color-scheme: no-preference)"><source srcset="../wp-content/themes/cnbeta/assets/no-thumbnail-dark-128x72.png 128w, ../wp-content/themes/cnbeta/assets/no-thumbnail-dark-256x144.png 256w, ../wp-content/themes/cnbeta/assets/no-thumbnail-dark-384x216.png 384w" sizes="(max-width: 128px) 100vw, 128px" media="(prefers-color-scheme: dark)"><img width="128" height="72" src="../wp-content/themes/cnbeta/assets/no-thumbnail-128x72.png" class="rounded" alt="Default Thumbnail" srcset="../wp-content/themes/cnbeta/assets/no-thumbnail-128x72.png 128w, ../wp-content/themes/cnbeta/assets/no-thumbnail-256x144.png 256w, ../wp-content/themes/cnbeta/assets/no-thumbnail-384x216.png 384w" sizes="(max-width: 128px) 100vw, 128px"></picture>';
				}
				?>
			</div>
		
</article>

