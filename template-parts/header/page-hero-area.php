<!-- Start Hero Area -->
<section class="showcase">
    <img class="hero-img" src="<?php the_post_thumbnail_url();?>">
    <div class="overlay"></div>
    <div class="hallcontainer">
        <div class="row">
            <div class="showcase-text text-center">
                <img class="logo wow bounceInUp" data-wow-duration="3s" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>" alt="logo">
                <h1 id="font-hero-title" class="text-center m-auto wow fadeInUp" data-wow-duration='2s' data-wow-delay='0.5s'><?php single_post_title();?></h1>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->