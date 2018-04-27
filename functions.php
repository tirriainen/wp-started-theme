<?php 

// rekisteröidään teeman käynnistymiseen liittyvät funktiot
function nice_theme_setup() {
	// lisätään teeman head-osioon title wp:n toimesta, ei laiteta sitä itse
	add_theme_support( 'title-tag' );

	// lisätään tuki artikkelikuvilla
	add_theme_support( 'post-thumbnails' );

	// rekisteröidään navigaatiovalikko
	register_nav_menus( [
		'primary' => 'Päävalikko',
	] );
}
add_action( 'after_setup_theme', 'nice_theme_setup' );

// ladataan teeman tyylit ja skriptit
function nice_theme_scripts() {
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
	wp_enqueue_style( 'nice-css', get_template_directory_uri() . '/style.css', ['bootstrap-css']);
}
add_action( 'wp_enqueue_scripts', 'nice_theme_scripts' );

// rekisteröidään "vimpain"
function nice_sidebar_widget() {
	register_sidebar( array(
		'name'          => 'Sivupalkin vimpain alue',
		'id'            => 'sidebar-1',
		'description'   => 'Sivupalkin vimpain alue',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nice_sidebar_widget' );