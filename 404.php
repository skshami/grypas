<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Grypas
 */

get_header();
?>


<!-- Start Hero Area -->
<section class="showcase404 bg-dark">
    <div class="hallcontainer">
        <div class="row">
            <div class="showcase-text text-center">
                <img class="logo404" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>" alt="logo">
                <h1 class="text-center m-auto"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'grypas' );?></h1>
                <a class="btn btn-custom" href="<?php echo home_url( );?>"><?php esc_html_e( 'Go Home', 'grypas' );?></a>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<section class="error-404 not-found">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-content">
					<img src="<?php echo get_template_directory_uri( );?>/assets/img/404.png" alt="">
				</div><!-- .page-content -->
			</div>
		</div>
	</div>
</section><!-- .error-404 -->


<?php
get_footer();
