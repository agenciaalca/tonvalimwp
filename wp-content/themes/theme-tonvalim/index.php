<?php get_header(); ?>
<?php include_once 'mail.php'; ?>

<header>

	<?php
	if ( have_rows( 'slider', 'option' ) ):
		?>
		<div id="slider" class="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner background-header" role="listbox">

					<?php
					$cont = 0;
					while ( have_rows( 'slider', 'option' ) ) : the_row();

						$titulo = get_sub_field( 'titulo', 'option' );
						$descricao1 = get_sub_field( 'descricao-1', 'option' );
						$descricao2 = get_sub_field( 'descricao-2', 'option' );
						$linkDoBotao = get_sub_field( 'link_do_botao', 'option' );
						$botao = get_sub_field( 'botao', 'option' );
						$imagemDestacada = get_sub_field( 'imagem_destacada', 'option' );
						$size = 'thumbnail';
						$thumb = $imagemDestacada['sizes'][$size];

						$cont++;

						$class = ( $cont == 1 ) ? 'active' : null;

						if ( (!empty( $titulo )) && (!empty( $descricao1 )) && (!empty( $descricao2 )) && (!empty( $linkDoBotao )) && (!empty( $botao )) && (!empty( $imagemDestacada )) && (!empty( $thumb )) ) :
							?>
							<div class = "item <?php echo $class; ?>">
								<div class = "container">
									<div class = "temas col-md-4">
										<fieldset>
											<legend><?php echo $titulo; ?></legend> 
											<p><?php echo $descricao1; ?></p>
										</fieldset>
										<br>
										<p><?php echo $descricao2; ?></p>
										<br>
										<a href="<?php echo $linkDoBotao; ?>" class="btn btn-default"><?php echo $botao; ?></a>
										<div class="imagem-slider ">
											<img class="img-responsive" src="<?php echo $thumb; ?>" >
										</div>
									</div>
								</div>
							</div>

							<?php
							else:
								var_dump($thumb);
								echo 'deu ruim';
						endif;
					endwhile;
					?>
					<a class = "left carousel-control" href = "#carousel-example-generic" role = "button" data-slide = "prev">
						<span class = "glyphicon glyphicon-chevron-left" aria-hidden = "true"></span>
						<span class = "sr-only">Previous</span>
					</a>
					<a class = "right carousel-control" href = "#carousel-example-generic" role = "button" data-slide = "next">
						<span class = "glyphicon glyphicon-chevron-right" aria-hidden = "true"></span>
						<span class = "sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<?php
	else :
		var_dump($thumb);
		echo 'deu ruim';
	endif;
	?>
</header>

<div class="container">
    <!--  Blog -->
    <section id="blog" class="row">
        <div class="titulos-de-contexto ">
            <h1>ÚLTIMAS NOTÍCIAS</h1>
        </div>

		<?php
		$args = array( 'post_type' => 'post', 'showposts' => 3 );
		$my_posts = get_posts( $args );
		if ( $my_posts ) : foreach ( $my_posts as $post ) : setup_postdata( $post );
				?>

				<div id="post"  class="col-md-4 col-sm-6 col-xs-12">
					<div class="single_post">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( false, array( 'class' => 'img-responsive' ) ); ?></a>
						<div class="descricao-post">
							<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						</div>
					</div>
				</div>

				<?php
			endforeach;
		endif;
		?>

	</section>
</div><!-- posts -->


<!--  contato  -->
<section id="contato" class="contato">

    <div class="container">
        <div class="row">
            <div class="titulos-de-contexto ">
                <h1>ENTRE EM CONTATO</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 ">
                <form method="post" action="index.php#contato" name="formulario-contato" data-toggle="validator" role="form">
                    <div class="col-md-6">
                        <div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="nome*" required />
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" value="" placeholder="email*" required>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="telefone" id="telefone" value="" placeholder="telefone*" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea" rows="4" 
                                      id="message" name="mensagem" placeholder="mensagem*" required></textarea>
                        </div>
                        <div class="botao ">
                            <button class="btn btn-default btn-block" id="submit" name="submit" type="submit" value="ENVIAR">Enviar Mensagem</button>
                        </div> 
                    </div>
                </form>
                <div class="col-md-12">

                    <div class="mensagem-alerta"><?php echo $msg ?></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="informacoes-contato">
                    <div class="informacoes-contato">
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> <?php the_field( 'email', 'option' ); ?></p>
                        <p><i class="fa fa-whatsapp" aria-hidden="true"></i> <?php the_field( 'telefone', 'option' ); ?></p>
                        <p><i class="fa fa-globe" aria-hidden="true"></i> <?php the_field( 'endereco', 'option' ); ?></p>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
