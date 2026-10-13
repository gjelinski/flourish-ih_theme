<?php
/**
 * Title: Header — logo, menu and booking button
 * Slug: flourish/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"header","className":"flourish-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group flourish-header" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"width":"200px","sizeSlug":"full","linkDestination":"custom","className":"flourish-logo"} -->
<figure class="wp-block-image size-full is-resized flourish-logo"><a href="/"><img src="<?php echo flourish_image( 'logo/logo-primary-clay.svg' ); ?>" alt="Flourish Integrated Health — home" style="width:200px;height:auto"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<!-- wp:navigation-link {"label":"Services","url":"/services/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Our Team","url":"/our-team/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"About","url":"/about/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Resources","url":"/resources/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Contact","url":"/contact/","kind":"custom"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"className":"flourish-header__cta"} -->
<div class="wp-block-buttons flourish-header__cta"><!-- wp:button {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.25rem","right":"1.25rem"}}},"fontSize":"small"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="/contact/" style="padding-top:0.75rem;padding-right:1.25rem;padding-bottom:0.75rem;padding-left:1.25rem">Book your session</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
