
<?php get_header(); ?>


<div class="row">
	<section id="primary" class="content-area col-md-9">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="search-results-page-header text-center">
					<h1 class="page-title"><?php printf( esc_html__( 'Pesquisa por: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
					?>

					<div class="container">
						<div class="content">
							<?php the_title() ?>
						</div>
					</div>
					<?php
				endwhile;

				the_posts_navigation();

			else :

				

			endif;
			?>

		</main><!-- #main -->
	</section><!-- #primary -->
</div>

<?php
get_footer();
