<?php
/***************************************************************************
*
*	ProjectTheme - copyright (c) - sitemile.com
*	The only project theme for wordpress on the world wide web.
*
*	Coder: Jhon Arellano
*	Email: sitemile[at]sitemile.com | andreisaioc[at]gmail.com
*	More info about the theme here: http://sitemile.com/products/wordpress-project-freelancer-theme/
*	since v1.2.5.3
*
***************************************************************************/

function ProjectTheme_my_account_activation_function()
	{
		global $current_user, $wp_query, $wpdb;
		$current_user=wp_get_current_user();
		$uid = $current_user->ID;
			get_template_part ( 'lib/my_account/aside-menu'  );
?>

<div class="page-wrapper" style="display:block">
    <div class="container-fluid">
        <?php do_action('pt_for_demo_work_3_0'); ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="page-header">
                        <h1 class="page-title">
                            <!-- <?php echo sprintf(__('Welcome to PCEPS','ProjectTheme')  ) ?> -->
                        </h1>

                        <div style="background: #ffffff; color: #000000; padding: 40px; width: 100%; height: auto;">
                        <?php echo do_shortcode( '[ws_form id="31"]' ); ?>
                            <!-- <?php if ( get_field( 'business_info_submitted', 'user_67' ) ) : ?> -->
                            <!-- <div class="alert alert-success" role="alert">

                                Your information have been sumitted, please give our team up to 7 working days to review
                                your submission and respond. You may receive follow up messages through e-mail.
                            </div> -->
                            <!-- <?php else: ?> -->
                            

                            <!-- <?php endif; ?> -->
                            <!-- <p><?php the_field('business_info_submitted', 'user_67'); ?></p> -->



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	}
?>