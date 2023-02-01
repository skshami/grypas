<?php  
/**
 * Template Name: Home
 */

get_header();
?>
<!-- Start Hero Area -->
<?php  get_template_part('/template-parts/header/home-hero-area');  ?>
<!-- End Hero Area -->
<!-- Start Home intro Area -->
<?php  get_template_part('/template-parts/pages/home-intro');  ?>
<!-- End Home intro Area -->
<!-- Start expertise Area -->
<?php  get_template_part('/template-parts/pages/expertise');  ?>
<!-- End expertise Area -->
<!-- Start serve Area -->
<?php  get_template_part('/template-parts/pages/serve');  ?>
<!-- End serve Area -->
<!-- Start testimonial Area -->
<?php  get_template_part('/template-parts/pages/testimonial');  ?>
<!-- End testimonial Area -->
<!-- Start principles Area -->
<?php  get_template_part('/template-parts/pages/principles');  ?>
<!-- End principles Area -->
<!-- Start Blog Area -->

<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'post_per_page' => 9,
    );
    $bpost_query = new WP_Query( $args );
    if ( $bpost_query->have_posts() ):
?>
    <section class="blog-area pb-50">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h2 class="text-center pt-50" id="blog-title"><?php echo esc_html(get_theme_mod('blog-title','Blog Area'))?></h2>
                <?php
                        while ( $bpost_query->have_posts() ):
                            $bpost_query->the_post();
                            get_template_part('/template-parts/content', 'post'); 
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
<?php
 endif;
 ?>

<!-- End Blog Area -->
<?php  get_footer();  ?>