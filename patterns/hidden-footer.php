<?php
/**
 * Title: footer
 * Slug: spiekermann/hidden-footer
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|body-margin","padding":{"bottom":"var:preset|spacing|body-margin"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--body-margin)">
	<!-- wp:group {"align":"wide","style":{"typography":{"lineHeight":"1"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="line-height:1">
		<!-- wp:site-title {"level":0,"isLink":false,"className":"is-style-spiekermann-fitty","style":{"typography":{"lineHeight":"1"}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"typography":{"textTransform":"uppercase","letterSpacing":"0.025em"}},"fontSize":"xx-small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide has-xx-small-font-size"
		style="letter-spacing:0.025em;text-transform:uppercase">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.275em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"spiekermann/copyright-year"}}}} -->
			<p><?php esc_html_e( '© [year]', 'spiekermann' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-small"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph -->
		<?php /* Translators: %s = Theme author name, linked */ ?>
		<p><?php printf( esc_html( _x( 'Theme by %s', '%s = Theme author name, linked', 'spiekermann' ) ), '<a href="https://andersnoren.se">Anders Norén</a>' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->