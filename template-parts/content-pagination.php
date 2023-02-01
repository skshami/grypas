<div class="blog_pagination text-center pt-50">
	<?php
        the_posts_pagination( [
            'mid_size'  => 2,
            'prev_text' => __( '<i class="fas fa-angle-left"></i>', 'grypas' ),
            'next_text' => __( '<i class="fas fa-angle-right"></i>', 'grypas' ),
            'class'     => 'active',
        ] );
    ?>
</div>