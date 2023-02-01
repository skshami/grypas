<?php
/**
 * Register a custom post type called "Serve".
 *
 * @see get_post_type_labels() for label keys.
 */
function grypas_cpt_init() {
    // Serve Slider
	$labels = array(
		'name'                  => _x( 'Industry segments', 'Post type general name', 'grypas' ),
		'singular_name'         => _x( 'Industry segment', 'Post type singular name', 'grypas' ),
		'menu_name'             => _x( 'Industry segments', 'Admin Menu text', 'grypas' ),
		'name_admin_bar'        => _x( 'Industry segment', 'Add New on Toolbar', 'grypas' ),
		'add_new'               => __( 'Add New', 'grypas' ),
		'add_new_item'          => __( 'Add New segment', 'grypas' ),
		'new_item'              => __( 'New segment', 'grypas' ),
		'edit_item'             => __( 'Edit segment', 'grypas' ),
		'view_item'             => __( 'View segment', 'grypas' ),
		'all_items'             => __( 'All segments', 'grypas' ),
		'featured_image'        => _x( 'Segment slide Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'grypas' ),
		'set_featured_image'    => _x( 'Set slide image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'remove_featured_image' => _x( 'Remove slide image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'use_featured_image'    => _x( 'Use as slide image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'archives'              => _x( 'Segments archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'grypas' ),
		'insert_into_item'      => _x( 'Insert into Segments', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'grypas' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Segments', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'grypas' ),
		'filter_items_list'     => _x( 'Filter Segments list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'grypas' ),
		'items_list_navigation' => _x( 'Segments list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'grypas' ),
		'items_list'            => _x( 'Segments list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'grypas' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'serve' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
        'menu_icon'          => 'dashicons-columns',
		'menu_position'      => 41,
        'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
	);

	register_post_type( 'serve', $args );

    // Testimonial Quote
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'grypas' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'grypas' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'grypas' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'grypas' ),
        'add_new'               => __( 'Add New', 'grypas' ),
        'add_new_item'          => __( 'Add New Testimonial', 'grypas' ),
        'new_item'              => __( 'New Testimonial', 'grypas' ),
        'edit_item'             => __( 'Edit Testimonial', 'grypas' ),
        'view_item'             => __( 'View Testimonial', 'grypas' ),
        'all_items'             => __( 'All Testimonials', 'grypas' ),
        'search_items'          => __( 'Search Testimonials', 'grypas' ),
        'parent_item_colon'     => __( 'Parent Testimonials:', 'grypas' ),
        'not_found'             => __( 'No Testimonials found.', 'grypas' ),
        'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'grypas' ),
        'featured_image'        => _x( 'Testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'grypas' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'grypas' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'grypas' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'grypas' ),
        'archives'              => _x( 'Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'grypas' ),
        'insert_into_item'      => _x( 'Insert into Testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'grypas' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'grypas' ),
        'filter_items_list'     => _x( 'Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'grypas' ),
        'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'grypas' ),
        'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'grypas' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Testimonial custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 42,
        'menu_icon'          => 'dashicons-testimonial',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true
    );
     
    register_post_type( 'testimonial', $args );

    //Quote
    $labels = array(
        'name'                  => _x( 'Quotes', 'Post type general name', 'grypas' ),
        'singular_name'         => _x( 'Quote', 'Post type singular name', 'grypas' ),
        'menu_name'             => _x( 'Quote Slider', 'Admin Menu text', 'grypas' ),
        'name_admin_bar'        => _x( 'Quote', 'Add New on Toolbar', 'grypas' ),
        'add_new'               => __( 'Add New', 'grypas' ),
        'add_new_item'          => __( 'Add New Quote', 'grypas' ),
        'new_item'              => __( 'New Quote', 'grypas' ),
        'edit_item'             => __( 'Edit Quote', 'grypas' ),
        'view_item'             => __( 'View Quote', 'grypas' ),
        'all_items'             => __( 'All Quotes', 'grypas' ),
        'search_items'          => __( 'Search Quotes', 'grypas' ),
        'parent_item_colon'     => __( 'Parent Quotes:', 'grypas' ),
        'not_found'             => __( 'No Quotes found.', 'grypas' ),
        'not_found_in_trash'    => __( 'No Quotes found in Trash.', 'grypas' ),
        'featured_image'        => _x( 'Quote Slide Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'grypas' ),
        'set_featured_image'    => _x( 'Set slide image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'grypas' ),
        'remove_featured_image' => _x( 'Remove slide image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'grypas' ),
        'use_featured_image'    => _x( 'Use as slide image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'grypas' ),
        'archives'              => _x( 'Quote archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'grypas' ),
        'insert_into_item'      => _x( 'Insert into Quote', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'grypas' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Quote', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'grypas' ),
        'filter_items_list'     => _x( 'Filter Quotes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'grypas' ),
        'items_list_navigation' => _x( 'Quotes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'grypas' ),
        'items_list'            => _x( 'Quotes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'grypas' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Quote custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'quote' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 43,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true
    );
     
    register_post_type( 'quote', $args );
    //strategies
    $labels = array(
		'name'                  => _x( 'Strategies', 'Post type general name', 'grypas' ),
		'singular_name'         => _x( 'Strategie', 'Post type singular name', 'grypas' ),
		'menu_name'             => _x( 'Strategies', 'Admin Menu text', 'grypas' ),
		'name_admin_bar'        => _x( 'Strategie', 'Add New on Toolbar', 'grypas' ),
		'add_new'               => __( 'Add New', 'grypas' ),
		'add_new_item'          => __( 'Add New Strategie', 'grypas' ),
		'new_item'              => __( 'New Strategie', 'grypas' ),
		'edit_item'             => __( 'Edit Strategie', 'grypas' ),
		'view_item'             => __( 'View Strategie', 'grypas' ),
		'all_items'             => __( 'All Strategies', 'grypas' ),
		'search_items'          => __( 'Search Strategies', 'grypas' ),
		'parent_item_colon'     => __( 'Parent Strategies:', 'grypas' ),
		'not_found'             => __( 'No Strategies found.', 'grypas' ),
		'not_found_in_trash'    => __( 'No Strategies found in Trash.', 'grypas' ),
		'featured_image'        => _x( 'Strategie Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'grypas' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'archives'              => _x( 'Strategie archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'grypas' ),
		'insert_into_item'      => _x( 'Insert into Strategie', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'grypas' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Strategie', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'grypas' ),
		'filter_items_list'     => _x( 'Filter Strategies list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'grypas' ),
		'items_list_navigation' => _x( 'Strategies list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'grypas' ),
		'items_list'            => _x( 'Strategies list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'grypas' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'strategie' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 47,
        'menu_icon'          => 'dashicons-analytics',
		'supports'           => array( 'title', 'editor','thumbnail',),
        'show_in_rest'       => true
	);

	register_post_type( 'strategie', $args );
//Brand
    $labels = array(
		'name'                  => _x( 'Brands', 'Post type general name', 'grypas' ),
		'singular_name'         => _x( 'Brand', 'Post type singular name', 'grypas' ),
		'menu_name'             => _x( 'Brands', 'Admin Menu text', 'grypas' ),
		'name_admin_bar'        => _x( 'Brand', 'Add New on Toolbar', 'grypas' ),
		'add_new'               => __( 'Add New', 'grypas' ),
		'add_new_item'          => __( 'Add New Brand', 'grypas' ),
		'new_item'              => __( 'New Brand', 'grypas' ),
		'edit_item'             => __( 'Edit Brand', 'grypas' ),
		'view_item'             => __( 'View Brand', 'grypas' ),
		'all_items'             => __( 'All Brands', 'grypas' ),
		'search_items'          => __( 'Search Brands', 'grypas' ),
		'parent_item_colon'     => __( 'Parent Brands:', 'grypas' ),
		'not_found'             => __( 'No Brands found.', 'grypas' ),
		'not_found_in_trash'    => __( 'No Brands found in Trash.', 'grypas' ),
		'featured_image'        => _x( 'Brand Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'grypas' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'archives'              => _x( 'Brand archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'grypas' ),
		'insert_into_item'      => _x( 'Insert into Brand', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'grypas' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Brand', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'grypas' ),
		'filter_items_list'     => _x( 'Filter Brands list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'grypas' ),
		'items_list_navigation' => _x( 'Brands list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'grypas' ),
		'items_list'            => _x( 'Brands list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'grypas' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'brand' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 48,
        'menu_icon'          => 'dashicons-shield-alt',
		'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt' ),
        'show_in_rest'       => true
	);

	register_post_type( 'brand', $args );
    //Career
    $labels = array(
		'name'                  => _x( 'Careers', 'Post type general name', 'grypas' ),
		'singular_name'         => _x( 'Career', 'Post type singular name', 'grypas' ),
		'menu_name'             => _x( 'Careers', 'Admin Menu text', 'grypas' ),
		'name_admin_bar'        => _x( 'Career', 'Add New on Toolbar', 'grypas' ),
		'add_new'               => __( 'Add New', 'grypas' ),
		'add_new_item'          => __( 'Add New Career', 'grypas' ),
		'new_item'              => __( 'New Career', 'grypas' ),
		'edit_item'             => __( 'Edit Career', 'grypas' ),
		'view_item'             => __( 'View Career', 'grypas' ),
		'all_items'             => __( 'All Careers', 'grypas' ),
		'search_items'          => __( 'Search Careers', 'grypas' ),
		'parent_item_colon'     => __( 'Parent Careers:', 'grypas' ),
		'not_found'             => __( 'No Careers found.', 'grypas' ),
		'not_found_in_trash'    => __( 'No Careers found in Trash.', 'grypas' ),
		'featured_image'        => _x( 'Career Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'grypas' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'archives'              => _x( 'Career archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'grypas' ),
		'insert_into_item'      => _x( 'Insert into Career', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'grypas' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Career', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'grypas' ),
		'filter_items_list'     => _x( 'Filter Careers list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'grypas' ),
		'items_list_navigation' => _x( 'Careers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'grypas' ),
		'items_list'            => _x( 'Careers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'grypas' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'career' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 49,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor',  'thumbnail' ),
        'show_in_rest'       => true
	);

	register_post_type( 'career', $args );

    //Customer Slider
    $labels = array(
		'name'                  => _x( 'Customer Sliders', 'Post type general name', 'grypas' ),
		'singular_name'         => _x( 'Customer Slider', 'Post type singular name', 'grypas' ),
		'menu_name'             => _x( 'Customer Slider', 'Admin Menu text', 'grypas' ),
		'name_admin_bar'        => _x( 'Customer Slider', 'Add New on Toolbar', 'grypas' ),
		'add_new'               => __( 'Add New', 'grypas' ),
		'add_new_item'          => __( 'Add New Customer Slider', 'grypas' ),
		'new_item'              => __( 'New Customer Slider', 'grypas' ),
		'edit_item'             => __( 'Edit Customer Slider', 'grypas' ),
		'view_item'             => __( 'View Customer Slider', 'grypas' ),
		'all_items'             => __( 'All Customer Sliders', 'grypas' ),
		'search_items'          => __( 'Search Customer Sliders', 'grypas' ),
		'parent_item_colon'     => __( 'Parent Customer Sliders:', 'grypas' ),
		'not_found'             => __( 'No Customer Sliders found.', 'grypas' ),
		'not_found_in_trash'    => __( 'No Customer Sliders found in Trash.', 'grypas' ),
		'featured_image'        => _x( 'Customer Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'grypas' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'archives'              => _x( 'Customer Slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'grypas' ),
		'insert_into_item'      => _x( 'Insert into Customer Slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'grypas' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Customer Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'grypas' ),
		'filter_items_list'     => _x( 'Filter Customer Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'grypas' ),
		'items_list_navigation' => _x( 'Customer Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'grypas' ),
		'items_list'            => _x( 'Customer Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'grypas' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'customer_slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 47,
		'menu_icon'          => 'dashicons-slides',
		'supports'           => array('title'),
        'show_in_rest'       => true
	);

	register_post_type('customer_slider',$args);
    //expertise
    $labels = array(
		'name'                  => _x( 'Expertises', 'Post type general name', 'grypas' ),
		'singular_name'         => _x( 'Expertise', 'Post type singular name', 'grypas' ),
		'menu_name'             => _x( 'Expertise Post', 'Admin Menu text', 'grypas' ),
		'name_admin_bar'        => _x( 'Expertise', 'Add New on Toolbar', 'grypas' ),
		'add_new'               => __( 'Add New', 'grypas' ),
		'add_new_item'          => __( 'Add New Expertise', 'grypas' ),
		'new_item'              => __( 'New Expertise', 'grypas' ),
		'edit_item'             => __( 'Edit Expertise', 'grypas' ),
		'view_item'             => __( 'View Expertise', 'grypas' ),
		'all_items'             => __( 'All Expertises', 'grypas' ),
		'search_items'          => __( 'Search Expertises', 'grypas' ),
		'parent_item_colon'     => __( 'Parent Expertises:', 'grypas' ),
		'not_found'             => __( 'No Expertises found.', 'grypas' ),
		'not_found_in_trash'    => __( 'No Expertises found in Trash.', 'grypas' ),
		'featured_image'        => _x( 'Expertise Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'grypas' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'archives'              => _x( 'Expertise archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'grypas' ),
		'insert_into_item'      => _x( 'Insert into Expertise', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'grypas' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Expertise', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'grypas' ),
		'filter_items_list'     => _x( 'Filter Expertises list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'grypas' ),
		'items_list_navigation' => _x( 'Expertises list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'grypas' ),
		'items_list'            => _x( 'Expertises list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'grypas' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'expertise' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 40,
		'menu_icon'          => 'dashicons-feedback',
		'supports'           => array( 'title', 'editor',  'thumbnail' ),
        'show_in_rest'       => true
	);

	register_post_type( 'expertise', $args );
    //Member
    $labels = array(
		'name'                  => _x( 'Team Members', 'Post type general name', 'grypas' ),
		'singular_name'         => _x( 'Team Member', 'Post type singular name', 'grypas' ),
		'menu_name'             => _x( 'Team Members', 'Admin Menu text', 'grypas' ),
		'name_admin_bar'        => _x( 'Members', 'Add New on Toolbar', 'grypas' ),
		'add_new'               => __( 'Add New', 'grypas' ),
		'add_new_item'          => __( 'Add New Members', 'grypas' ),
		'new_item'              => __( 'New Members', 'grypas' ),
		'edit_item'             => __( 'Edit Members', 'grypas' ),
		'view_item'             => __( 'View Members', 'grypas' ),
		'all_items'             => __( 'All Members', 'grypas' ),
		'search_items'          => __( 'Search Members', 'grypas' ),
		'parent_item_colon'     => __( 'Parent Members:', 'grypas' ),
		'not_found'             => __( 'No Members found.', 'grypas' ),
		'not_found_in_trash'    => __( 'No Members found in Trash.', 'grypas' ),
		'featured_image'        => _x( 'Member Photo', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'grypas' ),
		'set_featured_image'    => _x( 'Set image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'remove_featured_image' => _x( 'Remove image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'use_featured_image'    => _x( 'Use as image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'grypas' ),
		'archives'              => _x( 'Members archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'grypas' ),
		'insert_into_item'      => _x( 'Insert into Members', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'grypas' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Members', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'grypas' ),
		'filter_items_list'     => _x( 'Filter Members list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'grypas' ),
		'items_list_navigation' => _x( 'Members list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'grypas' ),
		'items_list'            => _x( 'Members list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'grypas' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'members' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 46,
		'menu_icon'          => 'dashicons-groups',
		'supports'           => array( 'title', 'editor',  'thumbnail' ),
        'show_in_rest'       => true
	);

	register_post_type( 'members', $args );
}

add_action( 'init', 'grypas_cpt_init' );