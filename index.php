<?php get_header(); ?>
<div class="row">
    <div class="col-sm-12 col-lg-12 col-xl-8">
       <?php
       if ( have_posts() ) {
        while ( have_posts() ) : the_post();
           ?>
           <div class="blog-post">
            <h2 class="blog-post-title"><a href=<?php echo get_the_permalink()?>><?php the_title(); ?></a></h2>
            <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
            <hr>
            <?php the_content(); ?>
        </div><!-- /.blog-post -->
        <?php
            endwhile;
        }?>
    </div><!-- /.blog-main -->

<?php get_sidebar(); ?>

</div><!-- /.row -->

<div class="pager mx-auto">
<?php
if ( function_exists('wp_bootstrap_pagination') ){
    wp_bootstrap_pagination();
}

?>
</div>
<?php get_footer(); ?>