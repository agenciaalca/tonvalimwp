<?php get_header(); ?>

<div class="container-fluid">
	<div class="header-page">
		<div class="container col-md-5 col-md-offset-6 ">
			<h1 class="titulo"><?php the_title(); ?></h1>
		</div>
	</div>
	<!--	<div class="single-thumbnail">
	<?php the_post_thumbnail(); ?>
		</div>-->
</div>



<div class="content">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="content-page">
						<?php the_content(); ?>
					</div>
				</div>
				<?php
			endwhile;
		else:
			?>
			<div class="artigo">
				<h2>Nada Encontrado</h2>
				<p>Erro 404</p>
				<p>Lamentamos mas não foram encontrados artigos.</p>
			</div>            
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>