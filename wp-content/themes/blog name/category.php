<?php
/*
Template Name: Category template
*/
?>

<?php get_header(); ?>
    <main class="m-page">
        <div class="container clearfix">
            <div class="main-column">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <?php  the_post_thumbnail(); ?>
                        <article class="post-text">
                            <div class="info">
                                <div class="time">Published time:  <?php the_time('j.m.Y') ?></div>
                                <div class="info-text">
                                    <h3><?php the_title(); ?></a></h3>
                                    <p><?php the_content(); ?></p>
                                    <p>New template - Category 2!</p>
                                </div>
                            </div>
                        </article>
                    <?php endwhile;
                else :
                    echo '<p>No content found</p>';
                endif;
                ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </main>
<?php get_footer(); ?>