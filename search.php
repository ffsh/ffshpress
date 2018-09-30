<?php get_header(); ?>
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-xl-8 search-result-list">
            <?php if (have_posts()) : // Results Found ?>

                <h1><?php _e('Search Results'); ?></h1>
                <hr>
                <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class(); ?>>
                    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="entry">
                        <p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                    </div>
                </article>
                <hr />

                <?php endwhile; ?>

            <?php else : // No Results ?>

                <p><?php _e('Sorry'); ?></p>
                <div class="row">
                    <div class="col-md-6 posts">
                        <h3><?php _e('Recent Articles'); ?></h3>
                        <ul>
                            <?php
                                $args = array(
                                    'numberposts' => '10',
                                    'post_status' => 'publish'
                                );
                                $recent_posts = wp_get_recent_posts( $args );
                                foreach( $recent_posts as $recent ) {
                                    echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></li>';
                                }
                            ?>
                        </ul>
                    </div> <!-- .posts -->
                    <div class="col-md-6 pages">
                        <h3><?php _e('Page Sitemap'); ?></h3>
                        <ul>
                            <?php wp_list_pages('title_li=&sort_column=menu_order'); ?>
                        </ul>
                    </div> <!-- .pages -->
                </div> <!-- .row -->

            <?php endif; ?>
        </div> <!-- .col-md-8 -->
        <?php get_sidebar(); ?>
</div> <!-- .row -->

<div class="pager mx-auto">
<?php
if ( function_exists('wp_bootstrap_pagination') ){
    wp_bootstrap_pagination();
}

?>
</div>
<?php get_footer(); ?>