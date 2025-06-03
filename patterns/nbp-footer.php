<?php
/**
 * Title: NBP Footer
 * Slug: codersblocks/nbp-footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline, input field, and links.
 *
 * @package WordPress
 * @subpackage Coders_Blocks
 * @since Coders Blocks 1.0
 */
?>


<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(135deg,rgb(74,85,104) 0%,rgb(102,105,110) 100%)","text":"#f7fafc"},"elements":{"link":{"color":{"text":"#f7fafc"}}},"spacing":{"padding":{"top":"1.5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-text-color has-background has-link-color"
    style="color:#f7fafc;background:linear-gradient(135deg,rgb(74,85,104) 0%,rgb(102,105,110) 100%);padding-top:1.5rem">
    <!-- wp:group {"align":"wide","className":"footer-container","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|50"}},"border":{"radius":"0.38rem"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide footer-container"
        style="border-radius:0.38rem;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"width":"240px"} -->
            <div class="wp-block-column" style="flex-basis:240px">
                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"> Services</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list {"className":"footer-listitem","style":{"spacing":{"margin":{"top":"0.5rem","left":"0"},"padding":{"right":"0","left":"0"}}},"fontSize":"small"} -->
                    <ul style="margin-top:0.5rem;margin-left:0;padding-right:0;padding-left:0"
                        class="wp-block-list footer-listitem has-small-font-size">
                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a>Branding</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Design</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a>Marketing</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Advertisement</a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"240px"} -->
            <div class="wp-block-column" style="flex-basis:240px">
                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><strong>Company</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list {"className":"footer-listitem","style":{"spacing":{"margin":{"top":"0.5rem","left":"0"},"padding":{"right":"0","left":"0"}}},"fontSize":"small"} -->
                    <ul style="margin-top:0.5rem;margin-left:0;padding-right:0;padding-left:0"
                        class="wp-block-list footer-listitem has-small-font-size">
                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>About Us</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Contact</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Jobs</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Press Kit</a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"240px","layout":{"type":"constrained"}} -->
            <div class="wp-block-column" style="flex-basis:240px">
                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><strong>Legal</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list {"className":"footer-listitem","style":{"spacing":{"margin":{"top":"0.5rem","left":"0"},"padding":{"right":"0","left":"0"}}},"fontSize":"small"} -->
                    <ul style="margin-top:0.5rem;margin-left:0;padding-right:0;padding-left:0"
                        class="wp-block-list footer-listitem has-small-font-size">
                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Terms of use</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Privacy policy</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Cookie policy</a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"500px"} -->
            <div class="wp-block-column" style="flex-basis:500px">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":6,"style":{"typography":{"writingMode":"horizontal-tb","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"1rem"}}},"fontSize":"large"} -->
                    <h6 class="wp-block-heading has-large-font-size"
                        style="margin-bottom:1rem;text-transform:capitalize;writing-mode:horizontal-tb">
                        <strong>Newsletter</strong></h6>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Enter your email address to get the latest updates.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"className":"input-field","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"1rem","right":"1rem"}},"border":{"radius":"0.38rem"}},"backgroundColor":"contrast","textColor":"base","fontSize":"medium"} -->
                        <p class="input-field has-base-color has-contrast-background-color has-text-color has-background has-link-color has-medium-font-size"
                            style="border-radius:0.38rem;padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem">
                            you@example.com</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"textAlign":"left","textColor":"base","className":"footer-btn","style":{"typography":{"writingMode":"horizontal-tb"},"color":{"background":"#2563eb"},"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.5rem","bottom":"0.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"0.5rem"}}} -->
                            <div class="wp-block-button footer-btn" style="writing-mode:horizontal-tb"><a
                                    class="wp-block-button__link has-base-color has-text-color has-background has-link-color has-text-align-left wp-element-button"
                                    style="border-radius:0.5rem;background-color:#2563eb;padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem">Subscribe</a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"1.5rem","bottom":"1.5rem"}},"color":{"background":"#1f2937"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignfull has-background"
        style="background-color:#1f2937;padding-top:1.5rem;padding-right:1rem;padding-bottom:1.5rem;padding-left:1rem">
        <!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:columns -->
            <div class="wp-block-columns">
                <!-- wp:column {"width":""} -->
                <div class="wp-block-column">
                    <!-- wp:paragraph {"align":"left","className":"footer-bottom-p","fontSize":"small"} -->
                    <p class="has-text-align-left footer-bottom-p has-small-font-size">©&nbsp;2025&nbsp;- All rights
                        reserved by Coders Time</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"330px"} -->
                <div class="wp-block-column" style="flex-basis:330px">
                    <!-- wp:social-links {"openInNewTab":true,"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
                    <ul class="wp-block-social-links">
                        <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->