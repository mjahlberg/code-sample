<?php
/**
 * @package WordPress
 * @subpackage InstantWP
 * @file blog.php
 * Template Name: Brands
 */
?>

<?php get_header(); ?>
<section id="brand-header" style="overflow:hidden; background-image: url('<?php echo get_template_directory_uri();?>/images/brands_top_bg.jpg'); background-position: bottom center;">
    <div class="container">
        <div class="row">
            <div class="brand-header-text">
                <h1><?php the_field('brand_header_title'); ?></h1>
                <a href="#brand-discover" class="btn btn-primary btn-solid brand-btn scroll"><?php the_field('brand_header_button'); ?></a>
            </div>
            <div class="col-md-12" style="max-height: 430px;">
                <div class="ios-device">
                    <div class="ios-device__screen">
                        <video autoplay="autoplay" controls= "false" height="570" loop="loop" poster="<?php the_field('video_still', 9); ?>" width="327">
                            <source src="<?php the_field('iphone_video_mp4',9); ?>">
                            <source src="<?php the_field('iphone_video_webm',9); ?>">
                            <source src="<?php the_field('iphone_video_ogv',9); ?>">
                        </video>
                    </div>
                    <div class="ios-device__volumes"></div>
                    <div class="ios-device__button"></div>
                    <div class="ios-device__camera"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="brand-info">
    <div class="container">
        <div class="row">
            <div class="brand-social-logos" style="text-align: center;">
                <img src="<?php echo get_template_directory_uri();?>/images/brands_social_net.png" style="  width: 100%; max-width: 600px; min-width: 200px;">
            </div>
            <div class="brand-social-steps">
                <h1><?php the_field('brand_step_title'); ?></h1>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <img src="<?php echo get_template_directory_uri();?>/images/brand_page_icon1.jpg">
                    <p><?php the_field('brand_step_one'); ?></p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <img src="<?php echo get_template_directory_uri();?>/images/brand_page_icon2.jpg">
                    <p><?php the_field('brand_step_two'); ?></p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <img src="<?php echo get_template_directory_uri();?>/images/brand_page_icon3.jpg">
                    <p><?php the_field('brand_step_three'); ?></p>
                </div>
            </div>
            <div class="col-md-12">
                <a href="#brand-campaign-design" class="btn btn-primary btn-solid brand-btn scroll"><?php the_field('brand_step_button'); ?></a>
            </div>
        </div>
    </div>
</section>

<section id="brand-case-study">
    <div class="container">
        <div class="row">
            <h1><?php the_field('brand_client_title'); ?></h1>
            <?php
            //Enter the homepage custom field for category relationship
            $posts = get_field('client_logos');
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

<section id="brand-campaign-design">
    <div class="container">
        <div class="row">
            <div class="col-md-6 design-text">
                <h1><?php the_field('brand_info_title_one'); ?></h1>
                <p><?php the_field('brand_info_content_one'); ?></p>
            </div>
            <div class="col-md-6 brand-campaign-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/mockup-1.png'); ">
            </div>
        </div>
    </div>
</section>

<section id="brand-campaign-design" class="brand-campaign-design-one">
    <div class="container">
        <div class="row">
            <div class="col-md-6 brand-campaign-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/mockup-2.png'); ">
            </div>
            <div class="col-md-6 design-text">
                <h1><?php the_field('brand_info_title_two'); ?></h1>
                <p><?php the_field('brand_info_content_two'); ?></p>
            </div>
        </div>
    </div>
</section>

<section id="brand-campaign-design" class="brand-campaign-design-two">
    <div class="container">
        <div class="row">
            <div class="col-md-6 design-text">
                <h1><?php the_field('brand_info_title_three'); ?></h1>
                <p><?php the_field('brand_info_content_three'); ?></p>
            </div>
            <div class="col-md-6 brand-campaign-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/mockup-2.png'); ">
            </div>
        </div>
    </div>
</section>

<section id="brand-performance">
    <div class="container">
        <div class="row">
            <h1><?php the_field('brand_info_title_three'); ?></h1>
            <p><?php the_field('brand_info_content_three'); ?></p>
            <div class="col-md-3">
            </div>
            <div class="col-md-6 brand-campaign-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/mockup-3.jpg'); background-size: contain; background-position: center; background-repeat: no-repeat; height: 400px;">
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
</section>

<?php  locate_template( array( 'includes/client-form.php' ), true, true ); ?>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/js/cbpAnimatedHeader.js"></script>

<script>
    var URL = location.href;
    var sp1 = URL.split('?');
    var sp2 = sp1[1].split('#')
    var CREATOR = sp2[0].replace(/_/g,' ');

    document.getElementById("about_influencer_c").value = "I'm interested in starting a campaign with " + CREATOR + ".";

</script>
