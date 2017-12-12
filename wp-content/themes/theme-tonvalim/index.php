<?php get_header(); ?>
<?php include_once 'mail.php'; ?>

<div id="slider" class="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

		<!-- Wrapper for slides -->
		<div  id="carousel-slider" class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="conteudo-slider col-md-5">
						<fieldset>
							<legend>EBOOK</legend> 
							<p>Tá cansado de colocar metas e não conseguir ver o resultado delas?</p>
						</fieldset>
						<br>
						<p>Baixe já o nosso e-book e entenda quais são os 5 obstáculos que estão atrapalhando você a conquistar os seus sonhos.</p>
						<br>
						<a href="http://conteudo.tonvalim.com.br/conquistar-suas-metas" target="_blank" class="btn btn-default">Acesse agora</a>
					</div>
					<div class="imagem-slider hidden-xs hidden-sm">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/img7.jpg" width="100%">
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<div class="conteudo-slider col-md-5">
						<fieldset>
							<legend>COACH</legend> 
							<p>Tenha resultados impactantes na sua vida!</p>
						</fieldset>
						<br>
						<p>Eu quero que você saia da sua zona de conforto. Eu quero que você busque o melhor de si, e transforme sonhos, em projetos concretos. Como? Através do Coaching e suas práticas. Clique e saiba como eu posso te ajudar a ter uma vida extraordinária.</p>
						<br>
						<a href="http://tonvalim.com.br/o-coach/" class="btn btn-default">Saiba Mais</a>
					</div>
					<div class="imagem-slider hidden-xs hidden-sm">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/img8.jpg" width="100%">
					</div>
				</div>
			</div><div class="item">
				<div class="container">
					<div class="conteudo-slider col-md-5">
						<fieldset>
							<legend>PALESTRAS</legend> 
							<p>O Coaching não é só para a sua vida pessoal, ele também funciona para o seu negócio.</p>
						</fieldset>
						<br>
						<p>Estar motivado por uma ideia, projeto ou organização, resgata em nós a paixão pelo que se faz. E se é isso que você e sua empresa precisam, deixa eu te dar uma mãozinha. Clique e conheça mais sobre como eu posso te ajudar.</p>
						<br>
						<!--<a href="#" class="btn btn-default">Saiba Mais </a>-->
					</div>
					<div class="imagem-slider hidden-xs hidden-sm">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/img7.jpg" width="100%">
					</div>
				</div>
			</div>
			
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>
	</div>
</div>

<div class="container">

    <!--  Blog -->
    <section id="blog" class="row">
        <div class="titulos-de-contexto ">
            <h1>ÚLTIMAS NOTÍCIAS</h1>
        </div>
		<?php
		if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();
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
			endwhile;
			paginacao_blog();
		endif;
		?>
	</section>
</div><!-- posts -->


<!-- incluindo carousel do instagram -->
<div id="instafeed" class="instafeed"></div>

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
                            <div class="help-block with-errors"></div>
							</div>
                        </div>
                        <div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" value="" placeholder="email*" 
									   data-error="Por favor, informe um e-mail válido." required>
                            <div class="help-block with-errors"></div>
							</div>
                        </div>
                        <div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telefone" id="telefone" value="" placeholder="telefone">
                           <div class="help-block with-errors"></div>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea" rows="4" 
                                      id="message" name="mensagem" placeholder="mensagem*" required></textarea>
									  <div class="help-block with-errors"></div>
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
					<p><i class="fa fa-envelope" aria-hidden="true"></i> <?php the_field( 'email', 'option' ); ?></p>
					<p><i class="fa fa-whatsapp" aria-hidden="true"></i> <?php the_field( 'telefone', 'option' ); ?></p>
					<p><i class="fa fa-globe" aria-hidden="true"></i> <?php the_field( 'endereco', 'option' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
