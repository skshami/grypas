<?php  
/**
 * Template Name: Brands
 */

get_header();
?>
<!-- Start Hero Area -->
<?php  get_template_part('/template-parts/header/brands-hero-area');  ?>
<!-- End Hero Area -->
<?php
  $args = array(
    'post_type' => 'brand',
    'post_status' => 'publish',
    'post_per_page' => 3
);
$brand_query = new WP_Query( $args );
if ( $brand_query->have_posts() ):
?>
    <!-- Start Brand Area -->
    <section class="brand-sec pt-100 pb-100 wow fadeInUp" data-wow-duration="3s">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="bands-heading" id="brand-heading">
                        <?php echo esc_html(get_theme_mod('brand-heading','Bringing expertise and experience to the table to ensure clients’ succeed.'))?>
                        
                    </h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center brand-row">
            <?php
              
                    while ( $brand_query->have_posts() ):
                        $brand_query->the_post();
            ?> 
                <div class="col-md-6 col-sm-12 bands-post md-order2 wow bounceInRight" data-wow-duration="3s">
                    <div class="band-post pl-50">
                        <h3><?php the_title();?></h3>
                        <?php the_content();?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 bands-post sm-mb-30 md-order1 wow bounceInLeft" data-wow-duration="3s">
                    <div class="band-thumb text-center">
                        <img src="<?php the_post_thumbnail_url('brand-thumb');?>" alt="<?php the_title();?>">
                        <a href="<?php the_permalink();?>">
                        <span class="band-post-link">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </span>
                        </a>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata(); 
            ?>
            </div>
        </div>
    </section>
    <?php
      endif;
    ?>
    <!-- End Brand Area -->
<?php  get_footer();  ?>