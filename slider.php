

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
