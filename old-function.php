<?php

/* *---------------------------------------------------------------------------
 * Herozh - Child Theme Functions and Definitions
 * ----------------------------------------------------------------------------
 * Contents:
 * 00 - Global Variables
 * 01 - Theme Constants
 * 02 - Basic Definitions
 * 03 - Includes
 */

/** Remove all possible fields **/
function wc_remove_checkout_fields($fields) {

    // Billing fields
    // unset( $fields['billing']['billing_first_name'] );
    // unset( $fields['billing']['billing_last_name'] );
    unset($fields['billing']['billing_email']);
    unset($fields['billing']['billing_phone']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);

    // Shipping fields
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_phone']);
    unset($fields['shipping']['shipping_state']);
    unset($fields['shipping']['shipping_first_name']);
    unset($fields['shipping']['shipping_last_name']);
    unset($fields['shipping']['shipping_address_1']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_city']);
    unset($fields['shipping']['shipping_postcode']);

    // Order fields
    unset($fields['order']['order_comments']);

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'wc_remove_checkout_fields');

// remove note filed in checkout page
add_filter('woocommerce_enable_order_notes_field', '__return_false', 9999);

// woocommarce excerpt 
function product_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'product_excerpt_length', 999);
// require_once __DIR__ . '/inc/post-types.php';

// require_once __FILE__ . './inc/post-types.php';



// XaniisTradingPlatformhelp
function xana_custom_post_types() {
    register_post_type('help', [
        'label'                 => __('Help', 'xana'),
        'labels'                => [
            //     'name'                  => _x('Helps', 'Helps', 'xana'),
            //     'singular_name'         => _x('Help', 'Help', 'xana'),
            //     'menu_name'             => __('Helps', 'xana'),
            //     'name_admin_bar'        => __('Help', 'xana'),
            //     'archives'              => __('Help Archives', 'xana'),
            //     'attributes'            => __('Help Attributes', 'xana'),
            //     'parent_item_colon'     => __('Parent Help:', 'xana'),
            //     'all_items'             => __('All Helps', 'xana'),
            //     'add_new_item'          => __('Add New Help', 'xana'),
            //     'add_new'               => __('Add New', 'xana'),
            //     'new_item'              => __('New Help', 'xana'),
            //     'edit_item'             => __('Edit Help', 'xana'),
            //     'update_item'           => __('Update Help', 'xana'),
            //     'view_item'             => __('View Help', 'xana'),
            //     'view_items'            => __('View Helps', 'xana'),
            //     'search_items'          => __('Search Help', 'xana'),
            //     'not_found'             => __('Not found', 'xana'),
            //     'not_found_in_trash'    => __('Not found in Trash', 'xana'),
            //     'featured_image'        => __('Featured Image', 'xana'),
            //     'set_featured_image'    => __('Set featured image', 'xana'),
            //     'remove_featured_image' => __('Remove featured image', 'xana'),
            //     'use_featured_image'    => __('Use as featured image', 'xana'),
            //     'insert_into_item'      => __('Insert into Help', 'xana'),
            //     'uploaded_to_this_item' => __('Uploaded to this Help', 'xana'),
            //     'items_list'            => __('Helps list', 'xana'),
            //     'items_list_navigation' => __('Helps list navigation', 'xana'),
            //     'filter_items_list'     => __('Filter Helps list', 'xana'),
        ],
        'description'           => __('Help Description', 'xana'),
        'public'                => true,
        'hierarchical'          => true,
        // 'exclude_from_search'   => false,
        // 'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'show_in_rest' => true,
        // 'rest_base' => "",
        // 'rest_namespace' => "",
        // 'rest_controller_class' => "",
        'menu_position'         => 5,
        // 'menu_icon' => "",
        'capability_type'       => 'page',
        // 'capabilities'       => [],
        // 'menu_icon'       => '',
        // 'map_meta_cap'       => '',
        'supports' => ['title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'],
        // 'register_meta_box_cb' => cb,
        // 'taxonomies'            => array('group'),
        'can_export'            => true,
        // 'has_archive'           => true,
        'rewrite'           => [
            'slug' => 'XaniisTradingPlatformhelp'
        ],

    ]);
}
add_action('init', 'xana_custom_post_types', 0);

// function xana_add_custom_taxonomies() {
//     register_taxonomy('group', 'help', array(
//         // Hierarchical taxonomy (like categories)
//         'hierarchical' => true,
//         // This array of options controls the labels displayed in the WordPress Admin UI
//         'labels' => array(
//             'name' => _x('Group', 'taxonomy general name'),
//             'singular_name' => _x('Group', 'taxonomy singular name'),
//             'search_items' =>  __('Search Groups'),
//             'all_items' => __('All Groups'),
//             'parent_item' => __('Parent Group'),
//             'parent_item_colon' => __('Parent Group:'),
//             'edit_item' => __('Edit Group'),
//             'update_item' => __('Update Group'),
//             'add_new_item' => __('Add New Group'),
//             'new_item_name' => __('New Group Name'),
//             'menu_name' => __('Groups'),
//         ),
//         // Control the slugs used for this taxonomy
//         'rewrite' => array(
//             'slug' => 'Groups', // This controls the base slug that will display before each term
//             'with_front' => false, // Don't display the category base before "/locations/"
//             'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
//         ),
//     ));
// }
// add_action('init', 'xana_add_custom_taxonomies', 0);




add_action("init", "xana_menus");
function xana_menus() {

    register_nav_menus([
        'help_menu' => __("Help Menu"),
    ]);
}


add_action('widgets_init', 'xana_awesome_sidebar');
function xana_awesome_sidebar() {
    $args = array(
        'name'          => 'Help Sidebar',
        'id'            => 'help-sidebar',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    );
    register_sidebar($args);
}
