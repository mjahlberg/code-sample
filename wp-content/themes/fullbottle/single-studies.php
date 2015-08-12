<?php
/**
 * Single Studies Template
 */
?>
<?php get_header(); ?>


<section id="case-study-header" style="background-image: url('<?php the_field('case_study_bg',$postid); ?>')">
    <div class="container">
        <div class="row">
            <img style="  max-width: 180px;" src="<?php the_field('white_large_logo',$postid); ?>" />
            <h1>Case Study</h1>
            <?php
            $values = get_field('campaign_networks');
            if(in_array("vine", $values)){
                ?>
                <img src="<?php echo get_template_directory_uri();?>/images/vine.png" style="width: 50px;" />
            <?
            } else{}
            if(in_array("snapchat", $values)){
            ?>
                <img src="<?php echo get_template_directory_uri();?>/images/snapchat.png" style="width: 50px;"/>
            <?
            } else{}
            if(in_array("instagram", $values)){
            ?>
                <img src="<?php echo get_template_directory_uri();?>/images/ig.png" style="width: 50px;"/>
            <?
            } else{}
            ?>
        </div>
        <div class="row case-study-stats" style="background-color: rgba(7, 188, 212, 0.85);">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="border-1"></div>
                    <h2><?php the_field('views',$postid); ?></h2>
                    <h4>VIDEO VIEWS</h4>
                    <div class="case-study-icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/1.png" />
                    </div>
            </div>
            <div class="case-stats-divide">

            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h2><?php the_field('engagements',$postid); ?></h2>
                <h4>ENGAGEMENTS</h4>
                <div class="case-study-icon">
                    <img src="<?php echo get_template_directory_uri();?>/images/2.png" />
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="border-2"></div>
                <h2><?php the_field('followers',$postid); ?></h2>
                <h4>FOLLOWER INCREASE</h4>
                <div class="case-study-icon">
                    <img src="<?php echo get_template_directory_uri();?>/images/3.png" />
                </div>
            </div>
        </div>
    </div>
</section>

<section id="case-study-goals">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-6 goals-ios-device" >
                <div class="ios-device">
                    <div class="ios-device__screen">
                        <video autoplay="autoplay" controls= "false" height="570" loop="loop" poster="<?php the_field('video_still',$postid); ?>" width="327">
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
            <div class="col-md-6 col-md-pull-6 list">
                <h2>The Goals</h2>
                <div class="row case-goals-list">
                    <div class="col-md-2 col-sm-12 col-xs-12 icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/4.png" />
                    </div>
                    <div class="col-md-10 col-sm-12 col-xs-12 list-item">
                        <p><?php the_field('goal_1',$postid); ?></p>
                    </div>
                </div>
                <div class="row case-goals-list">
                    <div class="col-md-2 col-sm-12 col-xs-12 icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/5.png" />
                    </div>
                    <div class="col-md-10 col-sm-12 col-xs-12 list-item">
                        <p><?php the_field('goal_2',$postid); ?></p>
                    </div>
                </div>
                <div class="row case-goals-list">
                    <div class="col-md-2 col-sm-12 col-xs-12 icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/6.png" />
                    </div>
                    <div class="col-md-10 col-sm-12 col-xs-12 list-item">
                        <p><?php the_field('goal_3',$postid); ?></p>
                    </div>
                </div>
                <div class="row case-goals-list">
                    <div class="col-md-2 col-sm-12 col-xs-12 icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/7.png" />
                    </div>
                    <div class="col-md-10 col-sm-12 col-xs-12 list-item">
                        <p><?php the_field('goal_4',$postid); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="case-study-hashtag" style="background-image: url('<?php the_field('case_study_bg_2',$postid); ?>');  background-size: cover;background-position: center;">
    <div class="container">
        <div class="row">
            <h1><?php the_field('campaign_hashtags',$postid); ?></h1>
        </div>
    </div>
</section>

<section id="case-study-strategies">
    <div class="container">
        <div class="row">
            <div class="col-md-6 strategies-ios-device">
                <div class="ios-device">
                    <div class="ios-device__screen" style="background-image: url('<?php the_field('screenshot',$postid); ?>'); background-size: cover; background-position: center;">
                    </div>
                    <div class="ios-device__volumes"></div>
                    <div class="ios-device__button"></div>
                    <div class="ios-device__camera"></div>
                </div>
            </div>
            <div class="col-md-6 list">
                <h2>The Strategy</h2>
                <div class="row case-strategies-list">
                    <div class="col-md-2 col-sm-12 col-xs-12 icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/8.png" />
                    </div>
                    <div class="col-md-10 col-sm-12 col-xs-12 list-item">
                        <p><?php the_field('strategy_1',$postid); ?></p>
                    </div>
                </div>
                <div class="row case-strategies-list">
                    <div class="col-md-2 col-sm-12 col-xs-12 icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/8.png" />
                    </div>
                    <div class="col-md-10 col-sm-12 col-xs-12 list-item">
                        <p><?php the_field('strategy_2',$postid); ?></p>
                    </div>
                </div>
                <div class="row case-strategies-list">
                    <div class="col-md-2 col-sm-12 col-xs-12 icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/8.png" />
                    </div>
                    <div class="col-md-10 col-sm-12 col-xs-12 list-item">
                        <p><?php the_field('strategy_3',$postid); ?></p>
                    </div>
                </div>
                <div class="row case-strategies-list">
                    <div class="col-md-2 col-sm-12 col-xs-12 icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/8.png" />
                    </div>
                    <div class="col-md-10 col-sm-12 col-xs-12 list-item">
                        <p><?php the_field('strategy_4',$postid); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="brand-discover" style="background: url('<?php echo get_template_directory_uri();?>/images/cta_blue_bg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; width: 100%;">
    <div class="container">
        <div class="row" style="text-align: center;">
            <div>
                <h1>start your campaign</h1>
            </div>
            <form class="cd-form floating-labels" id="WebToLeadForm" action="http://irm.fullbottlegroup.com/index.php?entryPoint=WebToLeadCapture" method="POST" name="WebToLeadForm" novalidate="novalidate">
                <fieldset style="border: none;">
                    <!--                    <legend>Request your campaign</legend>-->
                    <div class="icon icon50 ss-item-required">
                        <label class="cd-label" for="first_name">First Name</label>
                        <input class="user" type="text" name="first_name" id="first_name" required="">
                    </div>
                    <div class="icon icon50 ss-item-required">
                        <label class="cd-label" for="last_name">Last Name</label>
                        <input class="user" type="text" name="last_name" id="last_name" required="">
                    </div>
                    <div class="icon">
                        <label class="cd-label" for="company">Company</label>
                        <input class="company" type="text" name="company" id="company" required="">
                    </div>
                    <div class="icon">
                        <label class="cd-label" for="email1">Work Email</label>
                        <input class="email" type="email" name="email1" id="email1" required="">
                    </div>
                    <div class="icon">
                        <label class="cd-label" for="phone_primary_c">Phone</label>
                        <input id="phone" class="phone numbersOnly" type="text" name="phone_primary_c" required="">
                    </div>
                    <div class="icon">
                        <label class="cd-label" for="about_influencer_c">About your campaign</label>
                        <textarea class="message" name="about_influencer_c" id="about_influencer_c" style="resize: none;"></textarea>
                    </div>

                    <div>
                        <input class="submit-form-btn" type="submit" value="get started" "="">
                        <input id="campaign_id" type="hidden" name="campaign_id" value="20e95a65-c85e-68b3-0494-5463afbf50d4">
                        <input id="redirect_url" type="hidden" name="redirect_url" value="/thanks">
                        <input id="assigned_user_id" type="hidden" name="assigned_user_id" value="1">
                        <input id="req_id" type="hidden" name="req_id" value="last_name;">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</section>
<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/cbpAnimatedHeader.js"></script>
