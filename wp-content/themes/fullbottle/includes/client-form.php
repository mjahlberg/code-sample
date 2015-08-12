<?php
?>

<div id="brand-discover-anchor"></div>

<section id="brand-discover" style="background: url('<?php echo get_template_directory_uri();?>/images/cta_blue_bg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; width: 100%;  overflow: hidden;">
    <div class="container">
        <div class="row" style="text-align: center;">
            <div>
                <h1><?php the_field('brand_form_title', 9); ?></h1>
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
                        <input id="campaign_id" type="hidden" name="campaign_id" value="88dbdbdc-23ea-9ff3-3dc8-545291a42cfc">
                        <input id="redirect_url" type="hidden" name="redirect_url" value="http://fullbottlegroup.com/thanks">
                        <input id="assigned_user_id" type="hidden" name="assigned_user_id" value="383e7fef-d30b-c88b-3782-546299336748">
                        <input id="req_id" type="hidden" name="req_id" value="last_name;">
                    </div>
                </fieldset>
            </form>

            <!--            <div class="col-md-12 col-sm-12 col-xs-12">-->
            <!--                <a href="#" class="btn btn-primary btn-solid discover-btn1">get started</a>-->
            <!--            </div>-->
        </div>
    </div>
</section>