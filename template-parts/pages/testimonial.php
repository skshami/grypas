<!-- Start testimonial Area -->
<?php    
    $args = array(
        'post_type' => 'testimonial',
        'post_status' => 'publish'
    );
    $testimonial = new WP_Query( $args );
    if ( $testimonial->have_posts() ):
?>

<section class="sec-testimonial pt-100 pb-100 wow bounceInLeft" data-wow-duration="3s">
    <div class="container">
        <div class="row">
            <div class="col-md-12 testiprosition">
                <div class="testimonial-intro text-center mb-60 col-md-6 m-auto col-sm-12">
                    <h2 id="testimonial-title">
                        <?php echo esc_html(get_theme_mod('testimonial-title','Testimonial Quote'))?>
                    </h2>
                    <p id="testimonial-desc">
                        <?php echo esc_html(get_theme_mod('testimonial-desc','Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id
                            auctor. At tempor sem arcu massa egestas velit diam vitae praesent.'))?>
                    </p>
                </div>
                <div class="swiper testimonial">
                    <div class="swiper-wrapper">
                    <?php
                  
                        while ( $testimonial->have_posts() ):
                            $testimonial->the_post();
                    ?> 
                        <div class="swiper-slide testi-slide d-flex">
                            <div class="col-4 sm-display">
                                <?php  the_post_thumbnail() ; ?>
                            </div>
                            <div class="col-8 pl-30 sm-display-sw">
                                <div class="reviews d-flex justify-content-end">
                                   <?php if(get_field('client_rating')==1){
                                    ?>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <?php
                                    } if(get_field('client_rating')==2){
                                    ?>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <?php
                                    } if(get_field('client_rating')==3){
                                    ?>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <?php
                                    } if(get_field('client_rating')==4){
                                    ?>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <?php
                                    } if(get_field('client_rating')==5){
                                    ?>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <?php
                                    }?>
                                </div>

                                <div class="quote pt-50">
                                    <h5><?php the_content();?></h5>
                                </div>
                                <div class="client-info mt-50">
                                    <div class="row  d-flex justify-content-end align-items-end">
                                        <div class="col-12 d-flex">
                                            <div class="profile">
                                                <?php if( get_field('client_image') ): ?>
                                                    <img src="<?php the_field('client_image'); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="clint-data">
                                                <h4 class="client-name"><?php the_field('client_name'); ?></h4>
                                                <p class="designation"><?php the_field('client_designation'); ?></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata(); 
                     ?>
                    </div>
                </div>
                <div class="slide-btn d-flex justify-content-between">
                    <a class="btn btn-arrow">
                        <i class="swiper-button-prev"></i>
                    </a>
                    <a class="btn btn-arrow">
                        <i class="swiper-button-next"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
  endif;
  ?>
<!-- End testimonial Area -->