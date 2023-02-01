<?php  
/**
 * Template Name: Career
 */

get_header();
?>
<!-- Start Hero Area -->
<?php  get_template_part('/template-parts/header/career-hero-area');  ?>
<!-- End Hero Area -->
    <!-- Start Band Area -->
    <section class="brand-sec mt-100 mb-50 wow bounceInUp" data-wow-duration="3s">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="bands-heading" id="career-heading">
                        <?php echo esc_html(get_theme_mod('career-heading','Please contact us if you are interested in earning your place here in Grypas family.'))?>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <?php
        $args = array(
            'post_type' => 'career',
            'post_status' => 'publish',
            'post_per_page' => 3
        );
        $career = new WP_Query( $args );
        if ( $career->have_posts() ):
            while ( $career->have_posts() ):
                $career->the_post();
    ?> 
    <section class="brand-sec mt-50 mb-50 bg-gray wow bounceInUp" data-wow-duration="3s">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6 col-sm-12 p-50 sm-order2">
                    <div class="band-post">
                        <h3 class="pb-50"><?php the_title();?></h3>
                        <div class="positions d-flex justify-content-center align-items-end">
                        <?php if(get_field('first_position_for')){?>
                            <div class="positionfor bg-white">
                                <p><?php _e('Position for','grypas');?></p>
                                <h4> <?php echo get_field('first_position_for');  ?> </h4>
                                <a class="btn btn-custom" href="<?php echo get_field('first_position_for_application_form_link');  ?>"><?php _e('Apply Now','grypas');?><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            </div>
                            <?php };?>
                            <?php if(get_field('secend_position_for')){?>
                            <div class="positionfor bg-white">
                                <p><?php _e('Position for','grypas');?></p>
                                <h4><?php echo get_field('secend_position_for');  ?> </h4>
                                <a class="btn btn-custom" href="<?php echo get_field('secend_position_for_application_form_link');  ?>"><?php _e('Apply Now','grypas');?> <i
                                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            </div>
                            <?php };?>
                            <?php if(get_field('third_position_for')){?>
                            <div class="positionfor bg-white">
                                <p><?php _e('Position for','grypas');?></p>
                                <h4><?php echo get_field('third_position_for');  ?> </h4>
                                <a class="btn btn-custom" href="<?php echo get_field('third_position_for_application_form_link');  ?>"><?php _e('Apply Now','grypas');?><i
                                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            </div>
                            <?php };?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 p-50 sm-order1 ">
                    <div class="band-thumb text-center">
                        <?php the_post_thumbnail('brand-thumb');?>
                        <a href="<?php the_permalink();?>">
                            <span class="band-post-link">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        endwhile;
        wp_reset_postdata(); 
    endif;
    ?>
    <!-- End Brand Area  -->

    <!-- Start Footer Section -->
<?php  get_footer();  ?>