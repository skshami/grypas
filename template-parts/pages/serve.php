<!-- Start serve Area -->
<?php

$args = [
    'post_type'   => 'serve',
    'post_status' => 'publish',
];
$serveSlider = new WP_Query( $args );
if ( $serveSlider->have_posts() ):

?>
<section class="section-serve wow bounceInUp" data-wow-duration="3s">
    <div class="container mb-50">
        <div class="row d-flex">
            <div class="col-md-8 col-sm-12">
                <h2 id="serve-title">
                    <?php echo esc_html( get_theme_mod( 'serve-title', 'What we serve as a whole' ) ); ?>
                </h2>
                <p id="serve-desc">
                    <?php echo esc_html( get_theme_mod( 'serve-desc', 'Lorem ipsum dolor sit amet consectetur.
                    Iaculis nulla quis ut diam lectus
                    pellentesque at id auctor. At tempor sem
                    arcu massa egestas velit diam vitae
                    praesent.' ) ) ?>
                </p>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="d-flex justify-content-end serve-btn-prosition">
                    <a class="btn btn-sort">
                        <i class="swiper-button-prev"></i>
                    </a>
                    <a class="btn btn-sort">
                        <i class="swiper-button-next"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="swiper serveSlider">
                <div class="swiper-wrapper">
                <?php
                    while ( $serveSlider->have_posts() ):
                        $serveSlider->the_post();
                        ?>
	                    <div class="swiper-slide serv-slide">
	                        <?php the_post_thumbnail( 'serv_slide_thumb' )?>
	                        <h3><?php the_title();?></h3>
	                    </div>
	                    <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
?>
<!-- End serve Area -->