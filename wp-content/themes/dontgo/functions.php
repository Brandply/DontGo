<?php


add_theme_support( 'post-thumbnails' );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'primary'   => __( 'Top primary menu', 'twentyfourteen' ),
	'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
) );
