<?php
// child here


get_template_part('lib/my_account/activation');

function ptc_my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; //

    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'ptc_my_theme_enqueue_styles' );

/*************************************************************
*
*	ProjectTheme (c) sitemile.com - function
*
**************************************************************/

function ProjectTheme_display_my_account_activation( $content = '' )
{
	if ( preg_match( "/\[project_theme_my_account_activation\]/", $content ) )
	{
		ob_start();
		ProjectTheme_my_account_activation_function();
		$output = ob_get_contents();
		ob_end_clean();
		$output = str_replace( '$', '\$', $output );
		return preg_replace( "/(<p>)*\[project_theme_my_account_activation\](<\/p>)*/", $output, $content );

	}
	else {
		return $content;
	}
}

add_action('the_content',		'ProjectTheme_display_my_account_activation');

$result = add_role('Temp_service_buyer', __(
    'Temp Service Buyer'),
array( ) );


$result = add_role('Temp_service_provider', __(
    'Temp Service Provider'),
array( ) );



 ?>
