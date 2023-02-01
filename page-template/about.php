<?php  
/**
 * Template Name: About
 */
get_header();
?>
<!-- Start Hero Area -->
<?php  get_template_part('/template-parts/header/about-hero-area');  ?>
<!-- End Hero Area -->
    <!-- Start Home Intro Area -->
    <section class="section-home-intro">
        <div class="container">
            <div style="padding-bottom: 0;" class="row home-intro d-flex align-items-end">
                <div class="col-md-6 col-sm-12 sm-order2 wow bounceInLeft" data-wow-duration="3s">
                    <div class="home-intro-info">
                        <h2 class="pb-50" id="about-intro-title"><?php echo esc_html(get_theme_mod('about-intro-title','A fully integrated suite of digitally controlled services.'))?></h2>
                        <p class="pb-50 pr-40" id="about-intro-desc"><?php echo esc_html(get_theme_mod('about-intro-desc',
                            'Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut
                            diam
                            lectus pellentesque at id auctor. At tempor sem arcu massa egestas velit diam vitae
                            praesent. Amet eu eleifend mi velit tempor sem arcu. Lorem ipsum dolor sit amet
                            consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor
                            sem arcu massa egestas velit diam vitae praesent. Amet eu eleifend mi velit tempor
                            sem arcu.Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus
                            pellentesque at id auctor. At tempor sem arcu massa egestas velit diam vitae
                            praesent. Amet eu eleifend mi velit tempor sem arcu.Lorem ipsum dolor sit amet
                            consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor.'))?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 sm-order1 wow bounceInRight" data-wow-duration="3s">
                    <div style="width: 570px; height: 300px; border-radius: 10px;"
                        class="intro-video d-flex justify-content-end align-items-end">
                        <video style="height: 300px; border-radius: 10px;" id="my-video" class="video-js mb-50"
                            controls preload="auto"  data-setup="{}">
                            <source src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('about-video')));?>" type="video/mp4">
                        </video>
                    </div>
                </div> 
            </div>
        </div>
        <div class="container pt-50 pb-100 wow fadeInUp" data-wow-duration="3s">
            <div class="row">
                <div class="col-12 overflow-hidden">
                    <div class="swiper-container brands">
                        <div class="swiper-wrapper d-flex align-items-center">

                        <?php
                            $args = array(
                                'post_type' => 'customer_slider',
                                'post_status' => 'publish',
                            );
                            $customer_slider = new WP_Query( $args );
                            if ( $customer_slider->have_posts() ):
                                while ( $customer_slider->have_posts() ):
                                    $customer_slider->the_post();
                        ?> 
                            <div class="swiper-slide brand-slide"><img src="<?php echo get_field('customer_logo') ?>" alt="<?php the_title();?>"></div>
                            <?php
                                endwhile;
                                wp_reset_postdata(); 
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Intro Area -->
    <!-- Start About team-->
    <?php  get_template_part('/template-parts/pages/team-member');  ?>
    <!-- End About team -->
  
    <!-- Start strategies Area -->
    <section class="strategies pt-30 pb-30 wow bounceInRight" data-wow-duration="3s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="strategies-desc pb-50">
                        <h2 class="text-end" id="about-strategies-title">
                            <?php
                                echo esc_html(get_theme_mod('about-strategies-title','We’ve got strategies <br> for growth'))
                            ?>
                            </h2>
                        <p class="text-end" id="about-strategies-desc">
                            <?php echo esc_html(get_theme_mod('about-strategies-desc','Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id auctor. At tempor sem <br> arcu massa egestas velit diam vitae praesent.'))?>
                        </p>
                    </div>
                </div>
                <?php
                $args = array(
                    'post_type' => 'strategie',
                    'post_status' => 'publish',
                );
                $strategie_query = new WP_Query( $args );
                if ( $strategie_query->have_posts() ):
                    while ( $strategie_query->have_posts() ):
                        $strategie_query->the_post();
                ?> 
                <div class="col-md-4 strate col-sm-8">
                    <div class="strategi-default-thumb">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/strategi-back.png" alt="">
                    </div>
                    <div class="straegi-cont">
                        <a href="<?php the_permalink();?>">
                        <img class="strategi-thumb" src="<?php the_post_thumbnail_url('strategi-thumb');?>" alt="<?php the_title();?>">
                        </a>
                        <a href="<?php the_permalink();?>">
                            <?php the_excerpt();?>
                        </a>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata(); 
            endif;
            ?>
            </div>
        </div>
        </div>
    </section>
    <!-- End strategies Area -->
 <!-- Start testimonial Area -->
<?php  get_template_part('/template-parts/pages/testimonial');  ?>
<!-- End testimonial Area -->
<!-- Start principles Area -->
<?php  get_template_part('/template-parts/pages/principles');  ?>
<!-- End principles Area -->
<!-- Start Blog Area -->
<?php  get_template_part('/template-parts/content', 'post');  ?>
<!-- End Blog Area -->
<!-- Start Footer Area -->
<?php  get_footer();  ?>