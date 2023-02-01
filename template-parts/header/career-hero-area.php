<!-- Start Hero Area -->
<section class="showcase">
    <?php if(get_theme_mod('career-hero-video')){?>
    <video src="<?php echo wp_get_attachment_url(get_theme_mod('career-hero-video'));?>" autoplay muted loop></video>
    <?php } else{?>
            <img class="hero-img" src="<?php echo wp_get_attachment_url(get_theme_mod('career-hero-img'));?>">
    <?php } ?>
    <div class="overlay"></div>
    <div class="hallcontainer">
        <div class="row">
            <div class="showcase-text text-center">
                <img class="logo wow bounceInUp" data-wow-duration="3s" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>" alt="logo">
                <h3 id="career-hero-desc" class="text-light wow fadeInRight" data-wow-duration="2s"><?php echo esc_html(get_theme_mod('career-hero-desc','Changing the way'));?></h3>
                <h1 id="career-hero-title" class="text-center m-auto wow fadeInUp" data-wow-duration="2s"><?php echo esc_html(get_theme_mod('career-hero-title','home The World Works for the Better'));?></h1>
                <a id="career-hero-btn-text" class="btn btn-custom mt-70 wow slideInRight" data-wow-duration="1s" href="<?php echo esc_url(get_theme_mod('career-hero-btn-url'));?>"><?php echo esc_html(get_theme_mod('career-hero-btn-text','Dive in'));?></a>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->