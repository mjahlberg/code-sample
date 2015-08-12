<?php
/**
 * @package WordPress
 * @subpackage StanleyWP
 * Template Name: Thanks
 */
?>
<?php get_header(); ?>

    <section id="thank-you-page" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/creators_top_bg.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <h2 style="color: white;">It's great to hear from you, <br/> a member of our team will be in touch soon.</h2>
            </div>
        </div>
    </section>

<?php get_footer(); ?>

<style>
    .wrap {
        padding-top: 5em;
    }
</style>

<script>
    $( ".cbp-af-header" ).addClass( "cbp-af-header-shrink" );
</script>