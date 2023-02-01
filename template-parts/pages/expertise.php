<!-- Start expertise Area -->
<?php
   $args = array(
    'post_type' => 'expertise',
    'post_status' => 'publish',
    'post_per_page' => 9
);
$bpost_query = new WP_Query( $args );
if ( $bpost_query->have_posts() ):

?>
<section class="section-expertise wow bounceInRight" data-wow-duration="3s">
    <div class="container">
        <div class="row">
            <div class="expertise">
                <div class="col-md-9">
                    <h2 class="pb-50" id="expertise-title">
                        <?php  echo esc_html(get_theme_mod('expertise-title','Bringing expertise and experience to the table
                        to ensure clients’ succeed.')); ?>
                    </h2>
                </div>
                <div class="container expertise-blog">
                    <div class="row">
                    <?php
                 
                        while ( $bpost_query->have_posts() ):
                            $bpost_query->the_post();
                    ?> 
                        <div class="col-md-4 col-sm-12 mt-40">
                            <div class="expertise-thumb">
                                <?php the_post_thumbnail('post_thumb')?>
                                <a href="<?php the_permalink();?>">
                                    <span class="icon">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                            </div>
                            <a href="<?php the_permalink();?>">
                                <h3 class="pt-30"><?php the_title();?></h3>
                            </a>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();  
                     ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
  endif;
?>
<!-- End expertise Area -->