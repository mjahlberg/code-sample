<?php
/**
 * @package WordPress
 * @subpackage StanleyWP
 * Template Name: Terms
 */
?>
<?php get_header(); ?>

    <section id="privacy">
        <div class="container">
            <div class="row">
                <?php the_content(); ?>
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