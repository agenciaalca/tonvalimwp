<?php get_header(); ?>

<div class="container-fluid">
	<div class="header-page">
		<div class="container col-md-5 col-md-offset-6 ">
			<h1 class="titulo"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="single-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>
</div>


<div class="container">

	<div class=" content col-md-12 col-sm-12 col-xs-12">
		<div class="row">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					?>
					<div class="info-post">
						<p>
							<strong>Postado por:</strong> <?php the_author(); ?> <strong>em</strong> <?php the_date(); ?>
						</p>
					</div>

					<div class="content-post">
						<?php the_content(); ?>
						<div class="col-md-2 col-md-offset-10 text-right">
							<a class="btn btn-custom text-right" href="http://tonvalim.com.br">Voltar </a></div>
					</div>
					<!--					<div class="slug">
											<div class="row">
												<div class="col-md-3">Categoria:</div>
												<div class="col-md-3">Palavras-Chave:</div>
											</div>
											<div class="row">
												<div class="col-md-3"><?php the_category(); ?></div>
												<div class="col-md-3"><?php the_category(); ?></div>
											</div>
										</div>-->

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
		
		<div class="row">
			<div class="navegacao">
				<?php
				$prevPost = get_previous_post( true );
				if ( $prevPost ) {
					$args = array(
						'posts_per_page' => 1,
						'include' => $prevPost->ID
					);
					$prevPost = get_posts( $args );
					foreach ( $prevPost as $post ) {
						setup_postdata( $post );
						?>
						<div class="col-md-2">
							<a class="previous" href="<?php the_permalink(); ?>"><span class="icon" >&laquo;</span> Post Anterior </a>
						</div>
						<?php
						wp_reset_postdata();
					} //end foreach
				} // end if

				$nextPost = get_next_post( true );
				if ( $nextPost ) {
					$args = array(
						'posts_per_page' => 1,
						'include' => $nextPost->ID
					);
					$nextPost = get_posts( $args );
					foreach ( $nextPost as $post ) {
						setup_postdata( $post );
						?>
						<div class="col-md-2 col-md-offset-8 text-right">
							<a class="next" href="<?php the_permalink(); ?>">Próximo Post <span class="icon" >&raquo;</span></a>
						</div>
						<?php
						wp_reset_postdata();
					} //end foreach
				} // end if
				?>
			</div>
		</div>
		<!--		Sidebar Area
				<div class="col-md-4">
		<?php get_sidebar(); ?>	
				</div>
				Sidebar Area -->
	</div>
</div>


<?php get_footer(); ?>