<?php
/**
 * @package WordPress
 * @subpackage StanleyWP
 * Template Name: Investor
 */
?>
<?php get_header(); ?>

<section id="about-executives">
    <div class="container">
        <div class="row">
            <h1 class="investor-executives"><?php the_field('executive_title', 15); ?></h1>
            <?php
            $posts = get_field('executive_list', 15);
            if( $posts ): ?>
                <?php $i = -1 ?>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php $i++ ?>
                    <?php setup_postdata($post);
                    $postid = get_the_id();?>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="half a" style="background-image: url('<?php the_field('executive_picture',$postid); ?>');">
                            <a href="<?php the_field('linkedin_profile',$postid); ?>" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/linkedin-logo-white.png" /></a>
                        </div>
                        <h3><?php the_field('executive_name',$postid); ?> | <strong><?php the_field('executive_position',$postid); ?></strong></h3>
                    </div>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="privacy">
    <div class="container">
        <div class="row investor-deck">
            <h1 class="privacy-title"><?php the_field('investor_deck_title'); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</section>

<section id="brand-case-study">
    <div class="container investor-brand-list">
        <div class="row">
            <h1 class="investor-brand-title"><?php the_field('brand_client_title', 9); ?></h1>
            <?php
            //Enter the homepage custom field for category relationship
            $posts = get_field('client_logos', 9);
            if( $posts ): ?>
                <?php
                foreach( $posts as $post):?>
                    <?php setup_postdata($post);
                    $postid = get_the_id();?>
                    <div class="col-md-3 col-sm-6 col-xs-6 card">
                        <img style="" src="<?php the_field('client_logo_white',$postid); ?>">
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
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

    $( "#about-executives .col-sm-4:nth-child(5)" ).addClass("col-sm-offset-2" );
</script>