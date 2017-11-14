<?php
ini_set( 'display_errors', 1 );
ini_set( 'display_startup_erros', 1 );
error_reporting( E_ALL );
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Tom Valim"/>
        <meta name="keywords" content="coach"/>
        <meta name="author" content="Agência Alca"/>

        <link rel="shortcut icon" href="img/favicon.png"> 
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<title><?php bloginfo( 'name' ); ?> </title>
		<?php wp_head(); ?>
		<?php escolheCSS(); ?>


		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108674939-2"></script>
		<script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-108674939-2');
		</script>

    </head>
	<body>
		<!-- Navbar -->
		<header>
			<nav class="navbar navbar-default navbar-custom">
				<div class="container">
					<div class="navbar-header">
						<!-- Button for smallest screens -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="logo" href="#home"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.jpg" height="50px"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<?php require_once('assets/includes/wp_bootstrap_navwalker.php'); ?>
					<?php
					wp_nav_menu( array(
						'menu' => 'Menu',
						'theme_location' => 'menu-header',
						'depth' => 2,
						'container' => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'bs-example-navbar-collapse-1',
						'menu_class' => 'nav navbar-nav navbar-right',
						'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
						'walker' => new wp_bootstrap_navwalker() )
					);
					?>
				</div>
			</nav>
		</header>
		<!-- /.navbar -->