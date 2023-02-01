<?php  
/**
 * Template Name: Contact
 */

get_header();
?>
<!-- Start Hero Area -->
<?php  get_template_part('/template-parts/header/contact-hero-area');  ?>
<!-- End Hero Area -->
    <!-- Start Contact Area -->
    <section class="contact-sec mt-200 mb-200">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-end">    
                <div class="col-md-6 col-sm-12 sm-order2 col-tb-12">
                    <div class="contact-info wow bounceInLeft" data-wow-duration="3s">
                        <h6 class="location" ><i class="icon fa-solid fa-location-dot"></i> <span id="contact-location"><?php echo esc_html(get_theme_mod('contact-location','Suite 27, 1-5 Jacobs St,
                            Bankstown NSW 2200, Australia'))?></span></h6>
                        <div class="d-flex">
                            <h6 class="email pr-50"><i class="icon fa-solid fa-envelope"></i><span id="contact-mail"><?php echo esc_html(get_theme_mod('contact-mail','info@inflack.com'))?></span></h6>
                            <h6 class="phone"><i class="icon fa-solid fa-phone-volume"></i><span id="contact-phone"><?php echo esc_html(get_theme_mod('contact-phone','+88017 7775 0933'))?></span></h6>
                        </div>
                    </div>
                    <div class="location-map pt-50 wow bounceInLeft" data-wow-duration="3s">
                        <iframe
                            src="<?php echo esc_url(get_theme_mod('contact-map','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255278.11519261685!2d103.68395510808436!3d1.3440851974281616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1767b42b8ec9%3A0x400f7acaedaa420!2sSingapore!5e0!3m2!1sen!2ssg!4v1673371250575!5m2!1sen!2ssg')) ?> "
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 sm-order1 col-tb-12">
                    <div class="contact-form">
                        <?php echo do_shortcode(get_theme_mod('contact-form','[contact-form-7 id="205" title="Contact Form One"]'));?>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- End Contact Area -->
<?php get_footer(); ?>