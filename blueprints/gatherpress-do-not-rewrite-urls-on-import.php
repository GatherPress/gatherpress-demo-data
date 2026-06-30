<?php
/**
 * Plugin Name: Disable URL Rewriting on Import
 * Description: Forces rewrite_urls to false during WP import, which seems to be problem. See https://github.com/GatherPress/gatherpress/issues/1840
 */

add_filter( 'wp_import_options', function ( $options ) {
    $options['rewrite_urls'] = false;
    return $options;
} );