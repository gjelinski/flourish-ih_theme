<?php
/**
 * Title: Welcome — image and text
 * Slug: flourish/welcome-split
 * Categories: flourish, about, featured
 * Keywords: about, intro, story, media, image
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"cream","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-cream-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"flourish-photo"} -->
<figure class="wp-block-image size-full flourish-photo"><img src="<?php echo flourish_image( 'clinic-welcome.svg' ); ?>" alt="Illustration of a calm, light-filled clinic room with an arched window"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"className":"is-style-flourish-eyebrow"} -->
<p class="is-style-flourish-eyebrow">Why Flourish</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">A space to slow down and be understood</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Midlife can feel like a lot at once — sleep, mood, energy, your body changing. Too often that care is split across waiting rooms and rushed appointments. At Flourish, a coordinated team takes the time to look at the whole picture, so things finally make sense and you can start feeling like yourself again.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-flourish-checks"} -->
<ul class="wp-block-list is-style-flourish-checks"><!-- wp:list-item -->
<li>Team-based care plans shared across your practitioners</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In-person and secure virtual appointments</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alberta Health Care covered physician services</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Accessible, barrier-free clinic with free parking</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-flourish-soft"} -->
<div class="wp-block-button is-style-flourish-soft"><a class="wp-block-button__link wp-element-button" href="/about/">Our story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
