<?php

$wpr_routes = array(
    'wpresponder/newmail.php' => array(
        'page_title' => 'New Broadcast',
        'menu_title' => 'New Broadcast',
        'capability' => 'manage_newsletters',
        'legacy' => 1,
        'menu_slug' => 'wpresponder/newmail.php',
        'callback' => 'wpr_newmail'
    ),
    'wpresponder/allmailouts.php' => array(
        'page_title' => 'All Broadcasts',
        'menu_title' => 'All Broadcasts',
        'capability' => 'manage_newsletters',
        'legacy' => 1,
        'menu_slug' => 'wpresponder/allmailouts.php',
        'callback' => 'wpr_all_mailouts'
    ),
    '_wpr/newsletter' => array(
        'page_title' => 'Newsletters',
        'menu_title' => 'Newsletters',
        'capability' => 'manage_newsletters',
        'legacy' => 0,
        'menu_slug' => '_wpr/newsletter',
        'callback' => '_wpr_render_view'
    ),
    '_wpr/autoresponders'=> array(
        'page_title' => 'Autoresponders',
        'menu_title' => 'Autoresponders',
        'controller' => '_wpr_autoresponders_handler',
        'capability' => 'manage_newsletters',
        'legacy' => 0,
        'menu_slug' => '_wpr/autoresponders',
        'callback' => '_wpr_render_view',
        'children' => array (
            'manage' => '_wpr_autoresponder_manage',
        )
    ),
    'wpresponder/blogseries.php'=> array(
        'page_title' => 'Post Series',
        'menu_title' => 'Post Series',
        'capability' => 'manage_newsletters',
        'legacy' => 1,
        'menu_slug' => 'wpresponder/blogseries.php',
        'callback' => 'wpr_blogseries'
    ),
    '_wpr/custom_fields'=>array(
        'page_title' => 'Custom Fields',
        'menu_title' => 'Custom Fields',
        'capability' => 'manage_newsletters',
        'legacy' => 0,
        'menu_slug' => '_wpr/custom_fields',
        'callback' => '_wpr_render_view'
    ),
    'wpresponder/subscriptionforms.php' => array(
        'page_title' => 'Subscription Forms',
        'menu_title' => 'Subscription Forms',
        'capability' => 'manage_newsletters',
        'legacy' => 1,
        'menu_slug' => 'wpresponder/subscriptionforms.php',
        'callback' => 'wpr_subscriptionforms'
    ),


    'wpresponder/subscribers.php' => array(
        'page_title' => 'Subscribers',
        'menu_title' => 'Subscribers',
        'capability' => 'manage_newsletters',
        'legacy' => 1,
        'menu_slug' => "wpresponder/subscribers.php",
        'callback' => 'wpr_subscribers'
    ),
    'wpresponder/actions.php'=> array(
        'page_title' => 'Actions',
        'menu_title' => 'Actions',
        'capability' => 'manage_newsletters',
        'legacy' => 1,
        'menu_slug' => "wpresponder/actions.php",
        'callback' => 'wpr_actions'
    ),
    '_wpr/settings' => array(
        'page_title' => 'Settings',
        'menu_title' => 'Settings',
        'capability' => 'manage_newsletters',
        'legacy' => 0,
        'menu_slug' => "_wpr/settings",
        'callback' => '_wpr_render_view'
    ),
    '_wpr/importexport' => array(
        'page_title' => 'Import/Export Subscribers',
        'menu_title' => 'Import/Export',
        'capability' => 'manage_newsletters',
        'legacy' => 0,
        'menu_slug' => '_wpr/importexport',
        'callback' => '_wpr_render_view'
    ),
    '_wpr/background_procs' => array(
        'page_title' => 'Background Procs',
        'menu_title' => 'Background Procs',
        'capability' => 'manage_newsletters',
        'legacy' => 0,
        'menu_slug' => '_wpr/background_procs',
        'callback' => '_wpr_render_view'
    ),
    '_wpr/queue_management' => array(
        'page_title' => 'Queue Management',
        'menu_title' => 'Queue Management',
        'capability' => 'manage_newsletters',
        'legacy' => 0,
        'menu_slug' => '_wpr/queue_management',
        'callback' => '_wpr_render_view'
    )

);