<?php get_header(); ?>
<div class="col-sm-10 blog-main">

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

<?php
  if ( function_exists('wp_bootstrap_pagination') )
    wp_bootstrap_pagination();
?>

</div><!-- /.blog-main -->
<?php get_footer(); ?>