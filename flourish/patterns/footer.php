<?php
/**
 * Title: Footer — logo, contact, menu, hours and land acknowledgement
 * Slug: flourish/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","className":"flourish-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"},"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|earth"}}}},"backgroundColor":"dune","textColor":"earth","layout":{"type":"constrained"}} -->
<footer class="wp-block-group flourish-footer has-earth-color has-dune-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:image {"width":"220px","sizeSlug":"full","linkDestination":"custom","className":"flourish-logo"} -->
<figure class="wp-block-image size-full is-resized flourish-logo"><a href="/"><img src="<?php echo flourish_image( 'logo/logo-primary-earth.svg' ); ?>" alt="Flourish Integrated Health — home" style="width:220px;height:auto"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Integrated, evidence-based care supporting women in midlife and beyond — right here in Edmonton.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"earth","iconColorValue":"#422921","iconBackgroundColor":"blush","iconBackgroundColorValue":"#F2E6D8","style":{"spacing":{"blockGap":{"left":"0.6rem"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://linkedin.com/","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"className":"is-style-flourish-eyebrow"} -->
<h2 class="wp-block-heading is-style-flourish-eyebrow">Visit</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Flourish Integrated Health<br>[Street address]<br>Edmonton, AB&nbsp;[Postal code]</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="tel:+17800000000">780-000-0000</a><br><a href="mailto:hello@example.com">hello@example.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"className":"is-style-flourish-eyebrow"} -->
<h2 class="wp-block-heading is-style-flourish-eyebrow">Explore</h2>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<!-- wp:navigation-link {"label":"Services","url":"/services/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Our Team","url":"/our-team/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"About","url":"/about/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Resources","url":"/resources/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Contact","url":"/contact/","kind":"custom"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"className":"is-style-flourish-eyebrow"} -->
<h2 class="wp-block-heading is-style-flourish-eyebrow">Hours</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Mon – Thu: 8am – 7pm<br>Fri: 8am – 4pm<br>Sat: 9am – 1pm</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|50"}}},"backgroundColor":"blush","layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignwide has-blush-background-color has-background" style="margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Flourish Integrated Health is located on Treaty 6 territory and the homeland of the Métis. We are grateful to live, work and care for one another on these lands, and we honour the First Nations, Métis and Inuit peoples whose histories, languages and cultures continue to shape this place.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"width":"150px","sizeSlug":"full","linkDestination":"none","align":"center","className":"flourish-logo","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized flourish-logo" style="margin-top:var(--wp--preset--spacing--50)"><img src="<?php echo flourish_image( 'logo/logo-textmark-earth.svg' ); ?>" alt="A space to flourish" style="width:150px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:separator {"align":"wide","backgroundColor":"clay","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|30"}}}} -->
<hr class="wp-block-separator alignwide has-text-color has-clay-color has-alpha-channel-opacity has-clay-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">© 2027 Flourish Integrated Health. All rights reserved.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">In an emergency, call 911. For health advice 24/7, call Health Link at 811.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
