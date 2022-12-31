<?php
/**
 * Title: Hero Banner
 * Slug: calcite/hero-banner
 * Categories: calcite-patterns
 * Viewport Width: 1280
 */
?>

<!-- wp:cover {"url":"<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>","dimRatio":50,"minHeight":50,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"300px","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:300px;padding-bottom:0;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-color has-text-color" style="margin-bottom:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide"} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile"><!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"top":"12px","right":"var:preset|spacing|sm","bottom":"12px","left":"var:preset|spacing|sm"}}},"backgroundColor":"secondary"} -->
<div class="wp-block-column has-secondary-background-color has-background" style="padding-top:12px;padding-right:var(--wp--preset--spacing--sm);padding-bottom:12px;padding-left:var(--wp--preset--spacing--sm);flex-basis:75%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="letter-spacing:3px;text-transform:uppercase">Lorem Ipsum</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","backgroundColor":"bg-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-bg-secondary-background-color has-background"><!-- wp:heading {"level":1,"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","right":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|sm"}}}} -->
<h1 class="alignwide" style="padding-top:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--sm);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--sm)">Lorem ipsum</h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
