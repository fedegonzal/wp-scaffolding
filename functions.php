<?php

	register_sidebar( array(
		'name' => 'Columna Uno',
		'id'   => 'sidebar1'
	));

    register_nav_menu('main_menu','Menú principal');

	add_theme_support( 'post-thumbnails' );
	add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
