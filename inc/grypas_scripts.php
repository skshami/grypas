<?php
/** * Enqueue scripts and styles. */
function grypas_scripts() {
    wp_enqueue_style( 'grypas-style', get_stylesheet_uri(), [], _S_VERSION );
    wp_style_add_data( 'grypas-style', 'rtl', 'replace' );
    
    // Fonts included
    wp_enqueue_style('grypas_gilroy_fonts', get_template_directory_uri().'/assets/fonts/gilroy/stylesheet.css', [], _S_VERSION, false );
    wp_enqueue_style('grypas_spprodisplay_fonts', get_template_directory_uri().'/assets/fonts/spprodisplay/stylesheet.css', [], _S_VERSION, false );
    
    // Font-awesome css included
    wp_enqueue_style('grypas-fontawesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', [], _S_VERSION, false );
    
    // CSS included
    wp_enqueue_style('grypas-bootstrap','//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', [], _S_VERSION, false );
    wp_enqueue_style('grypas-swiper','//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', [], _S_VERSION, false );
    wp_enqueue_style('grypas-video', get_template_directory_uri().'/assets/css/video-js.css', [], _S_VERSION, false );
    wp_enqueue_style('grypas-theme', get_template_directory_uri().'/assets/css/style.css', [], _S_VERSION, false );
    wp_enqueue_style('grypas-theme-responsive', get_template_directory_uri().'/assets/css/responsive.css', [], _S_VERSION, false );

    wp_enqueue_script( 'grypas-navigation', get_template_directory_uri() . '/js/navigation.js', [], _S_VERSION, true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // Font Awsome js included
    wp_enqueue_script( 'grypas-font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js', [], _S_VERSION, true );
    
    // JS included
    wp_enqueue_script( 'grypas-popperjs', '//cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', ['jquery'], _S_VERSION, true );
    wp_enqueue_script( 'grypas-bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', ['jquery'], _S_VERSION, true );
    wp_enqueue_script( 'grypas-swiper', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', ['jquery'], _S_VERSION, true );
    wp_enqueue_script( 'grypas-video', '//vjs.zencdn.net/7.20.3/video.min.js', ['jquery'], _S_VERSION, true );
    wp_enqueue_script( 'grypas-theme', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], _S_VERSION, true );
  
}
add_action( 'wp_enqueue_scripts', 'grypas_scripts' );


function grypas_animate_scripts(){
?>
         <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css">
         <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/wow.js"></script>
         <script>
             var wow = new WOW({
                    boxClass:     'wow',      // animated element css class (default is wow)
                    animateClass: 'animated', // animation css class (default is animated)
                    offset:       0,          // distance to the element when triggering the animation (default is 0)
                    mobile:       true,       // trigger animations on mobile devices (default is true)
                    live:         true,       // act on asynchronously loaded content (default is true)
                    callback:     function(box) {
                    // the callback is fired every time an animation is started
                    // the argument that is passed in is the DOM node being animated
                    },
                    scrollContainer: null // optional scroll container selector, otherwise use window
                });
                    wow.init();
         </script>

   <?php
};
add_action('wp_head', 'grypas_animate_scripts');
