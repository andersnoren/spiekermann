<?php
/**
 * Title: Single
 * Slug: spiekermann/hidden-single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|110","bottom":"var:preset|spacing|110"},"blockGap":"var:preset|spacing|110","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--110);padding-bottom:var(--wp--preset--spacing--110)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group alignwide" style="padding-top:0;padding-bottom:0">
			<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} /-->
			<!-- wp:post-title {"level":1} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-featured-image {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|70","margin":{"top":"var:preset|spacing|90"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--90)">
		<!-- wp:post-content {"lock":{"move":false,"remove":false},"align":"full","layout":{"type":"constrained"}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-terms {"term":"post_tag","separator":"  ","className":"is-style-spiekermann-post-terms-tag-icon","fontSize":"normal"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"tagName":"nav","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<nav aria-label="Posts" class="wp-block-group">
			<!-- wp:post-navigation-link {"textAlign":"right","label":"","arrow":"arrow","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->
			<!-- wp:post-navigation-link {"type":"previous","label":"","arrow":"arrow","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->
		</nav>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

</main>
<!-- /wp:group -->

<?php if ( spiekermann_is_block_registered( 'jetpack/related-posts' ) ) : ?>
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:jetpack/related-posts {"displayDate":false,"displayThumbnails":true,"align":"wide"} -->
		<div class="wp-block-jetpack-related-posts alignwide">
			<!-- wp:heading {"placeholder":"Add a headline","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'More Like This', 'spiekermann' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:jetpack/related-posts -->
	</div>
	<!-- /wp:group -->
<?php endif; ?>

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->