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
		echo bloginfo( 'name' ) . " | " . the_title();
	}
}

/* * ************************************
 *  SIDEBAR
 * ************************************ */

function sidebar_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Sidebar' ),
		'id' => 'sidebar-1',
		'description' => esc_html__( 'Add widgets here.' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'sidebar_widgets_init' );

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

/* -----------------------------------------------------
  PAGINAÇÃO
  -------------------------------------------------------- */
if ( !function_exists( 'paginacao_blog' ) ) :

	function paginacao_blog() {
		// Don't print empty markup if there's only one page.
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return;
		}

		$paged = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;


		$pagenum_link = html_entity_decode( get_pagenum_link() );
		$query_args = array();
		$url_parts = explode( '?', $pagenum_link );

		if ( isset( $url_parts[1] ) ) {
			wp_parse_str( $url_parts[1], $query_args );
		}

		$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
		$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

		$format = $GLOBALS['wp_rewrite']->using_index_permalinks() && !strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
		$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

		// Set up paginated links.
		$links = paginate_links( array(
			'base' => $pagenum_link,
			'format' => $format,
			'total' => $GLOBALS['wp_query']->max_num_pages,
			'current' => $paged,
			'mid_size' => 1,
			'add_args' => array_map( 'urlencode', $query_args ),
			'prev_text' => __( 'Previous' ),
			'next_text' => __( 'Next' ),
			'type' => 'array',
				) );

		if ( $links ) :
			?>
			<div class="col-md-12">
				<nav class="navigation paging-navigation text-center" role="navigation">
					<h1 class="screen-reader-text"><?php _e( '' ); ?></h1>

					<ul class="pagination">

						<?php
						foreach ( $links as $pgl ) {
							echo "<li>$pgl</li>";
						}
						?>

					</ul>

				</nav><!-- .navigation -->
			</div>
			<?php
		endif;
	}

endif;

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
