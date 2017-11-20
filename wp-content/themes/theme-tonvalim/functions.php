<?php

/* * ************************************
 *  THEME SUPORT A THUMBNAILS
 * ************************************ */

function add_suport_theme() {
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'add_suport_theme' );

/* * ************************************
 *  DEFINIR TAMANHO DE THUMBNAILS
 * ************************************ */

//function add_suport_theme() {
//	add_theme_support( 'post-thumbnails' );
//}
//add_action( 'after_setup_theme', 'add_suport_theme' );



/* * ************************************
 *  GERENCIA TITLE
 * ************************************ */
function geraTitle() {

	if ( is_home() ) {
		echo bloginfo( 'name' );
	} else {
		echo bloginfo( 'name' ) . " |dsafd " . the_title();
	}
}

/* * ************************************
 *  SIDEBAR
 * ************************************ */
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}

/* * ************************************
 * Registro Menu Personalizado
 * ************************************ */
add_theme_support( 'menus' );
register_nav_menus( array(
	'primary' => __( 'Menu header', 'menu-header' ),
) );


/* * ************************************
 *  INCLUSÃO DE SCRIPTS / CSS
 * ************************************ */

function geraCor() {
	$numeroAleatorio = mt_rand( 1, 4 );
	switch ( $numeroAleatorio ) {
		case 1:
			wp_enqueue_style( 'css-cor1', get_template_directory_uri() . '/assets/css/cor1.css' );
			break;
		case 2:
			wp_enqueue_style( 'css-cor2', get_template_directory_uri() . '/assets/css/cor2.css' );
			break;
		case 3:
			wp_enqueue_style( 'css-cor3', get_template_directory_uri() . '/assets/css/cor3.css' );
			break;
		default:
			break;
	}
}

function wp_inclusao_scripts() {
	// Carregando CSS header funçao nativa do wp ('nomedocss', caminho)
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	geraCor();
	//Carregando no footer
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'bootstrap-validator-js', get_template_directory_uri() . '/assets/js/validator.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'instafeed-js', get_template_directory_uri() . '/assets/js/instafeed.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'instagram-api-js', get_template_directory_uri() . '/assets/js/instagramapi.js', array( 'jquery' ), '', true );
}

add_action( 'wp_enqueue_scripts', 'wp_inclusao_scripts' );


/* * ************************************
 *  Criando função do ACF Cunstom Type Field
 * ************************************ */
if ( function_exists( 'acf_add_options_page' ) ) {

	$option_page = acf_add_options_page( array(
		'page_title' => 'Outras Opções*',
		'menu_title' => 'Outras Opções*',
		'menu_slug' => 'option-page',
		'capability' => 'edit_posts',
		'redirect' => true
			) );

	acf_add_options_sub_page( array(
		'page_title' => 'Formulário de contato',
		'menu_title' => 'Formulário de contato',
		'parent_slug' => 'option-page',
	) );

	acf_add_options_sub_page( array(
		'page_title' => 'Slider',
		'menu_title' => 'Slider',
		'parent_slug' => 'option-page',
	) );
}
add_filter( 'init', 'my_custom_sizes' );


/* * ************************************
 *  Recorte de imagem 
 * ************************************ */

function my_custom_sizes( $sizes ) {
	add_image_size( 'thumbnail', 600, 300, true );
	add_image_size( 'thumbnail', 600, 300, true );
}
