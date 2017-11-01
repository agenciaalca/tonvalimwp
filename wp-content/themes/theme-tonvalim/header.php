<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

        <title><?php wp_title(); ?></title>

        <meta name="description" content="Tom Valim"/>
        <meta name="keywords" content="coach"/>
        <meta name="author" content="Agência Alca"/>
        <link rel="shortcut icon" href="img/favicon.png"> 
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

		<?php wp_head(); ?>
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
						'walker' => new wp_bootstrap_navwalker())
					);
					?>

				</div>
			</nav>
		</header>
		<!-- /.navbar -->
		
		<?php 
				$facebook = $header_setting['social_media_facebook_link'];
				$twitter = $header_setting['social_media_twitter_link'];
				$linkdin = $header_setting['social_media_linkedin_link'];
				
				$social = '<ul id="%1$s" class="%2$s">%3$s';
				if($header_setting['header_social_media_enabled'] == 0 )
				{
					$social .= '<ul class="head-contact-social">';

					if($header_setting['social_media_facebook_link'] != '') {
					$social .= '<li class="facebook"><a href="'.$facebook.'"';
						if($header_setting['facebook_media_enabled']==1)
						{
						 $social .= 'target="_blank"';
						}
					$social .='><i class="fa fa-facebook"></i></a></li>';
					}
					if($header_setting['social_media_twitter_link']!='') {
					$social .= '<li class="twitter"><a href="'.$twitter.'"';
						if($header_setting['twitter_media_enabled']==1)
						{
						 $social .= 'target="_blank"';
						}
					$social .='><i class="fa fa-twitter"></i></a></li>';
					
					}
					if($header_setting['social_media_linkedin_link']!='') {
					$social .= '<li class="linkedin"><a href="'.$linkdin.'"';
						if($header_setting['linkedin_media_enabled']==1)
						{
						 $social .= 'target="_blank"';
						}
					$social .='><i class="fa fa-linkedin"></i></a></li>';
					}
					$social .='</ul>'; 
					
			}
			$social .='</ul>'; 
		
		?>