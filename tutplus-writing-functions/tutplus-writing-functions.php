<?php
/**
* Plugin Name:	Tuts+ Writing a Function in WordPress
* Plugin URI:	http://rachelmccollin.co.uk/
* Description:	Plugin to support tuts+ course on writing a function in a WordPress plugin.
* Version:		1.0
* Author:		Rachel McCollin
* Author URI:	http://rachelmccollin.co.uk
* Text Domain:	tutsplus
* Licence:		GNU General Public License v2
*
*/

/**********************************************************************
tutsplus_display_latest_posts - displays a list of the latest posts
**********************************************************************/
function tutsplus_display_latest_posts() {	
		
	global $post;

	$args = array( 
		'posts_per_page' => 5
	);

	$my_posts = get_posts( $args );
	
	if ( ! empty ( $my_posts ) ) {
		
		_e ('<h3>Latest Posts</h3>', 'tutsplus' );
		echo '<ul>';
		
			foreach ( $my_posts as $my_post ) {
								
				echo '<li>';
					echo '<a href="' . get_the_permalink( $my_post ) . '">' . get_the_title( $my_post ) . '</a>';
				echo '</li>';
			
			}
			
		echo '</ul>';
			
	}

	wp_reset_postdata();
	
}