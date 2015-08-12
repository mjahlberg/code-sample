<?php
/**
 * @package WordPress
 * @subpackage InstantWP
 * Template Name: About-Us
 */
?>

<?php get_header(); ?>

<section id="about-header" style="background-image: url('<?php echo get_template_directory_uri();?>/images/creators_top_bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="about-header-info">
                <h1><?php the_field('header_title'); ?></h1>
                <h3><?php the_field('header_subtitle'); ?></h3>
                <img src="<?php echo get_template_directory_uri();?>/images/snapchat-qr.png" />
            </div>
        </div>
    </div>
</section>

<section id="about-company-story">
    <div class="container">
        <div class="row">
            <div class="col-md-6 about-company">
                <?php the_field('about_us',$postid); ?>
            </div>
            <div class="col-md-6 about-company-image" style=" background-image: url('<?php echo get_template_directory_uri();?>/images/about-half-circle.jpg'); background-size: contain; background-position: right; height: 700px; background-repeat: no-repeat; ">

            </div>
        </div>
    </div>
</section>

<section id="about-executives">
    <div class="container">
        <div class="row">
            <h1> <?php the_title(); ?></h1>
            <?php
            $posts = get_field('executive_list');
            if( $posts ): ?>
                <?php $i = -1 ?>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php $i++ ?>
                    <?php setup_postdata($post);
                    $postid = get_the_id();?>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="half a" style="background-image: url('<?php the_field('employee_picture',$postid); ?>');">
                            <a href="<?php the_field('linkedin_profile',$postid); ?>" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/linkedin-logo-white.png" /></a>
                        </div>
                        <h3><?php the_title(); ?> | <strong><?php the_field('employee_position',$postid); ?></strong></h3>
                    </div>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="about-employee-list">
    <div class="container">
        <div class="row">
            <h1><?php the_field('employee_title'); ?></h1>
            <?php
            $posts = get_field('employee_list');
            if( $posts ): ?>
                <?php $i = -1 ?>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php $i++ ?>
                    <?php setup_postdata($post);
                    $postid = get_the_id();?>

                    <div class="col-md-3 col-sm-4 col-xs-12" style="text-align: center;">
                        <div class="half a" style="background-image: url('<?php the_field('employee_picture',$postid); ?>'); ">
                            <a href="<?php the_field('linkedin_profile',$postid); ?>" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/linkedin-logo-white.png" /></a>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_field('employee_position',$postid); ?></p>
                    </div>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="about-partners">
    <div class="container">
        <div class="row">
            <h1><?php the_field('partner_title'); ?></h1>
            <?php
            $posts = get_field('partner_list');
            if( $posts ): ?>
                <?php $i = -1 ?>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php $i++ ?>
                    <?php setup_postdata($post);
                    $postid = get_the_id();?>


                    <div class="col-md-4 col-sm-4 col-xs-12" style="height: 140px;">
                        <img src="<?php the_field('partner_logo',$postid); ?>" style="width: 100%; max-width: 180px;"/>
                    </div>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="careers">
    <div class="container">
        <div class="row">
            <h1><?php the_field('career_title'); ?></h1>
            <script id="rbox-loader-script" type="text/javascript">// <![CDATA[
            _rbox = { host_protocol:document.location.protocol, ready:function(cb){this.onready=cb;} };
            (function(d, e) {
                var s, t, i, src=['/static/client-src-served/widget/14069/rbox_api.js', '/static/client-src-served/widget/14069/rbox_impl.js'];
                t = d.getElementsByTagName(e); t=t[t.length - 1];
                for(i=0; i<src.length; i++) {
                    s = d.createElement(e); s.src = _rbox.host_protocol + '//w.recruiterbox.com' + src[i];
                    t.parentNode.insertBefore(s, t.nextSibling);
                }})(document, 'script');
            // ]]></script>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
    $( "#about-executives .col-sm-4:nth-child(5)" ).addClass("col-sm-offset-2" );
    $( "#about-employee-list .col-md-3:nth-child(18)" ).addClass("col-sm-offset-3" );


</script>

<script src="<?php echo get_template_directory_uri();?>/js/cbpAnimatedHeader.js"></script>
