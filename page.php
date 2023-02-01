<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Grypas
 */

get_header();
?>
<!-- Start Hero Area -->
<?php  get_template_part('/template-parts/header/page-hero-area');  ?>
<!-- End Hero Area -->
<section class="page-sec mt-50 mb-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
