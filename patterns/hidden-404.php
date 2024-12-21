<?php
/**
 * Title: 404
 * Slug: spiekermann/hidden-404
 * Inserter: no
 */
?>

<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:heading {"level":1,"className":"ss00","fontSize":"massive"} -->
		<h1 class="wp-block-heading ss00 has-massive-font-size"><?php echo esc_html_x( 'Page', '404: First word in "Page Not Found".', 'spiekermann' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"massive"} -->
		<h1 class="wp-block-heading has-contrast-3-color has-text-color has-link-color has-massive-font-size"><?php echo esc_html_x( 'Not', '404: Second word in "Page Not Found".', 'spiekermann' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":1,"className":"ss05","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","fontSize":"massive"} -->
		<h1 class="wp-block-heading ss05 has-contrast-2-color has-text-color has-link-color has-massive-font-size"><?php echo esc_html_x( 'Found', '404: Third word in "Page Not Found".', 'spiekermann' ); ?></h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Best return to the front page.', '404: Message to convey that a webpage could not be found', 'spiekermann' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->