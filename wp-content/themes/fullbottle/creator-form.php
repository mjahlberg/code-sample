<?php
/**
 * @package WordPress
 * @subpackage InstantWP
 * Template Name: creator_form
 */
?>

<?php get_header(); ?>
<style>

    /* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section, main {
        display: block;
    }
    body {
        line-height: 1;
        padding-top: 80px;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        background-image: url('/wp-content/themes/fullbottle/images/creators_top_bg.jpg');
    }
    ol, ul {
        list-style: none;
    }
    blockquote, q {
        quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
        content: '';
        content: none;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

/* --------------------------------

Primary style

-------------------------------- */


    body form {
        font-size: 1.6rem;
        font-family: 'Titillium Web', sans-serif;
        color: #2b3e51;
        background-color: #fff;
    }
    /* --------------------------------

    Form

    -------------------------------- */
    .cd-form {
        width: 90%;
        max-width: 600px;
        margin: 4em auto;
        background: transparent;
    }
    .cd-form::after {
        clear: both;
        content: "";
        display: table;
    }
    .cd-form fieldset {
        background: white;
        border: none;
        border-radius: 2px;
        padding: 20px;

    }
    .cd-form legend {
        padding-bottom: 10px;
        margin-bottom: 20px;
        font-size: 2rem;
        border-bottom: 1px solid #ecf0f1;
        color: white;
    }
    .cd-form div {
        /* form element wrapper */
        position: relative;
        margin: 20px 0;
    }
    .cd-form h4, .cd-form .cd-label {
        font-size: 1.3rem;
        color: #94aab0;
        margin-bottom: 10px;
    }
    .cd-form .cd-label {
        display: block;
    }
    .cd-form input, .cd-form textarea, .cd-form select, .cd-form label {
        font-family: "Open Sans", sans-serif;
        font-size: 1.6rem;
        color: #2b3e51;
    }
    .cd-form input[type="text"],
    .cd-form input[type="email"],
    .cd-form input[type="submit"],
    .cd-form textarea,
    .cd-form select,
    .cd-form legend {
        display: block;
        width: 98%;
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;

    }
    .cd-form input[type="text"],
    .cd-form input[type="email"],
    .cd-form textarea,
    .cd-form select {
        /* general style for input elements */
        padding: 12px;
        border: 1px solid #cfd9db;
        background-color: #ffffff;
        border-radius: .25em;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.08);
    }
    .cd-form input[type="text"]:focus,
    .cd-form input[type="email"]:focus,
    .cd-form textarea:focus,
    .cd-form select:focus {
        outline: none;
        border-color: #2c97de;
        box-shadow: 0 0 5px rgba(44, 151, 222, 0.2);
    }
    .cd-form .cd-select {
        /* select element wapper */
        position: relative;
    }
    .cd-form .cd-select::after {
        /* arrow icon for select element */
        content: '';
        position: absolute;
        z-index: 1;
        right: 16px;
        top: 50%;
        margin-top: -8px;
        display: block;
        width: 16px;
        height: 16px;
        background: url("../img/cd-icon-arrow.svg") no-repeat center center;
        pointer-events: none;
    }
    .cd-form select {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
        cursor: pointer;
    }
    .cd-form select::-ms-expand {
        display: none;
    }
    .cd-form .cd-form-list {
        margin-top: 16px;
    }
    .cd-form .cd-form-list::after {
        clear: both;
        content: "";
        display: table;
    }
    .cd-form .cd-form-list li {
        /* wrapper for radio and checkbox input types */
        display: inline-block;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        margin: 0 26px 16px 0;
        float: left;
    }
    .cd-form input[type=radio],
    .cd-form input[type=checkbox] {
        /* hide original check and radio buttons */
        position: absolute;
        left: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        margin: 0;
        padding: 0;
        opacity: 0;
        z-index: 2;
    }
    .cd-form input[type="radio"] + label,
    .cd-form input[type="checkbox"] + label {
        padding-left: 24px;
    }
    .cd-form input[type="radio"] + label::before,
    .cd-form input[type="radio"] + label::after,
    .cd-form input[type="checkbox"] + label::before,
    .cd-form input[type="checkbox"] + label::after {
        /* custom radio and check boxes */
        content: '';
        display: block;
        position: absolute;
        left: 0;
        top: 50%;
        margin-top: -8px;
        width: 16px;
        height: 16px;
    }
    .cd-form input[type="radio"] + label::before,
    .cd-form input[type="checkbox"] + label::before {
        border: 1px solid #cfd9db;
        background: #ffffff;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.08);
    }
    .cd-form input[type="radio"] + label::before,
    .cd-form input[type="radio"] + label::after {
        border-radius: 50%;
    }
    .cd-form input[type="checkbox"] + label::before,
    .cd-form input[type="checkbox"] + label::after {
        border-radius: .25em;
    }
    .cd-form input[type="radio"] + label::after,
    .cd-form input[type="checkbox"] + label::after {
        background-color: #2c97de;
        background-position: center center;
        background-repeat: no-repeat;
        box-shadow: 0 0 5px rgba(44, 151, 222, 0.4);
        display: none;
    }
    .cd-form input[type="radio"] + label::after {
        /* custom image for radio button */
        background-image: url("../img/cd-icon-radio.svg");
    }
    .cd-form input[type="checkbox"] + label::after {
        /* custom image for checkbox */
        background-image: url("../img/cd-icon-check.svg");
    }
    .cd-form input[type="radio"]:focus + label::before,
    .cd-form input[type="checkbox"]:focus + label::before {
        /* add focus effect for radio and check buttons */
        box-shadow: 0 0 5px rgba(44, 151, 222, 0.6);
    }
    .cd-form input[type="radio"]:checked + label::after,
    .cd-form input[type="checkbox"]:checked + label::after {
        display: block;
    }
    .cd-form input[type="radio"]:checked + label::before,
    .cd-form input[type="radio"]:checked + label::after,
    .cd-form input[type="checkbox"]:checked + label::before,
    .cd-form input[type="checkbox"]:checked + label::after {
        -webkit-animation: cd-bounce 0.3s;
        -moz-animation: cd-bounce 0.3s;
        animation: cd-bounce 0.3s;
    }
    .cd-form textarea {
        min-height: 200px;
        resize: vertical;
        overflow: auto;
    }
    .cd-form input[type="submit"] {
        /* button style */
        border: none;
        background: #2c97de;
        border-radius: .25em;
        padding: 16px 20px;
        color: #ffffff;
        font-weight: bold;
        /* float: right; */
        cursor: pointer;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
    }
    .no-touch .cd-form input[type="submit"]:hover {
        background: #42a2e1;
    }
    .cd-form input[type="submit"]:focus {
        outline: none;
        background: #2b3e51;
    }
    .cd-form input[type="submit"]:active {
        -webkit-transform: scale(0.9);
        -moz-transform: scale(0.9);
        -ms-transform: scale(0.9);
        -o-transform: scale(0.9);
        transform: scale(0.9);
    }
    .cd-form [required] {
        background: url("../img/cd-required.svg") no-repeat top right;
    }
    .cd-form .error-message p {
        background: #e94b35;
        color: #ffffff;
        font-size: 1.4rem;
        text-align: center;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        border-radius: .25em;
        padding: 16px;
    }
    .cd-form .error {
        border-color: #e94b35 !important;
    }
    @media only screen and (min-width: 600px) {
        .cd-form div {
            /* form element wrapper */
            margin: 32px 0;
        }
        .cd-form legend + div {
            /* reduce margin-top for first form element after the legend */
            margin-top: 20px;
        }
        .cd-form h4, .cd-form .cd-label {
            font-size: 1.4rem;
            margin-bottom: 10px;
        }
        .cd-form input[type="text"],
        .cd-form input[type="email"],
        .cd-form textarea,
        .cd-form select {
            padding: 16px;
        }
    }

    @-webkit-keyframes cd-bounce {
        0%, 100% {
            -webkit-transform: scale(1);
        }
        50% {
            -webkit-transform: scale(0.8);
        }
    }
    @-moz-keyframes cd-bounce {
        0%, 100% {
            -moz-transform: scale(1);
        }
        50% {
            -moz-transform: scale(0.8);
        }
    }
    @keyframes cd-bounce {
        0%, 100% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }
        50% {
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -ms-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
        }
    }
    /* --------------------------------

    Custom icons

    -------------------------------- */
    .cd-form .icon input, .cd-form .icon select, .cd-form .icon textarea {
        padding-left: 54px;
    }


    .cd-form .iconSM {
        display: inline-block;
        height:25px;
        width:30%;
        margin-top:10px !important;
    }

    .js .floating-labels .iconSM .cd-label {
        left: 16px !important;
    }

    .cd-form .iconSM input {
        padding-left: 16px !important;
    }



    .cd-form .icon50 {
        display: inline-block;
        height:25px;
        width:49%
    }

    .cd-form .iconSM input[type="text"], .cd-form .icon50 input[type="text"] {
        display: inline;
    }

    .cd-form .vine {
        background: url("../img/_vine.png") no-repeat 16px center;
    }

    .cd-form .instagram {
        background: url("../img/_instagram.png") no-repeat 16px center;
    }

    .cd-form .twitter {
        background: url("../img/_twitter.png") no-repeat 16px center;
    }

    .cd-form .snapchat {
        background: url("../img/_snapchat.png") no-repeat 16px center;
    }

    .cd-form .facebook {
        background: url("../img/_facebook.png") no-repeat 16px center;
    }

    .cd-form .kik {
        background: url("../img/_kik.png") no-repeat 16px center;
    }

    .cd-form .youtube {
        background: url("../img/_youtube.png") no-repeat 16px center;
    }

    .cd-form .phone {
        background: url("../img/_phone.png") no-repeat 16px center;
    }

    .cd-form [required].phone {
        background: url("../img/_phone.png") no-repeat 16px center, url("../img/cd-required.svg") no-repeat top right;
    }
    .cd-form .date {
        background: url("../img/_dob.png") no-repeat 16px center;
    }

    .cd-form .referral {
        background: url("../img/_referral.png") no-repeat 16px center;
    }

    .cd-form .categories {
        background: url("../img/_categories.png") no-repeat 16px 16px;
    }

    .cd-form .range {
        background: url("../img/_range.png") no-repeat 16px 16px;
    }


    .cd-form .user {
        background: url("../img/cd-icon-user.svg") no-repeat 16px center;
    }
    .cd-form [required].user {
        background: url("../img/cd-icon-user.svg") no-repeat 16px center, url("../img/cd-required.svg") no-repeat top right;
    }
    .cd-form .company {
        background: url("../img/cd-icon-company.svg") no-repeat 16px center;
    }
    .cd-form [required].company {
        background: url("../img/cd-icon-company.svg") no-repeat 16px center, url("../img/cd-required.svg") no-repeat top right;
    }
    .cd-form .email {
        background: url("../img/cd-icon-email.svg") no-repeat 16px center;
    }
    .cd-form [required].email {
        background: url("../img/cd-icon-email.svg") no-repeat 16px center, url("../img/cd-required.svg") no-repeat top right;
    }
    .cd-form .budget {
        background: url("../img/cd-icon-budget.svg") no-repeat 16px center;
    }
    .cd-form .message {
        background: url("../img/cd-icon-message.svg") no-repeat 16px 16px;
    }
    .cd-form [required].message {
        background: url("../img/cd-icon-message.svg") no-repeat 16px 16px, url("../img/cd-required.svg") no-repeat top right;
    }

    /* --------------------------------

    FLoating labels

    -------------------------------- */
    .js .floating-labels div {
        margin: 28px 0;
    }
    .js .floating-labels .cd-label {
        position: absolute;
        top: 16px;
        left: 16px;
        font-size: 1.6rem;
        cursor: text;
        -webkit-transition: top 0.2s, left 0.2s, font-size 0.2s;
        -moz-transition: top 0.2s, left 0.2s, font-size 0.2s;
        transition: top 0.2s, left 0.2s, font-size 0.2s;
    }
    .js .floating-labels .icon .cd-label {
        left: 56px;
    }
    .js .floating-labels .cd-label.float {
        /* move label out the input field */
        font-size: 1.2rem;
        top: -16px;
        left: 0 !important;
    }
    @media only screen and (min-width: 600px) {
        .js .floating-labels legend + div {
            /* reduce margin-top for first form element after the legend */
            margin-top: 16px;
        }
        .js .floating-labels .cd-label {
            top: 20px;
        }
    }
</style>

    <form class="cd-form floating-labels" id="WebToLeadForm" action="http://irm.fullbottlegroup.com/index.php?entryPoint=WebToLeadCapture" method="POST" name="WebToLeadForm" novalidate="novalidate">
<h1 style="  color: rgb(59, 188, 210);font-size: 40px;">Join Fullbottle's Creator Family</h1>
        <h5 style="  color: white;font-size: 30px;">Step.1</h5>
        <legend>Tell us about yourself</legend>
        <fieldset>
            <div class="icon icon50 ss-item-required">
                <label class="cd-label" for="first_name">First Name</label>
                <input class="user" type="text" name="first_name" id="first_name" required="">
            </div>
            <div class="icon icon50 ss-item-required">
                <label class="cd-label" for="last_name">Last Name</label>
                <input class="user" type="text" name="last_name" id="last_name" required="">
            </div>

            <div class="icon">
                <label class="cd-label" for="email1">Email</label>
                <input class="email" type="email" name="email1" id="email1" required="">
            </div>
            <div class="icon">
                <label class="cd-label" for="phone_primary_c">Phone</label>
                <input id="phone" class="phone numbersOnly" type="text" name="phone_primary_c" required="">
            </div>

            <h4>Date of Birth</h4>
            <input id="birthdate" type="hidden" name="birthdate">
            <div class="icon iconSM">
                <label class="cd-label" for="birthdate_month">Month</label>
                <input type="text" name="birthdate_month" id="birthdate_month" class="numbersOnly" maxlength="2" onblur="updatebirthdateValue()" required="">
            </div>

            <div class="icon iconSM">
                <label class="cd-label" for="birthdate_day">Day</label>
                <input type="text" name="birthdate_day" id="birthdate_day" class="numbersOnly" maxlength="2" onblur="updatebirthdateValue()" required="">
            </div>

            <div class="icon iconSM">
                <label class="cd-label" for="birthdate_year">Year</label>
                <input type="text" name="birthdate_year" id="birthdate_year" class="numbersOnly" maxlength="4" onblur="updatebirthdateValue()" required="">
            </div>

        </fieldset>

        <h5 style="  color: white;font-size: 30px;">Step.2</h5>
        <legend>Enter your profiles</legend>
        <fieldset>
            <div class="icon icon50">
                <label class="cd-label" for="vine_account_name_c">Vine Name</label>
                <input class="vine" type="text" name="vine_account_name_c" id="vine_account_name_c">
            </div>

            <div class="icon icon50">
                <label class="cd-label" for="instagram_account_name_c">Instagram Name</label>
                <input class="instagram" type="text" name="instagram_account_name_c" id="instagram_account_name_c">
            </div>


            <div class="icon icon50">
                <label class="cd-label" for="twitter_account_name_c">Twitter Name</label>
                <input class="twitter" type="text" name="twitter_account_name_c" id="twitter_account_name_c">
            </div>



            <div class="icon icon50">
                <label class="cd-label" for="snapchat_account_name_c">Snapchat Name</label>
                <input class="snapchat" type="text" name="snapchat_account_name_c" id="snapchat_account_name_c">
            </div>


        </fieldset>


        <h5 style="  color: white;font-size: 30px;">Step.3</h5>
        <legend>Your Content</legend>
        <fieldset>
            <div>
<!--                <h4>Content Type <span style="font-weight:200;">[select mutliple]</span></h4>-->
<!---->
<!--                <p class="cd-selectOFF icon">-->
<!--                    <select class="categories content" multiple="" size="5" id="content_type_c" name="content_type_c[]">-->
<!--                        <option value="none">none</option>-->
<!--                        <option value="Animation">Animation/FX/StoMo</option>-->
<!--                        <option value="Animals">Animals</option>-->
<!--                        <option value="ArtPhotography">Art/Photography</option>-->
<!--                        <option value="Automotive">Automotive</option>-->
<!--                        <option value="Fashionista">Beauty/Fashion/Style</option>-->
<!--                        <option value="Celebrity">Celebrity</option>-->
<!--                        <option value="Comedy">Comedy</option>-->
<!--                        <option value="Crafting">Crafting</option>-->
<!--                        <option value="FamiliesChildren0To3">Familes with Children 0-3</option>-->
<!--                        <option value="FamiliesChildren4To6">Familes with Children 4-6</option>-->
<!--                        <option value="FamiliesChildren7To8">Familes with Children 7-8</option>-->
<!--                        <option value="FamiliesChildren9To11">Familes with Children 9-11</option>-->
<!--                        <option value="Food">Food/Beverages</option>-->
<!--                        <option value="HowTo">How-to</option>-->
<!--                        <option value="Music">Music</option>-->
<!--                        <option value="Movies">Movies</option>-->
<!--                        <option value="Parenting">Parenting</option>-->
<!--                        <option value="Sports">Sports</option>-->
<!--                        <option value="VideoGames">Video Games</option>-->
<!--                    </select>-->
<!--                </p>-->
<!--            </div>-->
<!---->
<!--            <div class="icon">-->
<!--                <label class="cd-label" for="refered_by">Referred By</label>-->
<!--                <input class="referral" type="text" name="refered_by" id="refered_by">-->
<!--            </div>-->

            <div class="icon">
                <label class="cd-label" for="about_influencer_c">Tell us about your videos</label>
                <textarea class="message" name="about_influencer_c" id="about_influencer_c"></textarea>
            </div>

            <div>
                <input id="submit" type="submit" value="Send" "="">
                <input id="campaign_id" type="hidden" name="campaign_id" value="20e95a65-c85e-68b3-0494-5463afbf50d4">
                <input id="redirect_url" type="hidden" name="redirect_url" value="http://fullbottlegroup.com/thanks">
                <input id="assigned_user_id" type="hidden" name="assigned_user_id" value="1">
                <input id="req_id" type="hidden" name="req_id" value="last_name;">
            </div>
        </fieldset>
    </form>
<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/cbpAnimatedHeader.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

<script>
//floating labels
    jQuery(document).ready(function($){
        if( $('.floating-labels').length > 0 ) floatLabels();

        function floatLabels() {
            var inputFields = $('.floating-labels .cd-label').next();
            inputFields.each(function(){
                var singleInput = $(this);
                //check if user is filling one of the form fields
                checkVal(singleInput);
                singleInput.on('change keyup', function(){
                    checkVal(singleInput);
                });
            });
        }

        function checkVal(inputField) {
            ( inputField.val() == '' ) ? inputField.prev('.cd-label').removeClass('float') : inputField.prev('.cd-label').addClass('float');
        }
    });

    //masking scripts

    $('.numbersOnly').keyup(function () {
        this.value = this.value.replace(/[^0-9.\.]/g,'');
    });

    function formatPhone(obj) {
        var numbers = obj.value.replace(/\D/g, ''),
            char = { 0: '(', 3: ') ', 6: ' - ' };
        obj.value = '';
        for (var i = 0; i < numbers.length; i++) {
            obj.value += (char[i] || '') + numbers[i];
        }
    }
    $('.phone').blur(function(){
        formatPhone(this);
    });


    $(function() {
        var form = $( "#WebToLeadForm" );
        $(form).validate({
            // Specify the validation rules
            rules: {
                first_name: "required",
                last_name: "required",
                email1: {
                    required: true,
                    email: true
                },
                phone_primary_c: {
                    required: true,
                    phoneUS: true
                },
                birthdate_month: {
                    required: true,
                    minlength: 1
                },
                birthdate_day: {
                    required: true,
                    minlength: 1
                },
                birthdate_year: {
                    required: true,
                    minlength: 4
                }
            },

            // Specify the validation error messages
            messages: {
                first_name: "",
                last_name: "",
                email1: "",
                phone_primary_c: "",
                birthdate_month: "",
                birthdate_day: "",
                birthdate_year: ""
            },

            submitHandler: function(form) {

                var reqs=document.getElementById('req_id').value;
                reqs = reqs.substring(0,reqs.lastIndexOf(';'));
                var req_fields = new Array();
                var req_fields = reqs.split(';');
                nbr_fields = req_fields.length;
                var req = true;
                for(var i=0;i<nbr_fields;i++){
                    if(document.getElementById(req_fields[i]).value.length <=0 || document.getElementById(req_fields[i]).value==0){
                        req = false;
                        break;
                    }
                }2
                form.submit();
//                alert('form submitted');
                return true;

            }
        });

//        $( "#submit" ).click(function() {
//            alert( "Valid: " + form.valid() );
//        });

    });

</script>
