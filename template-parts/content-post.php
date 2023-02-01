
<div class="col-md-3 mt-40 col-sm-12">
    <div class="blog-col">
        <div class="blog-thumb">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('blog_post_thumb');?>
            </a>
        </div>
        <a href="<?php the_permalink();?>">
            <?php the_excerpt();?>
        </a>
    </div>
</div>