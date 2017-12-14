<?php get_header(); ?>

<div class="container-fluid">
	<div class="header-single">
		<div class="container col-md-6 col-md-offset-6 ">
			<h1 class="titulo"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="single-thumbnail hidden-sm hidden-xs">
		<div class="img-responsive"><?php echo the_post_thumbnail(); ?></div>
	</div>
</div>

<div class="container">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class=" content">
			<div class="row">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						?>
						<div class="info-post">
							<p>
								<strong class="corfonte">Postado por:</strong> <?php the_author(); ?> <strong class="corfonte">em</strong> <?php the_date(); ?>
							</p>
						</div>

						<div class="content-post">
							<?php the_content(); ?>
							<div class="col-md-2 col-md-offset-10 text-right">
								<a class="btn btn-custom text-right" href="http://tonvalim.com.br">Voltar </a>
							</div>
						</div>


						<?php
					endwhile;
				else:
					?>
					<div class="artigo">
						<h2>Erro 404! Nada Encontrado</h2>
						<a href="http://tonvalim.com.br" class="btn btn-custom">Voltar para página principal</a>
					</div>            
				<?php endif; ?>  
			</div>
			<div class="row">
				<div class="navegacao">
					<?php
					the_post_navigation( array(
						'screen_reader_text' => ' ',
						'prev_text' => '               
				<span class="meta-nav" aria-hidden="true">' . __( '&#171;	Post Anterior' ) . '</span>',
						'next_text' => '
				<span class="meta-nav" aria-hidden="true">' . __( 'Próximo Post &#187;' ) . '</span>'
					) );
					?>
				</div>
			</div>
			<div class="palavras-chaves">
				<div class="categorias col-md-6 col-sm-12">
					<h3>Categorias</h3>
					<?php
					$categories = get_the_category( $post->ID );
					foreach ( $categories as $category ) {
						echo '<span><a href="' . esc_url( get_category_link( $category->term_id ) )
						. '">' . esc_html( $category->name ) . '</a></span>';
					}
					?>
				</div>
				<div class="tags col-md-6 col-sm-12">
					<h3>Tags</h3>
					<?php the_tags( '<span>', '</span><span>', '</span>' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>