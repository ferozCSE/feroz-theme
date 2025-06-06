<?php
/**
 * Title: Footer social
 * Slug: codersblocks/footer-social
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with centered site title and social links.
 *
 * @package WordPress
 * @subpackage Coders-blocks
 * @since 
 * Coders Blocks 1.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"40vh"}},"textColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull has-contrast-color has-text-color" style="min-height:40vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:site-logo {"align":"center","style":{"spacing":{"margin":{"bottom":"6px"}}}} /-->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Proudly powered by <a href="https://wordpress.org">WordPress</a></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}},"className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<ul class="wp-block-social-links has-normal-icon-size is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->
