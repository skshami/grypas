<!-- Start principles Area -->
<?php
$args = array(
    'post_type' => 'quote',
    'post_status' => 'publish'
);
$quotes = new WP_Query( $args );
if ( $quotes->have_posts() ):
?>
<section class="principles-quote wow bounceInRight" data-wow-duration="3s">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="quote-intro">
                    <h2 id="principles-title">
                        <?php echo esc_html(get_theme_mod('principles-title','Principles Quote'));?> 
                    </h2>
                    <p id="principles-desc">
                        <?php echo esc_html(get_theme_mod('principles-desc','Lorem ipsum dolor sit amet consectetur. Iaculis nulla quis ut diam lectus pellentesque at id
                            auctor. At tempor sem arcu massa egestas velit diam vitae praesent.'));?> 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="priciples-slider">
        <div class="swiper priciples">
            <div class="swiper-wrapper">
            <?php
                while ( $quotes->have_posts() ):
                    $quotes->the_post();
                ?> 
                <div class="swiper-slide prin-slide">
                    <div class="row d-flex justify-content-center align-items-center ">
                        <div class="col-6">
                            <div class="prici-quote">
                                <img style="width: 10px; height: 10px;" src="<?php echo get_template_directory_uri();?>/assets/img/Vector.png" alt="">
                                <a href="<?php the_permalink();?>">
                                    <?php the_excerpt();?>
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="prici-quote-img">
                                <?php the_post_thumbnail('quote_slide_thumb');?>
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
    </div>
</section>
<?php
 endif;
?>
<!-- End principles Area -->