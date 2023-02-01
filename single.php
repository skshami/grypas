<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Grypas
 */

get_header();
		while ( have_posts() ) :
			the_post();
			?>
	<!-- Start Hero Area -->
	<section class="showcase404 bg-dark">
		<div class="hallcontainer">
			<div class="row">
				<a href="<?php echo home_url();?>">
					<div class="showcase-text text-center">
					<img class="logo404" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>" alt="logo">
					</div>
				</a>

				<h1 id="font-hero-title" class="text-center m-auto wow fadeInUp pt-50 text-light" data-wow-duration='2s' data-wow-delay='0.5s'><?php the_title();?></h1>
			</div>
		</div>
	</section>
	<!-- End Hero Area -->
	<section class="single-post">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-post-thumb text-center pt-50">
						<img src="<?php the_post_thumbnail_url( );?>" alt="<?php the_title( ); ?>">
					</div>
					<div class="text-center mt-50"><?php the_content( );?></div>
					<div class="text-center pt-50">
						<?php
					
							the_posts_pagination( [
								'mid_size'  => 2,
								'prev_text' => __( 'Previous Post', 'grypas' ),
								'next_text' => __( 'Next Post', 'grypas' ),
								'class'     => 'active',
							] );
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
		<?php
		endwhile; // End of the loop.
get_footer();
