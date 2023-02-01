<?php
function grypas_theme_setup() {
    add_image_size('blog_post_thumb', 261, 190, true);
    add_image_size('post_thumb', 340, 266, true);
    add_image_size('serv_slide_thumb', 272, 280, true);
    add_image_size('testimonial_slide_thumb', 352, 310, true);
    add_image_size('quote_slide_thumb', 320, 260, true);
    add_image_size('strategi-thumb', 320, 158, true);
    add_image_size('single-blog-thumb', 550, 300, true);
    add_image_size('brand-thumb', 375, 282, true);
}
add_action( 'after_setup_theme', 'grypas_theme_setup' );


function grypas_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'grypas_excerpt_length',999 );
function grypas_excerpt_more( $more ) {
	return '....';
}
add_filter( 'excerpt_more', 'grypas_excerpt_more' );

function grypas_menu_item_class( $classes, $item, $args ) {
    if ( 'footer-menu' === $args->theme_location ) {
        $classes[] = 'list-group-item';
    }

    return $classes;
}
add_action( 'nav_menu_css_class', 'grypas_menu_item_class', 10, 3 );

function grypas_fomenu_item_class( $classes, $item, $args ) {
    if ( 'footer-menu2' === $args->theme_location ) {
        $classes[] = 'list-group-item';
    }

    return $classes;
}
add_action( 'nav_menu_css_class', 'grypas_fomenu_item_class', 10, 3 );


if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_63c39bd9829ad',
        'title' => 'Customer Sliders',
        'fields' => array(
            array(
                'key' => 'field_63c39bda523b6',
                'label' => 'Customer Logo',
                'name' => 'customer_logo',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'customer_slider',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_63d1478779318',
        'title' => 'Team Member',
        'fields' => array(
            array(
                'key' => 'field_63d14788091a6',
                'label' => 'Member Name',
                'name' => 'member_name',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_63d147b0091a7',
                'label' => 'Member Designation',
                'name' => 'member_designation',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'members',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_63c263043a38f',
        'title' => 'Testimonials',
        'fields' => array(
            array(
                'key' => 'field_63c27204fd7d3',
                'label' => 'Client Image',
                'name' => 'client_image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_63c2723db2cf7',
                'label' => 'Client Name',
                'name' => 'client_name',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_63c2725816597',
                'label' => 'Client Designation',
                'name' => 'client_designation',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_63c26336ab880',
                'label' => 'Client Rating',
                'name' => 'client_rating',
                'aria-label' => '',
                'type' => 'number',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 4,
                'min' => 1,
                'max' => 5,
                'placeholder' => '',
                'step' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'testimonial',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_63c386ea71bc3',
        'title' => 'Career',
        'fields' => array(
            array(
                'key' => 'field_63c386eba814f',
                'label' => 'First Position for',
                'name' => 'first_position_for',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_63c3871aa8150',
                'label' => 'First position for Application Form link',
                'name' => 'first_position_for_application_form_link',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_63c386eba814f',
                            'operator' => '!=empty',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_63c388121a11d',
                'label' => 'Second Position for',
                'name' => 'secend_position_for',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_63c388761a11e',
                'label' => 'Second position for Application Form link',
                'name' => 'second_position_for_application_form_link',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_63c388121a11d',
                            'operator' => '!=empty',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_63c3894f6f6f8',
                'label' => 'Third Position for',
                'name' => 'third_position_for',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_63c389766f6f9',
                'label' => 'Third position for Application Form link',
                'name' => 'third_position_for_application_form_link',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_63c3894f6f6f8',
                            'operator' => '!=empty',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'career',
                ),
            ),
        ),
        'menu_order' => 50,
        'position' => 'side',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    endif;	



