<?php
/**
 * Single Campaigns Template
 */
?>
<?php get_header(); ?>


<?php

    locate_template( array( 'campaigns/campaign-brands.php' ), true, true );
//$template = get_field('campaign_template');
//
//if ($template == 'Creators') {
//    locate_template( array( 'campaigns/campaign-creators.php' ), true, true );
//} else {
//    locate_template( array( 'campaigns/campaign-brands.php' ), true, true );
//}
//?>


<?php get_footer(); ?>
