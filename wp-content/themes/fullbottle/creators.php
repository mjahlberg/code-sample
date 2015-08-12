<?php
/**
 * @package WordPress
 * @subpackage InstantWP
 * @file blog.php
 * Template Name: Creators
 */
?>

<?php get_header(); ?>
<section id="creator-header" style="background-image: url('<?php echo get_template_directory_uri();?>/images/creators_top_bg.jpg');">
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="creator-header-wheel" style="  background-image: url('<?php echo get_template_directory_uri();?>/images/creators_circle.png');">
                <h1><?php the_field('top_header'); ?></h1>
                <a href="/creator-signup/"><button><?php the_field('top_header_button'); ?></button></a>
            </div>
            <img style="max-width: 600px; width: 100%;" src="<?php echo get_template_directory_uri();?>/images/creators_social_net.png" />
        </div>
    </div>
</section>

<section id="creator-steps">
    <div class="container">
        <div class="row">
            <h1><?php the_field('creator_steps_header'); ?></h1>
            <div class="col-md-3" style="padding-left: 100px;">
                <img src="<?php echo get_template_directory_uri();?>/images/home_creator_icon3.jpg">
                <h1><?php the_field('creator_step_one_title'); ?></h1>
                <p><?php the_field('creator_step_one_content'); ?></p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri();?>/images/creator-phone.jpg" style="width: 88%; height: auto;"/>
            </div>
            <div class="col-md-3" style="padding-right: 100px;">
                <img src="<?php echo get_template_directory_uri();?>/images/home_creator_icon2.jpg">
                <h1><?php the_field('creator_step_three_title'); ?></h1>
                <p><?php the_field('creator_step_three_content'); ?></p>
            </div>
        </div>
    </div>
</section>

<section id="creator-quotes" style="background-image: url('<?php echo get_template_directory_uri();?>/images/testimonial_bg.jpg');">
    <div class="container">
        <div class="row">
            <h1><?php the_field('creator_comments_title'); ?></h1>
            <?php
            $posts = get_field('creator_comments');
            if( $posts ): ?>
                <?php $i = -1 ?>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php $i++ ?>
                    <?php setup_postdata($post);
                    $postid = get_the_id();?>
                    <div class="col-md-4">
                        <img src="<?php the_field('profile_pic',$postid); ?>" />
                        <p><?php the_field('comment',$postid); ?></p>
                        <h3> <?php the_title(); ?>  -  <?php the_field('follower_ct',$postid); ?> Followers</h3>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="creator-performance">
    <div class="container">
        <div class="row">
            <h1><?php the_field('creator_mockup_title'); ?></h1>
            <div class="col-md-3">

            </div>
            <div class="col-md-6 performers" style="background: url('<?php echo get_template_directory_uri();?>/images/mockup-3.jpg'); background-size: contain; background-repeat: no-repeat; background-position: center;">

            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
</section>

<section id="creator-discover" style="background: url('<?php echo get_template_directory_uri();?>/images/cta_blue_bg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 400px;">
    <div class="container vert_center" >
        <div class="row" style="text-align: center;">
            <div>
                <h1><?php the_field('creator_discover_title'); ?></h1>
            </div>
            <div class="col-md-12 col-sm-12">
                <a href="/creator-signup" class="btn btn-primary btn-solid discover-btn1"><?php the_field('creator_discover_button'); ?></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/cbpAnimatedHeader.js"></script>