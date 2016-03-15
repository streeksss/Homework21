<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
    <main class="m-page">
        <div class="container clearfix">
            <div class="main-column">

            <h1 class="contact-title">Our contacts</h1>
            <span class="contact-phone">Phone:  <span class="phone-text"> <?php echo get_theme_mod('contact_tel'); ?></span></span><br/>
            <span class="contact-phone">E-mail:  <span class="phone-text"><?php echo get_theme_mod('contact_mail'); ?></span></span>

                <?php echo do_shortcode( '[contact-form-7 id="45" title="Contact form 1"]' ); ?>

            </div>
            <?php get_sidebar(); ?>
        </div>
    </main>
<?php get_footer(); ?>