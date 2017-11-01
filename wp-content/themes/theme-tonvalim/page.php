<?php get_header(); ?>

<div class="header-internas">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if( have_posts() ) : while( have_posts()) : the_post(); ?>
				
				<div class="conteudo-pagina">
					<?php the_content(); ?>
				</div>
				<?php 
					endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>