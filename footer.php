<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Grypas
 */

?>
<!-- Start Footer Area -->
<section class="footer-section pt-100 pb-30 bg-dark wow fadeInUp" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 sm-display-foo">
                <div class="footer-logo">
                    <img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('footer-logo')));?>" alt="">
                    <p class="text-light pt-20" id="footer-desc"><?php echo esc_html(get_theme_mod('footer-desc','Using Technology To Drive Positive User Experiences'))?></p>
                </div>
            </div>
            <div class="col-md-6 text-end col-sm-12 sm-display-foo">
                <div class="social-icons">
                    <a href="<?php echo esc_url(get_theme_mod('social-icon1-url'))?>"><?php echo get_theme_mod('social-icon1','<i class="fa-brands fa-facebook-f"></i>')?></a>
                    <a href="<?php echo esc_url(get_theme_mod('social-icon2-url'))?>"><?php echo get_theme_mod('social-icon2','<i class="fa-brands fa-instagram"></i>')?></a>
                    <a href="<?php echo esc_url(get_theme_mod('social-icon3-url'))?>"><?php echo get_theme_mod('social-icon3','<i class="fa-brands fa-twitter"></i>')?></a>
                    <a href="<?php echo esc_url(get_theme_mod('social-icon4-url'))?>"><?php echo get_theme_mod('social-icon4','<i class="fa-brands fa-youtube"></i>')?></a>
                </div>
                <div class="address pt-50">
                    <p class="text-light" id="footer-addres"><?php echo esc_html(get_theme_mod('footer-addres','L21/580 George St,Sydney NSW 2000.'))?></p>
                </div>
                <div class="footer-menu">
                    <?php
                        wp_nav_menu( [
                            'theme_location'  => 'footer-menu', 
                            'menu_class' => 'list-group list-group-horizontal d-flex justify-content-end',                            
                        ] );
                    ?>
                    <?php
                        wp_nav_menu( [
                            'theme_location'  => 'footer-menu2', 
                            'menu_class' => 'list-group list-group-horizontal d-flex justify-content-end',                            
                        ] );
                    ?>
                </div>
            </div>
            <div class="copy-right text-center pt-50">
                <p class="text-light" id="footer-copyright"><?php echo esc_html(get_theme_mod('footer-copyright','© 2022 Grypas Group Pty Ltd'));?></p>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Area -->

<!-- Start sidebar menu -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="c0l-md-12">
                <div class="nav-area">
                    <div class="btn-menu">
                        <button type="button" class="toggle" id="toggle">
                            <span></span>
                        </button>
                    </div>
                    <div class="sidebar" id="sidebar">
                        <nav class="navmenu">
                            <div class="navigation">
                            <?php

                                wp_nav_menu( [
                                    'theme_location'  => "primary",                             
                                ] );
                            ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End sidebar menu -->

<img class="topbutton" src="<?php echo get_template_directory_uri( )?>/assets/img/topbtn.png" alt="">

<?php wp_footer(); ?>


</body>

</html>