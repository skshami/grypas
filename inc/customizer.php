<?php
/**
 * Grypas Theme Customizer
 *
 * @package Grypas
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function grypas_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'grypas_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'grypas_customize_partial_blogdescription',
			)
		);
	}


/** =============================
 * 		font page hero Section
 * ===============================*/

 $wp_customize->add_section('font-hero', array(
	'title' => __('Hero Section','grypas'),
	'priority' => '20',
	'active_callback'=> function(){
		if(is_page_template('page-template/home.php')){
			return true;
		};
		return false;
	}
));
// video
$wp_customize->add_setting('font-hero-video', array(
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'font-hero-video-ctrl', array(
	'label' => __( 'Add Video', 'grypas' ),
	'section' => 'font-hero',
	'settings' => 'font-hero-video',
	'mime_type' => 'video',
  ) ) );

$wp_customize->add_setting('font-hero-img', array(
	'default' => get_theme_file_uri('/assets/img/hero-rectangle2656.png'),
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'font-hero-img-ctrl', array(
	'label' => __( 'Add Image', 'grypas' ),
	'section' => 'font-hero',
	'settings' => 'font-hero-img',
	'mime_type' => 'image',
  ) ) );


$wp_customize->add_setting('font-hero-title', array(
	'default' => 'home The World Works for the Better',
	 'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('font-hero-title-ctrl', array(
	'label' => __('Headeing','grypas'),
	'section' => 'font-hero',
	'settings' => 'font-hero-title',
	'type'=> 'text',
));
//description
$wp_customize->add_setting('font-hero-desc', array(
	'default' => 'Changing the way',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('font-hero-desc-crl', array(
	'label' => __('Sub Heading','grypas'),
	'section' => 'font-hero',
	'settings' => 'font-hero-desc',
	'type'=> 'text',
));


$wp_customize->add_setting('font-hero-btn-url', array(
	'default' => '#',
	'transport' => 'refresh'
));
$wp_customize->add_control('font-hero-btn-url-ctrl', array(
	'label' => __('Button URL','grypas'),
	'section' => 'font-hero',
	'settings' => 'font-hero-btn-url',
	'type'=> 'url',
)); 

$wp_customize->add_setting('font-hero-btn-text', array(
	'default' => 'Dive in',
	'transport' => 'postMessage'
));
$wp_customize->add_control('font-hero-btn-text-ctrl', array(
	'label' => __('Button text','grypas'),
	'section' => 'font-hero',
	'settings' => 'font-hero-btn-text',
	'type'=> 'text',
)); 


/** =============================
 * 		About page hero Section
 * ===============================*/

 $wp_customize->add_section('about-hero', array(
	'title' => __('Hero Section','grypas'),
	'priority' => '20',
	'active_callback'=> function(){
		if(is_page_template('page-template/about.php')){
			return true;
		};
		return false;
	}
));
// video
$wp_customize->add_setting('about-hero-video', array(
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'about-hero-video-ctrl', array(
	'label' => __( 'Add Video', 'grypas' ),
	'section' => 'about-hero',
	'settings' => 'about-hero-video',
	'mime_type' => 'video',
  ) ) );
$wp_customize->add_setting('about-hero-img', array(
	'default' => get_theme_file_uri('/assets/img/hero-rectangle2656.png'),
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'about-hero-img-ctrl', array(
	'label' => __( 'Add Image', 'grypas' ),
	'section' => 'about-hero',
	'settings' => 'about-hero-img',
	'mime_type' => 'image',
  ) ) );


$wp_customize->add_setting('about-hero-title', array(
	'default' => 'home The World Works for the Better',
	 'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('about-hero-title-ctrl', array(
	'label' => __('Headeing','grypas'),
	'section' => 'about-hero',
	'settings' => 'about-hero-title',
	'type'=> 'text',
));
//description
$wp_customize->add_setting('about-hero-desc', array(
	'default' => 'Changing the way',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('about-hero-desc-crl', array(
	'label' => __('Sub Heading','grypas'),
	'section' => 'about-hero',
	'settings' => 'about-hero-desc',
	'type'=> 'text',
));


$wp_customize->add_setting('about-hero-btn-url', array(
	'default' => '#',
	'transport' => 'refresh'
));
$wp_customize->add_control('about-hero-btn-url-ctrl', array(
	'label' => __('Button URL','grypas'),
	'section' => 'about-hero',
	'settings' => 'about-hero-btn-url',
	'type'=> 'url',
)); 

$wp_customize->add_setting('about-hero-btn-text', array(
	'default' => 'Dive in',
	'transport' => 'postMessage'
));
$wp_customize->add_control('about-hero-btn-text-ctrl', array(
	'label' => __('Button text','grypas'),
	'section' => 'about-hero',
	'settings' => 'about-hero-btn-text',
	'type'=> 'text',
)); 


/** =============================
 * 		brands page hero Section
 * ===============================*/

 $wp_customize->add_section('brands-hero', array(
	'title' => __('Hero Section','grypas'),
	'priority' => '20',
	'active_callback'=> function(){
		if(is_page_template('page-template/brands.php')){
			return true;
		};
		return false;
	}
));
// video
$wp_customize->add_setting('brands-hero-video', array(
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'brands-hero-video-ctrl', array(
	'label' => __( 'Add Video', 'grypas' ),
	'section' => 'brands-hero',
	'settings' => 'brands-hero-video',
	'mime_type' => 'video',
  ) ) );
  $wp_customize->add_setting('brands-hero-img', array(
	'default' => get_theme_file_uri('/assets/img/hero-rectangle2656.png'),
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'brands-hero-img-ctrl', array(
	'label' => __( 'Add Image', 'grypas' ),
	'section' => 'brands-hero',
	'settings' => 'brands-hero-img',
	'mime_type' => 'image',
  ) ) );


$wp_customize->add_setting('brands-hero-title', array(
	'default' => 'home The World Works for the Better',
	 'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('brands-hero-title-ctrl', array(
	'label' => __('Headeing','grypas'),
	'section' => 'brands-hero',
	'settings' => 'brands-hero-title',
	'type'=> 'text',
));
//description
$wp_customize->add_setting('brands-hero-desc', array(
	'default' => 'Changing the way',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('brands-hero-desc-crl', array(
	'label' => __('Sub Heading','grypas'),
	'section' => 'brands-hero',
	'settings' => 'brands-hero-desc',
	'type'=> 'text',
));


$wp_customize->add_setting('brands-hero-btn-url', array(
	'default' => '#',
	'transport' => 'refresh'
));
$wp_customize->add_control('brands-hero-btn-url-ctrl', array(
	'label' => __('Button URL','grypas'),
	'section' => 'brands-hero',
	'settings' => 'brands-hero-btn-url',
	'type'=> 'url',
)); 

$wp_customize->add_setting('brands-hero-btn-text', array(
	'default' => 'Dive in',
	'transport' => 'postMessage'
));
$wp_customize->add_control('brands-hero-btn-text-ctrl', array(
	'label' => __('Button text','grypas'),
	'section' => 'brands-hero',
	'settings' => 'brands-hero-btn-text',
	'type'=> 'text',
)); 

/** =============================
 * 		career page hero Section
 * ===============================*/

 $wp_customize->add_section('career-hero', array(
	'title' => __('Hero Section','grypas'),
	'priority' => '20',
	'active_callback'=> function(){
		if(is_page_template('page-template/career.php')){
			return true;
		};
		return false;
	}
));
// video
$wp_customize->add_setting('career-hero-video', array(
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'career-hero-video-ctrl', array(
	'label' => __( 'Add Video', 'grypas' ),
	'section' => 'career-hero',
	'settings' => 'career-hero-video',
	'mime_type' => 'video',
  ) ) );
  $wp_customize->add_setting('career-hero-img', array(
	'default' => get_theme_file_uri('/assets/img/hero-rectangle2656.png'),
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'career-hero-img-ctrl', array(
	'label' => __( 'Add Image', 'grypas' ),
	'section' => 'career-hero',
	'settings' => 'career-hero-img',
	'mime_type' => 'image',
  ) ) );


$wp_customize->add_setting('career-hero-title', array(
	'default' => 'home The World Works for the Better',
	 'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('career-hero-title-ctrl', array(
	'label' => __('Headeing','grypas'),
	'section' => 'career-hero',
	'settings' => 'career-hero-title',
	'type'=> 'text',
));
//description
$wp_customize->add_setting('career-hero-desc', array(
	'default' => 'Changing the way',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('career-hero-desc-crl', array(
	'label' => __('Sub Heading','grypas'),
	'section' => 'career-hero',
	'settings' => 'career-hero-desc',
	'type'=> 'text',
));


$wp_customize->add_setting('career-hero-btn-url', array(
	'default' => '#',
	'transport' => 'refresh'
));
$wp_customize->add_control('career-hero-btn-url-ctrl', array(
	'label' => __('Button URL','grypas'),
	'section' => 'career-hero',
	'settings' => 'career-hero-btn-url',
	'type'=> 'url',
)); 

$wp_customize->add_setting('career-hero-btn-text', array(
	'default' => 'Dive in',
	'transport' => 'postMessage'
));
$wp_customize->add_control('career-hero-btn-text-ctrl', array(
	'label' => __('Button text','grypas'),
	'section' => 'career-hero',
	'settings' => 'career-hero-btn-text',
	'type'=> 'text',
)); 

/** =============================
 * 		priciples page hero Section
 * ===============================*/

 $wp_customize->add_section('priciples-hero', array(
	'title' => __('Hero Section','grypas'),
	'priority' => '20',
	'active_callback'=> function(){
		if(is_page_template('page-template/priciples.php')){
			return true;
		};
		return false;
	}
));
$wp_customize->add_setting('priciples-hero-img', array(
	'default' => get_theme_file_uri('/assets/img/hero-rectangle2656.png'),
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'priciples-hero-img-ctrl', array(
	'label' => __( 'Add Image', 'grypas' ),
	'section' => 'priciples-hero',
	'settings' => 'priciples-hero-img',
	'mime_type' => 'image',
  ) ) );
// video
$wp_customize->add_setting('priciples-hero-video', array(
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'priciples-hero-video-ctrl', array(
	'label' => __( 'Add Video', 'grypas' ),
	'section' => 'priciples-hero',
	'settings' => 'priciples-hero-video',
	'mime_type' => 'video',
  ) ) );


$wp_customize->add_setting('priciples-hero-title', array(
	'default' => 'home The World Works for the Better',
	 'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('priciples-hero-title-ctrl', array(
	'label' => __('Headeing','grypas'),
	'section' => 'priciples-hero',
	'settings' => 'priciples-hero-title',
	'type'=> 'text',
));
//description
$wp_customize->add_setting('priciples-hero-desc', array(
	'default' => 'Changing the way',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('priciples-hero-desc-crl', array(
	'label' => __('Sub Heading','grypas'),
	'section' => 'priciples-hero',
	'settings' => 'priciples-hero-desc',
	'type'=> 'text',
));


$wp_customize->add_setting('priciples-hero-btn-url', array(
	'default' => '#',
	'transport' => 'refresh'
));
$wp_customize->add_control('priciples-hero-btn-url-ctrl', array(
	'label' => __('Button URL','grypas'),
	'section' => 'priciples-hero',
	'settings' => 'priciples-hero-btn-url',
	'type'=> 'url',
)); 

$wp_customize->add_setting('priciples-hero-btn-text', array(
	'default' => 'Dive in',
	'transport' => 'postMessage'
));
$wp_customize->add_control('priciples-hero-btn-text-ctrl', array(
	'label' => __('Button text','grypas'),
	'section' => 'priciples-hero',
	'settings' => 'priciples-hero-btn-text',
	'type'=> 'text',
)); 



/** =============================
 * 		contact page hero Section
 * ===============================*/

 $wp_customize->add_section('contact-hero', array(
	'title' => __('Hero Section','grypas'),
	'priority' => '20',
	'active_callback'=> function(){
		if(is_page_template('page-template/contact.php')){
			return true;
		};
		return false;
	}
));
$wp_customize->add_setting('contact-hero-img', array(
	'default' => get_theme_file_uri('/assets/img/hero-rectangle2656.png'),
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'contact-hero-img-ctrl', array(
	'label' => __( 'Add Image', 'grypas' ),
	'section' => 'contact-hero',
	'settings' => 'contact-hero-img',
	'mime_type' => 'image',
  ) ) );
// video
$wp_customize->add_setting('contact-hero-video', array(
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'contact-hero-video-ctrl', array(
	'label' => __( 'Add Video', 'grypas' ),
	'section' => 'contact-hero',
	'settings' => 'contact-hero-video',
	'mime_type' => 'video',
  ) ) );


$wp_customize->add_setting('contact-hero-title', array(
	'default' => 'home The World Works for the Better',
	 'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('contact-hero-title-ctrl', array(
	'label' => __('Headeing','grypas'),
	'section' => 'contact-hero',
	'settings' => 'contact-hero-title',
	'type'=> 'text',
));
//description
$wp_customize->add_setting('contact-hero-desc', array(
	'default' => 'Changing the way',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('contact-hero-desc-crl', array(
	'label' => __('Sub Heading','grypas'),
	'section' => 'contact-hero',
	'settings' => 'contact-hero-desc',
	'type'=> 'text',
));


$wp_customize->add_setting('contact-hero-btn-url', array(
	'default' => '#',
	'transport' => 'refresh'
));
$wp_customize->add_control('contact-hero-btn-url-ctrl', array(
	'label' => __('Button URL','grypas'),
	'section' => 'contact-hero',
	'settings' => 'contact-hero-btn-url',
	'type'=> 'url',
)); 

$wp_customize->add_setting('contact-hero-btn-text', array(
	'default' => 'Dive in',
	'transport' => 'postMessage'
));
$wp_customize->add_control('contact-hero-btn-text-ctrl', array(
	'label' => __('Button text','grypas'),
	'section' => 'contact-hero',
	'settings' => 'contact-hero-btn-text',
	'type'=> 'text',
)); 

/** =============================
 * 		Home Intro Section
 * ===============================*/

$wp_customize->add_section('home-intro', array(
	'title' => __('Home Intro Section','grypas'),
	'priority' => '21',
	'active_callback'=> function(){
		if(is_page_template('page-template/home.php')){
			return true;
		};
		return false;
	}
));
//Intro title
$wp_customize->add_setting('home-intro-title', array(
	'default' => 'A fully integrated suite of digitally controlled services.',
	 'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('home-intro-title_ctrl', array(
	'label' => __('Intro title','grypas'),
	'section' => 'home-intro',
	'settings' => 'home-intro-title',
	'type'=> 'text',
));
//Intro description
$wp_customize->add_setting('home-intro-desc', array(
	'default' => 'Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor sem arcu massa egestas velit diam vitae praesent. Amet eu eleifend mi velit tempor sem arcu. Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor sem arcu massa egestas velit diam vitae praesent. Amet eu eleifend mi velit tempor sem arcu.Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor sem arcu massa egestas velit diam vitae praesent. Amet eu eleifend mi velit tempor sem arcu.Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor.',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('home-intro-desc-ctrl', array(
	'label' => __('Intro description','grypas'),
	'section' => 'home-intro',
	'settings' => 'home-intro-desc',
	'type'=> 'textarea',
));

//Intro Button
$wp_customize->add_setting('intro-btn-url', array(
	'default' => '#',
	'transport' => 'refresh'
));
$wp_customize->add_control('intro-btn-url-ctrl', array(
	'label' => __('Intro Button URL','grypas'),
	'section' => 'home-intro',
	'settings' => 'intro-btn-url',
	'type'=> 'url',
)); 
//Intro Button text
$wp_customize->add_setting('intro-btn-text', array(
	'default' => 'Contact Us',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('intro-btn-text-ctrl', array(
	'label' => __('Intro Button text','grypas'),
	'section' => 'home-intro',
	'settings' => 'intro-btn-text',
	'type'=> 'text',
)); 

//Intro image
$wp_customize->add_setting('home-intro-thumb-top', array(
	'default' => get_theme_file_uri('/assets/img/rectangle2659.png'),
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'home-intro-thumb-top-ctrl', array(
	'label' => __( 'Intro top Image', 'grypas' ),
	'section' => 'home-intro',
	'settings' => 'home-intro-thumb-top',
	'mime_type' => 'image',
  ) ) );


$wp_customize->add_setting('home-intro-thumb-bottom', array(
	'default' => get_theme_file_uri('/assets/img/rectangle2658.png'),
	'transport' => 'refresh'
));
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'home-intro-thumb-bottom-ctrl', array(
	'label' => __( 'Intro bottom Image', 'grypas' ),
	'section' => 'home-intro',
	'settings' => 'home-intro-thumb-bottom',
	'mime_type' => 'image',
  ) ) );



/** =============================
 * 		Home Expertise Section
 * ===============================*/
$wp_customize->add_section('expertise', array(
	'title' => __('Expertise Section','grypas'),
	'priority' => '22',
	'active_callback'=> function(){
		if(is_page_template('page-template/home.php')){
			return true;
		};
		return false;
	}
));
//Expertise title
$wp_customize->add_setting('expertise-title', array(
	'default' => 'Bringing expertise and experience to the table to ensure clients’ succeed.',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('expertise-title-ctrl', array(
	'label' => __('Expertise Heading','grypas'),
	'section' => 'expertise',
	'settings' => 'expertise-title',
	'type'=> 'text',
));

/** =============================
 * 		Serve Slider Section
 * ===============================*/
$wp_customize->add_section('serve-sec', array(
	'title' => __('Serve Section','grypas'),
	'priority' => '23',
	'active_callback'=> function(){
		if(is_page_template('page-template/home.php')){
			return true;
		};
		return false;
	}
));

$wp_customize->add_setting('serve-title', array(
	'default' => 'What we serve as a whole',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('serve-title-ctrl', array(
	'label' => __('Serve Section Heading','grypas'),
	'section' => 'serve-sec',
	'settings' => 'serve-title',
	'type'=> 'text',
));
$wp_customize->add_setting('serve-desc', array(
	'default' => 'Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor sem arcu massa egestas velit diam vitae praesent.',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('serve-desc-ctrl', array(
	'label' => __('Serve description','grypas'),
	'section' => 'serve-sec',
	'settings' => 'serve-desc',
	'type'=> 'textarea',
));

/** =============================
 * 		Testimonial Slider Section
 * ===============================*/
$wp_customize->add_section('testimonial-sec', array(
	'title' => __('Testimonial  Section','grypas'),
	'priority' => '24',
	'active_callback'=> function(){
		if(( is_page_template( 'page-template/home.php' ) || is_page_template( 'page-template/about.php' ) || is_page_template( 'page-template/priciples.php' ))){
			return true;
		};
		return false;
	}
));

$wp_customize->add_setting('testimonial-title', array(
	'default' => 'Testimonial Quote',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('testimonial-title-ctrl', array(
	'label' => __('Testimonial Section Heading','grypas'),
	'section' => 'testimonial-sec',
	'settings' => 'testimonial-title',
	'type'=> 'text',
));
$wp_customize->add_setting('testimonial-desc', array(
	'default' => 'Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor sem arcu massa egestas velit diam vitae praesent.',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('testimonial-desc-ctrl', array(
	'label' => __('Testimonial description','grypas'),
	'section' => 'testimonial-sec',
	'settings' => 'testimonial-desc',
	'type'=> 'textarea',
));
/** =============================
 * 		Principles Slider Section
 * ===============================*/
$wp_customize->add_section('principles-sec', array(
	'title' => __('Principles Section','grypas'),
	'priority' => '25',
	'active_callback'=> function(){
		if ( is_page_template( 'page-template/home.php' ) || is_page_template( 'page-template/about.php' )) {
			return true;
		};
		return false;
	}
));

$wp_customize->add_setting('principles-title', array(
	'default' => 'Principles Quote',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('principles-title-ctrl', array(
	'label' => __('Principles Section Heading','grypas'),
	'section' => 'principles-sec',
	'settings' => 'principles-title',
	'type'=> 'text',
));
$wp_customize->add_setting('principles-desc', array(
	'default' => 'Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor sem arcu massa egestas velit diam vitae praesent.',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('principles-desc-ctrl', array(
	'label' => __('Principles description','grypas'),
	'section' => 'principles-sec',
	'settings' => 'principles-desc',
	'type'=> 'textarea',
));



/** =============================
 * 		About Intro Section
 * ===============================*/

 $wp_customize->add_section('about-intro', array(
	'title' => __('About Intro Section','grypas'),
	'priority' => '20',
	'active_callback'=> function(){
		if(is_page_template('page-template/about.php')){
			return true;
		};
		return false;
	}
));
//Intro title
$wp_customize->add_setting('about-intro-title', array(
	'default' => 'A fully integrated suite of digitally controlled services.',
	 'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('about-intro-title_ctrl', array(
	'label' => __('Intro title','grypas'),
	'section' => 'about-intro',
	'settings' => 'about-intro-title',
	'type'=> 'text',
));
//Intro description
$wp_customize->add_setting('about-intro-desc', array(
	'default' => 'Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor sem arcu massa egestas velit diam vitae praesent. Amet eu eleifend mi velit tempor sem arcu. Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor sem arcu massa egestas velit diam vitae praesent. Amet eu eleifend mi velit tempor sem arcu.Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor sem arcu massa egestas velit diam vitae praesent. Amet eu eleifend mi velit tempor sem arcu.Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor.',
	'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('about-intro-desc-ctrl', array(
	'label' => __('Intro description','grypas'),
	'section' => 'about-intro',
	'settings' => 'about-intro-desc',
	'type'=> 'textarea',
));



//Intro video
$wp_customize->add_setting('about-video', array(
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'about-video-ctrl', array(
	'label' => __( 'Add Video', 'grypas' ),
	'section' => 'about-intro',
	'settings' => 'about-video',
	'mime_type' => 'Video',
  ) ) );


/** =============================
 * 		About Team Section
 * ===============================*/

 $wp_customize->add_section('about-team-intro', array(
	'title' => __('About Team Section','grypas'),
	'priority' => '20',
	'active_callback'=> function(){
		if(is_page_template('page-template/about.php')){
			return true;
		};
		return false;
	}
));
//Intro title
$wp_customize->add_setting('about-team-title', array(
	'default' => 'People here are just extraordinary and leading the society and era to the most success.',
	 'transport' => 'postMessage'
));
$wp_customize->add_control('about-team-title_ctrl', array(
	'label' => __('About team title','grypas'),
	'section' => 'about-team-intro',
	'settings' => 'about-team-title',
	'type'=> 'text',
));

/** =============================
 * 		About strategies Section
 * ===============================*/

 $wp_customize->add_section('about-strategies-intro', array(
	'title' => __('About Strategies Section','grypas'),
	'priority' => '20',
	'active_callback'=> function(){
		if(is_page_template('page-template/about.php')){
			return true;
		};
		return false;
	}
));
//Intro title
$wp_customize->add_setting('about-strategies-title', array(
	'default' => 'We’ve got strategies for growth',
	 'transport' => 'postMessage'
));
$wp_customize->add_control('about-strategies-title_ctrl', array(
	'label' => __('About team title','grypas'),
	'section' => 'about-strategies-intro',
	'settings' => 'about-strategies-title',
	'type'=> 'text',
));
//Intro desc
$wp_customize->add_setting('about-strategies-desc', array(
	'default' => 'Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor sem <br> arcu massa egestas velit diam vitae praesent.',
	 'transport' => 'postMessage'
));
$wp_customize->add_control('about-strategies-desc_ctrl', array(
	'label' => __('About team title','grypas'),
	'section' => 'about-strategies-intro',
	'settings' => 'about-strategies-desc',
	'type'=> 'textarea',
));


/** =============================
 * 		Principle
 * ===============================*/

 $wp_customize->add_section('principle-slide-sec', array(
	'title' => __('Principle Slide Section','grypas'),
	'priority' => '20',
	'active_callback'=> function(){
		if(is_page_template('page-template/priciples.php')){
			return true;
		};
		return false;
	}
));

//Intro title
$wp_customize->add_setting('principle-slider-heading', array(
	'default' => 'We are a principle based organisation.',
	'transport' => 'postMessage'
));
$wp_customize->add_control('principle-slider-heading_ctrl', array(
	'label' => __('Principle Slider Heading','grypas'),
	'section' => 'principle-slide-sec',
	'settings' => 'principle-slider-heading',
	'type'=> 'text',
));

$wp_customize->add_setting('principle-slider-Second-heading', array(
	'default' => 'Decisions and behaviour are driven by focused principles.',
	'transport' => 'postMessage'
));
$wp_customize->add_control('principle-slider-Second-heading_ctrl', array(
	'label' => __('Principle Slider Second Heading','grypas'),
	'section' => 'principle-slide-sec',
	'settings' => 'principle-slider-Second-heading',
	'type'=> 'text',
));


/** =============================
 * 		principles Intro Section
 * ===============================*/

 $wp_customize->add_section('principles-intro', array(
	'title' => __('Principles Intro Section','grypas'),
	'priority' => '21',
	'active_callback'=> function(){
		if(is_page_template('page-template/priciples.php')){
			return true;
		};
		return false;
	}
));
//Intro title
$wp_customize->add_setting('principles-intro-title', array(
	'default' => 'Team of Teams content about principles.',
	 'transport' => 'postMessage'
	//'transport' => 'refresh'
));
$wp_customize->add_control('principles-intro-title_ctrl', array(
	'label' => __('Intro title','grypas'),
	'section' => 'principles-intro',
	'settings' => 'principles-intro-title',
	'type'=> 'text',
));
//Intro description
$wp_customize->add_setting('principles-intro-desc', array(
	'default' => 'We’re committed to maintaining a minimal hierarchy and building distributed leadership. We achieve this through our Team of Teams approach – operating as a constellation of teams that come together around specific goals, rather than creating a traditional structure in which people work in hierarchies based on a function or a formal business unit. We want to empower each Mantelorian to be part of creating something bigger than just their jobs. This structure enables our people to form a team to solve a problem or deliver an initiative – which means if you care about something at work, as part of a team, you can take responsibility for it!',
	'transport' => 'postMessage'
));
$wp_customize->add_control('principles-intro-desc-ctrl', array(
	'label' => __('Intro description','grypas'),
	'section' => 'principles-intro',
	'settings' => 'principles-intro-desc',
	'type'=> 'textarea',
));

//Intro Button
$wp_customize->add_setting('principles-intro-btn-url', array(
	'default' => '#',
	'transport' => 'refresh'
));
$wp_customize->add_control('principles-intro-btn-url-ctrl', array(
	'label' => __('Intro Button URL','grypas'),
	'section' => 'principles-intro',
	'settings' => 'principles-intro-btn-url',
	'type'=> 'url',
)); 
//Intro Button text
$wp_customize->add_setting('principles-intro-btn-text', array(
	'default' => 'Contact Us',
	'transport' => 'postMessage'
));
$wp_customize->add_control('principles-intro-btn-text-ctrl', array(
	'label' => __('Intro Button text','grypas'),
	'section' => 'principles-intro',
	'settings' => 'principles-intro-btn-text',
	'type'=> 'text',
)); 

//Intro image
$wp_customize->add_setting('principles-intro-thumb', array(
	'transport' => 'refresh'
));
$wp_customize->add_control(  new WP_Customize_Media_Control( $wp_customize, 'principles-intro-thumb-ctrl', array(
	'label' => __( 'Principles Intro Image', 'grypas' ),
	'section' => 'principles-intro',
	'settings' => 'principles-intro-thumb',
	'mime_type' => 'image',
  ) ) );


/** =============================
 * 		Career Section
 * ===============================*/

 $wp_customize->add_section('career-sec', array(
	'title' => __('Career Section','grypas'),
	'priority' => '21',
	'active_callback'=> function(){
		if(is_page_template('page-template/career.php')){
			return true;
		};
		return false;
	}
));

$wp_customize->add_setting('career-heading', array(
	'default' => 'Please contact us if you are interested in earning your place here in Grypas family.',
	'transport' => 'postMessage'
	
));
$wp_customize->add_control('career-heading-ctrl', array(
	'label' => __('Career Heading','grypas'),
	'section' => 'career-sec',
	'settings' => 'career-heading',
	'type'=> 'text',
));

/** =============================
 * 		Brands Section
 * ===============================*/

 $wp_customize->add_section('brand-sec', array(
	'title' => __('Brands Section','grypas'),
	'priority' => '21',
	'active_callback'=> function(){
		if(is_page_template('page-template/brands.php')){
			return true;
		};
		return false;
	}
));

$wp_customize->add_setting('brand-heading', array(
	'default' => 'Bringing expertise and experience to the table to ensure clients’ succeed.',
	'transport' => 'postMessage'
));
$wp_customize->add_control('brand-heading-ctrl', array(
	'label' => __('Brand Heading','grypas'),
	'section' => 'brand-sec',
	'settings' => 'brand-heading',
	'type'=> 'text',
));
/** =============================
 * 		Contact Section
 * ===============================*/

 $wp_customize->add_section('contact-pg', array(
	'title' => __('Contact','grypas'),
	'priority' => '21',
	'active_callback'=> function(){
		if(is_page_template('page-template/contact.php')){
			return true;
		};
		return false;
	}
));

$wp_customize->add_setting('contact-location', array(
	'default' => 'Suite 27, 1-5 Jacobs St, Bankstown NSW 2200, Australia',
	'transport' => 'postMessage'
));
$wp_customize->add_control('contact-location-ctrl', array(
	'label' => __('Contact Location','grypas'),
	'section' => 'contact-pg',
	'settings' => 'contact-location',
	'type'=> 'text',
));
$wp_customize->add_setting('contact-mail', array(
	'default' => 'info@yoursite.com',
	'transport' => 'postMessage'
));
$wp_customize->add_control('contact-mail-ctrl', array(
	'label' => __('Contact Mail','grypas'),
	'section' => 'contact-pg',
	'settings' => 'contact-mail',
	'type'=> 'text',
));
$wp_customize->add_setting('contact-phone', array(
	'default' => '+880123565464',
	'transport' => 'postMessage'
));
$wp_customize->add_control('contact-phone-ctrl', array(
	'label' => __('Contact Mail','grypas'),
	'section' => 'contact-pg',
	'settings' => 'contact-phone',
	'type'=> 'text',
));
$wp_customize->add_setting('contact-form', array(
	'default' => '[contact-form-7 id="205" title="Contact Form One"]',
));
$wp_customize->add_control('contact-form-ctrl', array(
	'label' => __('Contact Form Shortcode','grypas'),
	'section' => 'contact-pg',
	'settings' => 'contact-form',
	'type'=> 'textarea',
));
$wp_customize->add_setting('contact-map', array(
	'default' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255278.11519261685!2d103.68395510808436!3d1.3440851974281616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1767b42b8ec9%3A0x400f7acaedaa420!2sSingapore!5e0!3m2!1sen!2ssg!4v1673371250575!5m2!1sen!2ssg',
));
$wp_customize->add_control('contact-map-ctrl', array(
	'label' => __('Google Map Embed src','grypas'),
	'section' => 'contact-pg',
	'settings' => 'contact-map',
	'type'=> 'textarea',
));
/** =============================
 * 		Footer Section
 * ===============================*/

 $wp_customize->add_section('footer-sec', array(
	'title' => __('Footer','grypas'),
	'priority' => '60',
));
$wp_customize->add_setting('footer-logo', array(
	'default' => get_theme_file_uri('/assets/img/logo-large.png'),
	'transport' => 'refresh'
));
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer-logo-ctrl', array(
	'label' => __( 'Footer Logo', 'grypas' ),
	'section' => 'footer-sec',
	'settings' => 'footer-logo',
	'mime_type' => 'image',
  ) ) );

$wp_customize->add_setting('footer-desc', array(
	'default' => 'Using Technology To Drive Positive User Experiences.',
	'transport' => 'postMessage'
));
$wp_customize->add_control('footer-desc-ctrl', array(
	'label' => __('Footer Description','grypas'),
	'section' => 'footer-sec',
	'settings' => 'footer-desc',
	'type'=> 'text',
));
$wp_customize->add_setting('footer-addres', array(
	'default' => 'L21/580 George St,Sydney NSW 2000.',
	'transport' => 'postMessage'
));
$wp_customize->add_control('footer-addres-ctrl', array(
	'label' => __('Office address','grypas'),
	'section' => 'footer-sec',
	'settings' => 'footer-addres',
	'type'=> 'text',
));
$wp_customize->add_setting('footer-copyright', array(
	'default' => '© 2022 Grypas Group Pty Ltd',
	'transport' => 'postMessage'
));
$wp_customize->add_control('footer-copyright-ctrl', array(
	'label' => __('Copyright text','grypas'),
	'section' => 'footer-sec',
	'settings' => 'footer-copyright',
	'type'=> 'text',
));

$wp_customize->add_setting('social-icon1', array(
	'default' => '<i class="fa-brands fa-facebook-f"></i>',
	'transport' => 'postMessage'
));
$wp_customize->add_control('social-icon1-ctrl', array(
	'label' => __('Fontawsome social icon','grypas'),
	'section' => 'footer-sec',
	'settings' => 'social-icon1',
	'type'=> 'text',
));

$wp_customize->add_setting( 'social-icon1-url', array(
	'active_callback' => function(){
		if(get_theme_mod('social-icon1')){
			return true;
		}
		return false;
	}
  ) );
  
$wp_customize->add_control( 'social-icon-url1-ctrl', array(
	'type' => 'url',
	'section' => 'footer-sec',
	'settings' => 'social-icon1-url',
	'input_attrs' => array(
		'placeholder' => __( 'http://www.facebook.com','grypas' ),
) ) );


$wp_customize->add_setting('social-icon2', array(
	'default' => '<i class="fa-brands fa-instagram"></i>',
	'transport' => 'postMessage'
));
$wp_customize->add_control('social-icon2-ctrl', array(
	'label' => __('Fontawsome social icon','grypas'),
	'section' => 'footer-sec',
	'settings' => 'social-icon2',
	'type'=> 'text',
));

$wp_customize->add_setting( 'social-icon2-url', array(
	'active_callback' => function(){
		if(get_theme_mod('social-icon2')){
			return true;
		}
		return false;
	}
  ) );
  
$wp_customize->add_control( 'social-ico2-url-ctrl', array(
	'type' => 'url',
	'section' => 'footer-sec',
	'settings' => 'social-icon2-url',
	'input_attrs' => array(
		'placeholder' => __( 'http://www.instagram.com','grypas' ),
) ) );

$wp_customize->add_setting('social-icon3', array(
	'default' => '<i class="fa-brands fa-twitter"></i>',
	'transport' => 'postMessage'
));
$wp_customize->add_control('social-icon3-ctrl', array(
	'label' => __('Fontawsome social icon','grypas'),
	'section' => 'footer-sec',
	'settings' => 'social-icon3',
	'type'=> 'text',
));

$wp_customize->add_setting( 'social-icon3-url', array(
	'active_callback' => function(){
		if(get_theme_mod('social-icon3')){
			return true;
		}
		return false;
	}
  ) );
  
$wp_customize->add_control( 'social-icon3-url-ctrl', array(
	'type' => 'url',
	'section' => 'footer-sec',
	'settings' => 'social-icon3-url',
	'input_attrs' => array(
		'placeholder' => __( 'http://www.twitter.com','grypas' ),
) ) );
$wp_customize->add_setting('social-icon4', array(
	'default' => '<i class="fa-brands fa-youtube"></i>',
	'transport' => 'postMessage'
));
$wp_customize->add_control('social-icon4-ctrl', array(
	'label' => __('Fontawsome social icon','grypas'),
	'section' => 'footer-sec',
	'settings' => 'social-icon4',
	'type'=> 'text',
));
$wp_customize->add_setting( 'social-icon4-url', array(
	'active_callback' => function(){
		if(get_theme_mod('social-icon4')){
			return true;
		}
		return false;
	}
  ) );
  
$wp_customize->add_control( 'social-icon4-url-ctrl', array(
	'type' => 'url',
	'section' => 'footer-sec',
	'settings' => 'social-icon4-url',
	'input_attrs' => array(
		'placeholder' => __( 'http://www.youtube.com','grypas' ),
) ) );



}
add_action( 'customize_register', 'grypas_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function grypas_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function grypas_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function grypas_customize_preview_js() {
	wp_enqueue_script( 'grypas-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'grypas_customize_preview_js' );
