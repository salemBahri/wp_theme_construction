<?php

// menu
function broxy_register_menues(){
	register_nav_menus(array('main-menu'=>'Main Menu'));
}
add_action('init','broxy_register_menues');

function elyosser_enqueue_assets() {
    // Enqueue CSS files
    wp_enqueue_style('elyosser-bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', array(), null);
    wp_enqueue_style('elyosser-bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css', array(), null);
    wp_enqueue_style('elyosser-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('elyosser-yellow', get_template_directory_uri() . '/assets/css/colors/yellow.css', array(), null);
    wp_enqueue_style('elyosser-bg', get_template_directory_uri() . '/assets/css/bg.css', array(), null);
    wp_enqueue_style('elyosser-color', get_template_directory_uri() . '/assets/css/color.css', array(), null);
    wp_enqueue_style('elyosser-plugin', get_template_directory_uri() . '/assets/css/plugin.css', array(), null);
    wp_enqueue_style('elyosser-plugins', get_template_directory_uri() . '/assets/css/plugins.css', array(), null);
    wp_enqueue_style('elyosser-rev-settings', get_template_directory_uri() . '/assets/css/rev-settings.css', array(), null);
    wp_enqueue_style('elyosser-style', get_template_directory_uri() . '/assets/css/style.css', array(), null);
    wp_enqueue_style('elyosser-rs-settings', get_template_directory_uri() . '/assets/rs-plugin/css/settings.css', array(), null);

    // Enqueue JS files
    wp_enqueue_script('elyosser-designesia', get_template_directory_uri() . '/assets/js/designesia.js', array('jquery'), null, true);
    wp_enqueue_script('elyosser-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), null, true);
    wp_enqueue_script('elyosser-themepunch-plugins', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.plugins.min.js', array('jquery'), null, true);
    wp_enqueue_script('elyosser-themepunch-revolution', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'elyosser_enqueue_assets');



function theme_customizer_settings($wp_customize) {
    // Add Logo Section
    $wp_customize->add_section('logo_section', array(
        'title'    => __('Logo Settings', 'your-theme'),
        'priority' => 30,
    ));

    // Add Primary Logo setting
    $wp_customize->add_setting('primary_logo', array(
        'default' => get_template_directory_uri() . '/assets/images/logo-2.png',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'primary_logo_control', array(
        'label'    => __('Primary Logo', 'your-theme'),
        'section'  => 'logo_section',
        'settings' => 'primary_logo',
    )));

    // Add Secondary Logo setting
    $wp_customize->add_setting('secondary_logo', array(
        'default' => get_template_directory_uri() . '/assets/images/logo-border.png',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'secondary_logo_control', array(
        'label'    => __('Secondary Logo', 'your-theme'),
        'section'  => 'logo_section',
        'settings' => 'secondary_logo',
    )));

    // Add Footer Logo setting
    $wp_customize->add_setting('footer_logo', array(
        'default' => get_template_directory_uri() . '/assets/images/logo.png',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_control', array(
        'label'    => __('Footer Logo', 'your-theme'),
        'section'  => 'logo_section',
        'settings' => 'footer_logo',
    )));
}
add_action('customize_register', 'theme_customizer_settings');




function theme_customizer_social_media($wp_customize) {
    // Add Social Media Section
    $wp_customize->add_section('social_media_section', array(
        'title'    => __('Social Media Links', 'your-theme'),
        'priority' => 40,
    ));

    // Add Facebook URL setting
    $wp_customize->add_setting('facebook_url', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('facebook_url_control', array(
        'label'    => __('Facebook URL', 'your-theme'),
        'section'  => 'social_media_section',
        'settings' => 'facebook_url',
        'type'     => 'url',
    ));

    // Add Twitter URL setting
    $wp_customize->add_setting('twitter_url', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('twitter_url_control', array(
        'label'    => __('Twitter URL', 'your-theme'),
        'section'  => 'social_media_section',
        'settings' => 'twitter_url',
        'type'     => 'url',
    ));

    // Add Instagram URL setting
    $wp_customize->add_setting('instagram_url', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('instagram_url_control', array(
        'label'    => __('Instagram URL', 'your-theme'),
        'section'  => 'social_media_section',
        'settings' => 'instagram_url',
        'type'     => 'url',
    ));

    // Add Google+ URL setting
    $wp_customize->add_setting('google_plus_url', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('google_plus_url_control', array(
        'label'    => __('Google+ URL', 'your-theme'),
        'section'  => 'social_media_section',
        'settings' => 'google_plus_url',
        'type'     => 'url',
    ));

    // Add RSS URL setting
    $wp_customize->add_setting('rss_url', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('rss_url_control', array(
        'label'    => __('RSS URL', 'your-theme'),
        'section'  => 'social_media_section',
        'settings' => 'rss_url',
        'type'     => 'url',
    ));
}
add_action('customize_register', 'theme_customizer_social_media');


function theme_customizer_welcome_text($wp_customize) {
    // Add Section
    $wp_customize->add_section('welcome_text_section', array(
        'title'    => __('Welcome Text', 'your-theme'),
        'priority' => 30,
    ));

    // Add Setting
    $wp_customize->add_setting('welcome_text', array(
        'default'   => 'Bienvenue à El Yosr Bâtiments',
        'transport' => 'refresh',
    ));

    // Add Control
    $wp_customize->add_control('welcome_text_control', array(
        'label'    => __('Welcome Text', 'your-theme'),
        'section'  => 'welcome_text_section',
        'settings' => 'welcome_text',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'theme_customizer_welcome_text');




function theme_contact_customizer_settings($wp_customize) {
    // Add Contact Section
    $wp_customize->add_section('contact_section', array(
        'title'    => __('Contact Information', 'your-theme'),
        'priority' => 40,
    ));

    // Add Address setting
    $wp_customize->add_setting('contact_address', array(
        'default'   => '100 S Main St, Los Angeles, CA',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_address_control', array(
        'label'    => __('Address', 'your-theme'),
        'section'  => 'contact_section',
        'settings' => 'contact_address',
        'type'     => 'text',
    ));

    // Add Phone setting
    $wp_customize->add_setting('contact_phone', array(
        'default'   => '(208) 333 9296',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_phone_control', array(
        'label'    => __('Phone', 'your-theme'),
        'section'  => 'contact_section',
        'settings' => 'contact_phone',
        'type'     => 'text',
    ));

    // Add Fix setting
    $wp_customize->add_setting('contact_fix', array(
        'default'   => '(208) 333 9298',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_fix_control', array(
        'label'    => __('Fix', 'your-theme'),
        'section'  => 'contact_section',
        'settings' => 'contact_fix',
        'type'     => 'text',
    ));

    // Add Email setting
    $wp_customize->add_setting('contact_email', array(
        'default'   => 'contact@archi-interior.com',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_email_control', array(
        'label'    => __('Email', 'your-theme'),
        'section'  => 'contact_section',
        'settings' => 'contact_email',
        'type'     => 'email',
    ));

    // Add Website setting
    $wp_customize->add_setting('contact_website', array(
        'default'   => 'http://archi-interior.com',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_website_control', array(
        'label'    => __('Website', 'your-theme'),
        'section'  => 'contact_section',
        'settings' => 'contact_website',
        'type'     => 'url',
    ));
}
add_action('customize_register', 'theme_contact_customizer_settings');

function theme_social_links_customizer_settings($wp_customize) {
    // Add Social Links Section
    $wp_customize->add_section('social_links_section', array(
        'title'    => __('Social Footer Links', 'your-theme'),
        'priority' => 50,
    ));

    // Social Media Platforms
    $social_platforms = array(
        'facebook' => __('Facebook', 'your-theme'),
        'twitter' => __('Twitter', 'your-theme'),
        'rss' => __('RSS', 'your-theme'),
        'google_plus' => __('Google Plus', 'your-theme'),
        'skype' => __('Skype', 'your-theme'),
        'dribbble' => __('Dribbble', 'your-theme'),
    );

    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting("social_{$platform}_link", array(
            'default'   => '#',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("social_{$platform}_link_control", array(
            'label'    => $label,
            'section'  => 'social_links_section',
            'settings' => "social_{$platform}_link",
            'type'     => 'url',
        ));
    }
}
add_action('customize_register', 'theme_social_links_customizer_settings');




//add thumnail 
add_theme_support('post-thumbnails');
/**
 * Register a custom post type called "project".
 */
function broxy_elyosr_project_init() {
	$labels = array(
		'name'                  => _x( 'Projects',  'broxy-elyosr' ),
		'singular_name'         => _x( 'Project',  'broxy-elyosr' ),
		'menu_name'             => _x( 'Projects',  'broxy-elyosr' ),
		'name_admin_bar'        => _x( 'Project',  'broxy-elyosr' ),
		'add_new'               => __( 'Add New', 'broxy-elyosr' ),
		'add_new_item'          => __( 'Add New Project', 'broxy-elyosr' ),
		'new_item'              => __( 'New Project', 'broxy-elyosr' ),
		'edit_item'             => __( 'Edit Project', 'broxy-elyosr' ),
		'view_item'             => __( 'View Project', 'broxy-elyosr' ),
		'all_items'             => __( 'All Projects', 'broxy-elyosr' ),
		'search_items'          => __( 'Search Projects', 'broxy-elyosr' ),
		'parent_item_colon'     => __( 'Parent Projects:', 'broxy-elyosr' ),
		'not_found'             => __( 'No Projects found.', 'broxy-elyosr' ),
		'not_found_in_trash'    => __( 'No Projects found in Trash.', 'broxy-elyosr' ),
		'featured_image'        => _x( 'Project Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'broxy-elyosr' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'broxy-elyosr' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'broxy-elyosr' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'broxy-elyosr' ),
		'archives'              => _x( 'Project archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'broxy-elyosr' ),
		'insert_into_item'      => _x( 'Insert into Project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'broxy-elyosr' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'broxy-elyosr' ),
		'filter_items_list'     => _x( 'Filter Projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'broxy-elyosr' ),
		'items_list_navigation' => _x( 'Projects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'broxy-elyosr' ),
		'items_list'            => _x( 'Projects list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'broxy-elyosr' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'project', $args );
}

add_action( 'init', 'broxy_elyosr_project_init' );


/**
 * Register a custom post type called "project".
 */
function broxy_elyosr_machine_init() {
	$labels = array(
		'name'                  => _x( 'Machines',  'broxy-elyosr' ),
		'singular_name'         => _x( 'Machine',  'broxy-elyosr' ),
		'menu_name'             => _x( 'Machines',  'broxy-elyosr' ),
		'name_admin_bar'        => _x( 'Machine',  'broxy-elyosr' ),
		'add_new'               => __( 'Add New', 'broxy-elyosr' ),
		'add_new_item'          => __( 'Add New Machine', 'broxy-elyosr' ),
		'new_item'              => __( 'New Machine', 'broxy-elyosr' ),
		'edit_item'             => __( 'Edit Machine', 'broxy-elyosr' ),
		'view_item'             => __( 'View Machine', 'broxy-elyosr' ),
		'all_items'             => __( 'All Machines', 'broxy-elyosr' ),
		'search_items'          => __( 'Search Machines', 'broxy-elyosr' ),
		'parent_item_colon'     => __( 'Parent Machines:', 'broxy-elyosr' ),
		'not_found'             => __( 'No Machines found.', 'broxy-elyosr' ),
		'not_found_in_trash'    => __( 'No Machines found in Trash.', 'broxy-elyosr' ),
		'featured_image'        => _x( 'Machine Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'broxy-elyosr' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'broxy-elyosr' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'broxy-elyosr' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'broxy-elyosr' ),
		'archives'              => _x( 'Machine archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'broxy-elyosr' ),
		'insert_into_item'      => _x( 'Insert into Machine', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'broxy-elyosr' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Machine', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'broxy-elyosr' ),
		'filter_items_list'     => _x( 'Filter Projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'broxy-elyosr' ),
		'items_list_navigation' => _x( 'Machines list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'broxy-elyosr' ),
		'items_list'            => _x( 'Machines list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'broxy-elyosr' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'machine' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'machine', $args );
}

add_action( 'init', 'broxy_elyosr_machine_init' );