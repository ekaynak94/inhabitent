<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function red_starter_login_url($url){return get_site_url();}
add_filter('login_headerurl','red_starter_login_url');

function red_starter_login_logo() {
	$logo_url=get_template_directory_uri().'./assets/images/logos/inhabitent-logo-text-dark.svg';
	echo '<style type="text/css">                                                                   
	#login h1 a, .login h1 a  { background-image:url(' . $logo_url . ');
		height:53px;		
		width:300px;
		background-size: 100%;
		background-repeat: no-repeat;
        padding-bottom: 30px;
	}                        
	.login .button.button-primary{
		background-color:#248A83;
	}    
</style>';
}
add_action('login_head', 'red_starter_login_logo');
