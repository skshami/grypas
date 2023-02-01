 <!-- Start Header Area -->
 <section class="hero-area">
        <div class="showcase">
            <?php if(get_theme_mod('contact-hero-video')){?>
            <video src="<?php echo wp_get_attachment_url(get_theme_mod('contact-hero-video'));?>"autoplay muted loop></video>
            <?php } else{?>
            <img class="hero-img" src="<?php echo wp_get_attachment_url(get_theme_mod('contact-hero-img'));?>">
            <?php } ?>
            <div class="overlay"></div>
            <div class="hero-container">
                <div class="row">
                    <div class="showcase-text">
                        <div class="text-end">
                            <img class="logo wow bounceInUp" data-wow-duration="3s" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>" alt="logo">
                        </div>
                        <h3 id="contact-hero-desc" class="text-light wow fadeInRight" data-wow-duration="2s"><?php echo esc_html(get_theme_mod('contact-hero-desc','Changing the way'));?></h3>
                        <h1 class="wow fadeInUp" data-wow-duration="2s" id="contact-hero-title"><?php echo esc_html(get_theme_mod('contact-hero-title','this will a title content'));?></h1>
                        <a id="contact-hero-btn-text" class="btn btn-custom wow slideInRight" data-wow-duration="1s" href="<?php echo esc_url(get_theme_mod('contact-hero-btn-url'));?>"><?php echo esc_html(get_theme_mod('contact-hero-btn-text','Dive in'));?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header Area -->