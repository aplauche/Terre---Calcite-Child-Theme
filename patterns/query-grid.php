<?php
/**
 * Title: Query of posts.
 * Slug: calcite/query-grid
 * Categories: hidden
 * Inserter: false
 */
?>

<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":true,"perPage":1},"displayLayout":{"type":"flex","columns":2},"align":"wide","className":"calcite-query","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide calcite-query"><!-- wp:post-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"bottom":"0"},"padding":{"top":"4px","right":"var:preset|spacing|xs","bottom":"4px","left":"var:preset|spacing|xs"}}},"backgroundColor":"secondary","layout":{"type":"flex"},"fontSize":"x-small"} -->
<div class="wp-block-group has-secondary-background-color has-background has-x-small-font-size" style="margin-bottom:0;padding-top:4px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:4px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:post-date /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|sm"},"margin":{"bottom":"var:preset|spacing|sm"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"bg-secondary","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-bg-secondary-background-color has-background" style="border-style:none;border-width:0px;margin-bottom:var(--wp--preset--spacing--sm);padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--sm);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--sm)"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"xl"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read More"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->