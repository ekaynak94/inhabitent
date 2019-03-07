<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

function inhabitent_login_url($url){return get_site_url();}
add_filter('login_headerurl','inhabitent_login_url');

function inhabitent_login_logo() {
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
	#login .message{
		border-color:#248A83;
	}    
</style>';
}
add_action('login_head', 'inhabitent_login_logo');

function inhabitent_all_products( $query ) {
	if(!(is_admin()||$query->is_main_query())){return;}
	if ( $query->is_post_type_archive( 'product' ) || $query->is_tax( 'product_type' )) {
		$query-> set( 'orderby', 'title' );
		$query-> set( 'order', 'ASC' );
		$query->set( 'posts_per_page', 16 );
	}
}
add_action( 'pre_get_posts', 'inhabitent_all_products',1);

add_filter( 'get_the_archive_title', 'replace_page_title');
function replace_page_title( $title ) {

	if( is_post_type_archive('product') ) { $title='Shop Stuff' ;}
	if( is_post_type_archive('adventure') ) { $title='More Adventures' ;}
	if(is_tax( 'product_type' )){$title=single_term_title( '', false );}

    return $title;

}


function seatch_placeholder( $html ) {

	return str_replace( 'placeholder="SEARCH ', 'placeholder="Type and hit enter ', $html );
}
add_filter( 'get_search_form', 'seatch_placeholder' );