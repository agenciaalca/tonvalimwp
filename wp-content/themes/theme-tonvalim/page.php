<?php get_header(); ?>

<div class="container-fluid">
	<div class="header-page">
		<div class="row">
			<div class="container">
				<h1 ><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="content-page">
				<div class="row">

					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile;
	else: ?>
		<div class="artigo">
			<h2>Nada Encontrado</h2>
			<p>Erro 404</p>
			<p>Lamentamos mas não foram encontrados artigos.</p>
		</div>            
	<?php endif; ?>

</div>

<?php get_footer(); ?>