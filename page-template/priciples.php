<?php  
/**
 * Template Name: Principle  
 */

get_header();

$args = array(
    'post_type' => 'quote',
    'post_status' => 'publish'

);
$quotes = new WP_Query( $args );
if ( $quotes->have_posts() ):

?>
<!-- Start Hero Area -->
<?php  get_template_part('/template-parts/header/priciples-hero-area');  ?>
<!-- End Hero Area -->
    <!-- Start principles-single-slider Area -->
    <section class="principles-single-slider mt-100 mb-50 wow fadeInUp" data-wow-duration="3s">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-7 col-sm-12 bg-gray pt-50 pb-50 wow bounceInRight" data-wow-duration="3s">
                    <h2 class="pb-50 ml-50" id="principle-slider-heading"><?php echo esc_html(get_theme_mod('principle-slider-heading','We are a principle based organisation.'))?></h2>
                    <div class="swiper princi-single-slider">
                        <div class="swiper-wrapper">
                        <?php
                            while ( $quotes->have_posts() ):
                                $quotes->the_post();
                            ?> 
                          <div class="swiper-slide">
                              <div class="row prin-single-slide d-flex justify-content-center align-items-center ">
                                <div class="col-6">
                                    <div class="prici-quote">
                                        <img style="width: 10px; height: 10px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector.png" alt="">
                                        <p><?php the_content();?></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="prici-quote-img">
                                        <?php the_post_thumbnail();?>
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
                <div class="col-md-5 col-sm-12 wow bounceInLeft" data-wow-duration="3s">
                    <h3 class="prin-slide-info text-end" id="principle-slider-Second-heading">
                    <?php echo esc_html(get_theme_mod('principle-slider-Second-heading','Decisions and behaviour are driven by focused principles.'))?>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <?php  endif;?>
    <!-- Start principles-single-slider Area -->
    <!-- Start Intro Area -->
    <section class="section-home-intro">
        <div class="container">
            <div class="row home-intro gry-team d-flex justify-content-center align-items-end">
                <div class="col-md-6 col-sm-12 sm-order2 wow bounceInLeft" data-wow-duration="3s">
                    <div class="home-intro-info teams-content">
                        <h2 class="pb-50" id="principles-intro-title"><?php echo esc_html(get_theme_mod('principles-intro-title','Team of Teams content about principles.'));?></h2>
                        <p class="pb-50" id="principles-intro-desc"><?php echo esc_html(get_theme_mod('principles-intro-desc','We are committed to maintaining a minimal hierarchy and building
                            distributed leadership. We achieve this through our Team of Teams approach
                            operating as a constellation of teams that come together around specific goals,
                            rather than creating a traditional structure in which people work in hierarchies
                            based on a function or a formal business unit. We want to empower each Mantelorian to be part of creating something
                            bigger than just their jobs. This structure enables our people to form a team to
                            solve a problem or deliver an initiative which means if you care about something
                            at work, as part of a team, you can take responsibility for it!'));?></p>
                        <a class="btn btn-primary" id="principles-intro-btn-text" href="<?php echo esc_url(get_theme_mod('principles-intro-btn-url'))?>"><?php echo esc_html(get_theme_mod('principles-intro-btn-text','Contact Now'))?></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-center sm-order1 wow bounceInRight" data-wow-duration="3s">
                    <img class="teams-thumb" src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('principles-intro-thumb'))) ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Intro Area -->
<!-- Start testimonial Area -->
<?php  get_template_part('/template-parts/pages/testimonial');  ?>
<!-- End testimonial Area -->
    <?php  get_footer();  ?>
