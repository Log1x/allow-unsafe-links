<?php
/**
 * Plugin Name: Allow Unsafe Links
 * Plugin URI:  https://github.com/log1x/allow-unsafe-links
 * Description: Prevents WordPress from automatically adding noopener and noreferrer to outbound links.
 * Version:     1.0.0
 * Author:      Brandon Nifong
 * Author URI:  https://github.com/log1x
 *
 * License:     MIT License
 * License URI: https://opensource.org/licenses/MIT
 */

/**
 * Remove rel="noopener noreferrer" in TinyMCE links
 *
 * @param  array $init
 * @return array
 */
add_filter('tiny_mce_before_init', function ($init) {
    $init['allow_unsafe_link_target'] = true;
    return $init;
});

/**
 * Prevent rel="noopener noreferrer" from automatically being added on post save.
 *
 * @return void
 */
add_filter('wp_targeted_link_rel', function () {
    return;
});
