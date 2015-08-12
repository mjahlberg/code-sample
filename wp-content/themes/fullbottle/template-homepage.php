<?php
/**
 * @package WordPress
 * @subpackage StanleyWP
 * Template Name: Homepage
 */
?>
<?php get_header(); ?>
<section id="home" class="bg-image bigvideo" style="  background: rgba(28, 50, 58, 0.6); position: relative; overflow: hidden;">
	<div class="bg-img" style="  width: 100%;z-index: -2;height: 100%;position: absolute;background-image: url('<?php echo get_template_directory_uri();?>/images/home_bg.jpg');"></div>
    <div class="container vert_center" >
		<div class="row">
           <div class="rw">
                <div class="rw-wrapper">
                    <h1 class="rw-sentence">
                        <span>How Brands Create</span><br/>
                        <span>Trending</span>
                        <div class="rw-words rw-words-1">
                            <span><img src="<?php echo get_template_directory_uri();?>/images/snapchat_logo.svg" /></span>
                            <span><img src="<?php echo get_template_directory_uri();?>/images/instagram.svg" /></span>
                            <span><img src="<?php echo get_template_directory_uri();?>/images/vine.svg" /></span>
                        </div>
                        <span >Videos</span>
                    </h1>
                </div>
            <div>
				<a href="/brands" class="btn btn-primary btn-solid btn-one"><?php the_field('homepage_header_brand_button'); ?></a>
				<a href="/creators" class="btn btn-primary btn-solid btn-two"><?php the_field('homepage_header_creator_button'); ?></a>
			</div>
           </div>
		</div>
	</div>
</section>

<section id="client-carousel" style="height: 500px; margin-top: 70px;">
	<div id="clients-slider" class="carousel slide carousel-fade clients-slider" data-ride="clients-slider">

        <ol class="carousel-indicators indicators-mobile" style="background-color: rgb(59, 188, 210); height: 130px; ">
            <?php
            $posts = get_field('featured_case_study_slider');
            if( $posts ): ?>
                <?php $i = -1 ?>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php $i++ ?>
                    <?php setup_postdata($post);
                    $postid = get_the_id();?>
                    <li data-target="#clients-slider" data-slide-to="<?php echo $i; ?>" class="ind" style="background-image: url('<?php the_field('small_logo',$postid); ?>');"></li>
                <?php endforeach; ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        </ol>

		<div class="carousel-inner">
            <?php
            $posts = get_field('featured_case_study_slider');
            if( $posts ): ?>
                    <?php
                        foreach( $posts as $post): // variable must be called $post (IMPORTANT)?>
                        <?php setup_postdata($post);
                            $postid = get_the_id();?>
                        <div class="item">
                            <div class="col-md-6">
                                <div class="ios-device">
                                    <div class="ios-device__screen">
                                        <video autoplay="autoplay" class=" heroPhoneVideo mobile-remove" height="570" loop="loop" poster="<?php the_field('video_still',$postid); ?>"  width="327">
                                            <source src="<?php the_field('video_source',$postid); ?>">
                                            <source src="<?php the_field('video_source_webm',$postid); ?>">
                                            <source src="<?php the_field('video_source_ogv',$postid); ?>">
                                        </video>
                                    </div>
                                    <div class="ios-device__volumes"></div>
                                    <div class="ios-device__button"></div>
                                    <div class="ios-device__camera"></div>
                                </div>
                            </div>
                            <div class="col-md-6 client-info">
                                <img src="<?php the_field('large_logo',$postid); ?>" />
                                <h3><?php the_field('campaign_hashtags',$postid); ?></h3>
                                <div class="col-md-12 followers">
                                    <ol>
                                        <ul style="text-align: center;">
                                            <?php the_field('views', $postid); ?> VIEWS  ・  <?php the_field('engagements',$postid); ?> ENGAGEMENTS
                                        </ul>
                                    </ol>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-solid case-study-btn">View Case Study</a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>

		</div>
		<ol class="carousel-indicators indicators-desktop" style="background-color: rgb(59, 188, 210); height: 130px;">
            <?php
            $posts = get_field('featured_case_study_slider');
            if( $posts ): ?>
                <?php $i = -1 ?>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php $i++ ?>
                    <?php setup_postdata($post);
                    $postid = get_the_id();?>
                    <li data-target="#clients-slider" data-slide-to="<?php echo $i; ?>" class="ind" style="background-image: url('<?php the_field('small_logo',$postid); ?>');"></li>
                <?php endforeach; ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
		</ol>
	</div>
    <script>
        var viewportWidth = jQuery(window).width();

        if (viewportWidth > 990) {
            jQuery('.indicators-mobile').remove();
        } else {

        }

        if (viewportWidth < 990) {
            jQuery('.indicators-desktop').remove();
        } else {

        }

    </script>
</section>

<section id="info" style="  background: white;max-width: 100%;">
	<div class="container" style="margin-bottom: 60px;">
		<div class="row">
			<h1 style="color: black;"><?php the_field('value_prop_section_title'); ?></h1>
            <label>
                <input id="brands-creators-toggle" class="Toggle-trigger" type="checkbox" checked />
                <span class="Toggle-ui" data-on="BRANDS" data-off="CREATORS"></span>
            </label>
        </div>

        <div id="info-brands">
            <div class="col-md-4" id="info-brands">
                <img src="<?php echo get_template_directory_uri();?>/images/home_brand_icon1.jpg">
                <h2><?php the_field('brand_value_prop_one_title'); ?></h2>
                <p><?php the_field('brand_value_prop_one_content'); ?></p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/home_brand_icon2.jpg">
                <h2><?php the_field('brand_value_prop_two_title'); ?></h2>
                <p><?php the_field('brand_value_prop_two_content'); ?></p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/home_brand_icon3.jpg">
                <h2><?php the_field('brand_value_prop_three_title'); ?></h2>
                <p><?php the_field('brand_value_prop_three_content'); ?></p>
            </div>
        </div>

        <div id="info-creators" style="display: none;">
            <div class="col-md-4" id="info-creators">
                <img src="<?php echo get_template_directory_uri();?>/images/home_creator_icon1.jpg">
                <h2><?php the_field('creator_value_prop_one_title'); ?></h2>
                <p><?php the_field('creator_value_prop_one_content'); ?></p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/home_creator_icon2.jpg">
                <h2><?php the_field('creator_value_prop_two_title'); ?></h2>
                <p><?php the_field('creator_value_prop_two_content'); ?></p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/home_creator_icon3.jpg">
                <h2><?php the_field('creator_value_prop_three_title'); ?></h2>
                <p><?php the_field('creator_value_prop_three_content'); ?></p>
            </div>
        </div>

	</div>
    <img style="  width: 100%;position: absolute;display: block;" src="<?php echo get_template_directory_uri();?>/images/tri-white-bot.png"/>
</section>

<section id="bigvideo" style="height: 650px; background: url('<?php echo get_template_directory_uri();?>/images/flippy.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; text-align: center;">
    <div class="number-scroller">
    </div>
    <div class="scroll-text"><?php the_field('engagements_counter_content'); ?></div>
</section>

<section id="spotlight" style="margin-top: -120px">
    <img style="width: 100%" src="<?php echo get_template_directory_uri();?>/images/tri-white-top.png"/>
	<div id="carousel-example" class="carousel slide" data-ride="carousel">
		<div class="carousel-wrapper">
			<h3><?php the_field('creator_spotlight_title'); ?></h3>
			<h5 class="spotlight_subtitle"><?php the_field('creator_spotlight_subtitle'); ?></h5>
            <h5 class="spotlight_subtitle_mobile"><?php the_field('creator_spotlight_subtitle_mobile'); ?></h5>
			<ol class="carousel-indicators">
				<span data-target="#carousel-example" data-slide-to="0" class="active">Comedy</span>
				<span data-target="#carousel-example" data-slide-to="1" class="creators-card-hide">Fashion</span>
				<span data-target="#carousel-example" data-slide-to="2" class="creators-card-hide">Games</span>
				<span data-target="#carousel-example" data-slide-to="3" class="creators-card-hide">Family/Travel</span>
				<span data-target="#carousel-example" data-slide-to="4" class="creators-card-hide">Cars/Tech</span>
				<span data-target="#carousel-example" data-slide-to="5" class="creators-card-hide">Music</span>
			</ol>
		</div>
		<div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="row">
                    <?php
                    //Enter the homepage custom field for category relationship
                    $posts = get_field('creators_comedy');
                    if( $posts ): ?>
                        <?php
                        foreach( $posts as $post):?>
                            <?php setup_postdata($post);
                            $postid = get_the_id();?>
                            <div class="col-md-4 card-cont">
                                <div class="card">
                                    <div class="card-client-pic" style="background: url('<?php the_field('profile_pic',$postid); ?>'); background-position: top; background-repeat: no-repeat; background-size: cover;"></div>
                                    <h3><?php the_title(); ?></h3>
                                    <img src="<?php the_field('profile_pic',$postid); ?>"/>
                                    <h2><?php the_field('follower_ct',$postid); ?></h2>
                                    <h4>Followers</h4>
                                    <div class="card-hover">
                                        <h1>Start a Campaign with <?php the_title(); ?>!</h1>
                                        <!-- we need a URL to CTA (with custom ?creator_id)-->
                                        <a href="/brand/?<?php the_title(); ?>#brand-discover-anchor"><button>Get Started</button></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>
				</div>
			</div>
            <!--Nest the Category Query inside each item-->

			<div class="item creators-card-hide">
                <div class="row">
                    <?php
                    $posts = get_field('creators_fashion');
                    if( $posts ): ?>
                        <?php
                        foreach( $posts as $post):?>
                            <?php setup_postdata($post);
                            $postid = get_the_id();?>
                            <div class="col-md-4 card-cont">
                                <div class="card">
                                    <div class="card-client-pic" style="background: url('<?php the_field('profile_pic',$postid); ?>'); background-position: top; background-repeat: no-repeat; background-size: cover;"></div>
                                    <h3><?php the_title(); ?></h3>
                                    <img src="<?php the_field('profile_pic',$postid); ?>"/>
                                    <h2><?php the_field('follower_ct',$postid); ?></h2>
                                    <h4>Followers</h4>
                                    <div class="card-hover">
                                        <h1>Start a Campaign with <?php the_title(); ?>!</h1>
                                        <a href="/brand/?<?php the_title(); ?>#brand-discover-anchor"><button>Get Started</button></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata();?>
                    <?php endif; ?>
                </div>
			</div>

            <div class="item creators-card-hide">
                <div class="row">
                    <?php
                    $posts = get_field('creators_games');
                    if( $posts ): ?>
                        <?php
                        foreach( $posts as $post):?>
                            <?php setup_postdata($post);
                            $postid = get_the_id();?>
                            <div class="col-md-4 card-cont">
                                <div class="card">
                                    <div class="card-client-pic" style="background: url('<?php the_field('profile_pic',$postid); ?>'); background-position: top; background-repeat: no-repeat; background-size: cover;"></div>
                                    <h3><?php the_title(); ?></h3>
                                    <img src="<?php the_field('profile_pic',$postid); ?>"/>
                                    <h2><?php the_field('follower_ct',$postid); ?></h2>
                                    <h4>Followers</h4>
                                    <div class="card-hover">
                                        <h1>Start a Campaign with <?php the_title(); ?>!</h1>
                                        <a href="/brand/?<?php the_title(); ?>#brand-discover-anchor"><button>Get Started</button></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
			</div>

			<div class="item creators-card-hide">
				<div class="row">
                    <?php
                    $posts = get_field('creators_family');
                    if( $posts ): ?>
                        <?php
                        foreach( $posts as $post):?>
                            <?php setup_postdata($post);
                            $postid = get_the_id();?>
                            <div class="col-md-4 card-cont">
                                <div class="card">
                                    <div class="card-client-pic" style="background: url('<?php the_field('profile_pic',$postid); ?>'); background-position: top; background-repeat: no-repeat; background-size: cover;"></div>
                                    <h3><?php the_title(); ?></h3>
                                    <img src="<?php the_field('profile_pic',$postid); ?>"/>
                                    <h2><?php the_field('follower_ct',$postid); ?></h2>
                                    <h4>Followers</h4>
                                    <div class="card-hover">
                                        <h1>Start a Campaign with <?php the_title(); ?>!</h1>
                                        <a href="/brand/?<?php the_title(); ?>#brand-discover-anchor"><button>Get Started</button></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
				</div>
			</div>

			<div class="item creators-card-hide">
				<div class="row">
                    <?php
                    $posts = get_field('creators_cars');
                    if( $posts ): ?>
                        <?php
                        foreach( $posts as $post):?>
                            <?php setup_postdata($post);
                            $postid = get_the_id();?>
                            <div class="col-md-4 card-cont">
                                <div class="card">
                                    <div class="card-client-pic" style="background: url('<?php the_field('profile_pic',$postid); ?>'); background-position: top; background-repeat: no-repeat; background-size: cover;"></div>
                                    <h3><?php the_title(); ?></h3>
                                    <img src="<?php the_field('profile_pic',$postid); ?>"/>
                                    <h2><?php the_field('follower_ct',$postid); ?></h2>
                                    <h4>Followers</h4>
                                    <div class="card-hover">
                                        <h1>Start a Campaign with <?php the_title(); ?>!</h1>
                                        <a href="/brand/?<?php the_title(); ?>#brand-discover-anchor"><button>Get Started</button></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
				</div>
			</div>

			<div class="item creators-card-hide">
				<div class="row">
                    <?php
                    $posts = get_field('creators_music');
                    if( $posts ): ?>
                        <?php
                        foreach( $posts as $post):?>
                            <?php setup_postdata($post);
                            $postid = get_the_id();?>
                            <div class="col-md-4 card-cont">
                                <div class="card">
                                    <div class="card-client-pic" style="background: url('<?php the_field('profile_pic',$postid); ?>'); background-position: top; background-repeat: no-repeat; background-size: cover;"></div>
                                    <h3><?php the_title(); ?></h3>
                                    <img src="<?php the_field('profile_pic',$postid); ?>"/>
                                    <h2><?php the_field('follower_ct',$postid); ?></h2>
                                    <h4>Followers</h4>
                                    <div class="card-hover">
                                        <h1>Start a Campaign with <?php the_title(); ?>!</h1>
                                        <a href="/brand/?<?php the_title(); ?>#brand-discover-anchor"><button>Get Started</button></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata();?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

<!--        mobile responsive creator spotlight-->

            <div class="item creators-mobile-card">
                <div class="container">
                    <div class="row">
                        <?php
                        $posts = get_field('creators_music');
                        if( $posts ): ?>
                            <?php
                            foreach( $posts as $post):?>
                                <?php setup_postdata($post);
                                $postid = get_the_id();?>
                                <div class="col-md-4 col-sm-4 col-xs-6" style="padding: 0;">
                                    <div class="card">
                                        <img src="<?php the_field('profile_pic',$postid); ?>" style="width: 100%;"/>
                                        <h2><?php the_title(); ?></h2>
                                        <h3><?php the_field('follower_ct',$postid); ?> Followers</h3>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata();?>
                        <?php endif; ?>

                        <?php
                        $posts = get_field('creators_comedy');
                        if( $posts ): ?>
                            <?php
                            foreach( $posts as $post):?>
                                <?php setup_postdata($post);
                                $postid = get_the_id();?>
                                <div class="col-md-4 col-sm-4 col-xs-6" style="padding: 0;">
                                    <div class="card">
                                        <img src="<?php the_field('profile_pic',$postid); ?>" style="width: 100%;"/>
                                        <h2><?php the_title(); ?></h2>
                                        <h3><?php the_field('follower_ct',$postid); ?> Followers</h3>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata();?>
                        <?php endif; ?>

                        <?php
                        $posts = get_field('creators_family');
                        if( $posts ): ?>
                            <?php
                            foreach( $posts as $post):?>
                                <?php setup_postdata($post);
                                $postid = get_the_id();?>
                                <div class="col-md-4 col-sm-4 col-xs-6" style="padding: 0;">
                                    <div class="card">
                                        <img src="<?php the_field('profile_pic',$postid); ?>" style="width: 100%;"/>
                                        <h2><?php the_title(); ?></h2>
                                        <h3><?php the_field('follower_ct',$postid); ?> Followers</h3>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata();?>
                        <?php endif; ?>

                        <?php
                        $posts = get_field('creators_cars');
                        if( $posts ): ?>
                            <?php
                            foreach( $posts as $post):?>
                                <?php setup_postdata($post);
                                $postid = get_the_id();?>
                                <div class="col-md-4 col-sm-4 col-xs-6" style="padding: 0;">
                                    <div class="card">
                                        <img src="<?php the_field('profile_pic',$postid); ?>" style="width: 100%;"/>
                                        <h2><?php the_title(); ?></h2>
                                        <h3><?php the_field('follower_ct',$postid); ?> Followers</h3>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata();?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
		</div>
</section>

<section id="discover" style="background-image: url('<?php echo get_template_directory_uri();?>/images/cta_blue_bg.jpg');background-position: center; height: 500px;">
	<div class="container vert_center">
		<div class="row" style="text-align: center;">
			<div>
				<h1><?php the_field('discover_fullbottle_title'); ?></h1>
			</div>
			<div class="col-md-6 col-sm-6">
				<a href="/brands" class="btn btn-primary btn-solid discover-btn1"><?php the_field('discover_fullbottle_brand_button'); ?></a>
			</div>
			<div class="col-md-6 col-sm-6">
				<a  style="  background-color: rgb(8, 188, 213);" href="/creators" class="btn btn-primary btn-solid discover-btn2"><?php the_field('discover_fullbottle_creator_button'); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/cbpAnimatedHeader.js"></script>

<!-- BigVideo -->
<script src="<?php echo get_template_directory_uri();?>/js/video.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/bigvideo.js"></script>

<script type="text/javascript">
//Logic for brands/creators toggle checkbox
    $('input[type="checkbox"]').click(function(){
        if($(this).prop("checked") == true){
            //do something for brands (toggle class)
//            alert("switched for brands.");
            $("#info-brands").show();
            $("#info-creators").hide();
        }
        else if($(this).prop("checked") == false){
            //do something for creators (toggle class)
//            alert("switched for creators.");
            $("#info-creators").show();
            $("#info-brands").hide();
        }
    });


// bigvideo
	$(function() {
		var opts = {
			controls: false,
			doLoop: true,
			useFlashForFirefox:false
		}
		// Modernizr function
		if (Modernizr.touch) {
            $( "body" ).addClass( "backgroundimg" );
            $("#carousel-example").carousel('pause');
		} else {
			var BV = new $.BigVideo(opts);
			BV.init();
			BV.show([
				{ type: "video/mp4",  src: "<?php echo get_template_directory_uri();?>/videos/FullBottleCut_compress.mp4" },
				{ type: "video/webm", src: "<?php echo get_template_directory_uri();?>/videos/FullBottleCut_compress.webm" },
				{ type: "video/ogg",  src: "<?php echo get_template_directory_uri();?>/videos/FullBottleCut_compress.ogv" }
			]);
		}
	});
//add actives to the first slide
    $( ".ind:nth-child(1),.carousel-inner .item:nth-child(1)" ).addClass( "active" );




</script>