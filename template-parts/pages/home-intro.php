<!-- Start Home intro Area -->
<section class="section-home-intro">
    <div class="container">
        <div class="home-intro">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 gry_order1 wow bounceInLeft" data-wow-duration="3s">
                    <div class="home-intro-info">
                        <h2 class="pb-50" id="home-into-title">
                            <?php  
                            echo esc_html(get_theme_mod('home-intro-title',__('A fully integrated suite of digitally controlled services.','grypas')));
                            ?>
                            </h2>
                        <p class="pb-50" id="home-into-desc">
                        <?php  
                            echo esc_html(get_theme_mod('home-intro-desc',
                            __('Lorem ipsum dolor sit amet
                            consectetur. Iaculis nulla quis ut diam
                            lectus pellentesque at id auctor. At
                            tempor sem arcu massa egestas velit diam
                            vitae praesent. Amet eu eleifend mi
                            velit tempor sem arcu. Lorem ipsum dolor
                            sit amet consectetur. Iaculis nulla quis
                            ut diam lectus pellentesque at id
                            auctor. At tempor sem arcu massa egestas
                            velit diam vitae praesent. Amet eu
                            eleifend mi velit tempor sem arcu.','grypas')));
                            ?>
                            </p>
                        <a class="btn btn-primary" id="intro-btn" href="<?php echo esc_url(get_theme_mod('intro-btn-url'));?>">Contact Now</a>
                    </div>
                </div>
                <div class="col-md-6 gry_order2 wow bounceInRight" data-wow-duration="3s">
                    <div class="home-intro-img"> 
                        <div class="intro-img2" id="intro-preview2">
                            <?php echo wp_get_attachment_image(get_theme_mod('home-intro-thumb-top'), 'full' ); ?>
                        </div>
                        <div class="intro-img1" id="intro-preview1">
                            <?php echo wp_get_attachment_image(get_theme_mod('home-intro-thumb-bottom'), 'full'  ); ?> 
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Home intro Area -->