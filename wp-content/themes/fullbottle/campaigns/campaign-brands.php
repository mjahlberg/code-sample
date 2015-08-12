<?php
/**
 * Single Studies Template
 */
?>
<?php get_header(); ?>


<section id="campaign-header" style="background-image: url('<?php the_field('bg_image'); ?>'); height: 600px;">
    <div class="container">
        <div class="row">
            <div>
                <h1 style="margin-top: 150px;"><?php the_field('header_title'); ?></h1>
            </div>
            <div class="campaign-logo">
                <?php

                $post_object = get_field('brand');

                if( $post_object ):

                    // override $post
                    $post = $post_object;
                    setup_postdata( $post );

                    ?>

                    <img src="<?php the_field('client_logo_white'); ?>" />

                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>

            </div>
            <div class="campaign-date">
                <h3>Submission Deadline: <span><?php the_field('sub_deadline'); ?></span> &nbsp;&nbsp;&nbsp;&nbsp; Campaign Start: <span><?php the_field('campaign_start'); ?></span></h3>
            </div>
            <div class="campaign-theme">
                <h2>THEME: &nbsp;<span><?php the_field('theme'); ?></span></h2>
            </div>
            <div class="campaign-tone">
                <h4>Tone: &nbsp;<span><?php the_field('tone'); ?></span></h4>
            </div>
        </div>
    </div>
</section>

<section id="campaign-audience" style="background-color: rgb(28, 28, 28);">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/who_icon.png" />
                <h1>WHO</h1>
                <p><?php the_field('who'); ?></p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/what_icon.png" />
                <h1>WHAT</h1>
                <p><?php the_field('what'); ?></p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/why_icon.png" />
                <h1>WHY</h1>
                <p><?php the_field('why'); ?></p>
            </div>
        </div>
    </div>
</section>

<section id="campaign-content" style="background-color: rgb(35, 33, 34);">
    <div class="container">
        <?php the_content(); ?>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/cbpAnimatedHeader.js"></script>
