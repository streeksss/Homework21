<?php get_header(); ?>
    <main class="m-page">
        <div class="container clearfix">
            <div class="main-column">
                <div class="slider">

                    <div class="fotorama" data-width="700" data-ratio="700/467" data-max-width="100%">
                        <img src="<?php bloginfo('template_directory'); ?>/img/1.jpg">
                        <img src="<?php bloginfo('template_directory'); ?>/img/2.jpg">
                        <img src="<?php bloginfo('template_directory'); ?>/img/3.jpg">
                        <img src="<?php bloginfo('template_directory'); ?>/img/4.jpg">
                        <img src="<?php bloginfo('template_directory'); ?>/img/5.jpg">
                    </div>

                    <div class="slider-post">
                        <h2>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h2>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequal.
                    </div>
                </div>


                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <?php  the_post_thumbnail(); ?>
                        <article class="post-text">


                                <div class="info">
                                    <div class="time">Published time:  <?php the_time('j.m.Y') ?></div>
                                    <div class="info-text">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="continue">
                                        <div class="continue-text"><a href="<?php the_permalink(); ?>">CONTINUE READING</a></div>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/continue-arrow.png" alt="Continue"/>
                                    </div>
                                    </div>
                                </div>

                        </article>
                    <?php endwhile;
                else :
                    echo '<p>No content found</p>';
                endif;
                ?>

                <div class="pagination">
                    <?php
                    //global $wp_query;

                    $big = 999999999; // need an unlikely integer

                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages,
                        'prev_text' => __('« Previous'),
                        'next_text' => __('Next »'),

                    ) );
                    ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
            <img class="banner" src="<?php echo get_theme_mod('banner_image'); ?>" alt="banner"/>
        </div>
    </main>
<?php get_footer(); ?>