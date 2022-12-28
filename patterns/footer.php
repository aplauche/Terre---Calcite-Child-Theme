<?php
/**
 * Title: Footer with site title, text, links.
 * Slug: calcite/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|md"}}},"backgroundColor":"secondary","layout":{"type":"constrained"},"fontSize":"x-small"} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--md)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2>Calcite</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">© <?php echo esc_html( gmdate( 'Y' ) ); ?>  - <a href="https://antonplauche.com">Anton Plauche</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"160px"} -->
<div style="height:160px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><a href="#">Twitter</a> · <a href="#">Instagram</a> · <a href="#">LinkedIn</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->