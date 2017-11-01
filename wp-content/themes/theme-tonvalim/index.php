<?php get_header(); ?>
<?php include_once 'mail.php'; ?>

<header>

	<div id="slider" class="slider">
		<div id="myCarousel" class="carousel carousel-slider" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div  id="carousel-slider" class="carousel-inner ">
				<div class="container">
					<div class="item active">
						<div class="conteudo-slider col-md-4 offset-8">
							<fieldset>
								<legend>PALESTRAS</legend> 
								<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de</p>
							</fieldset>
							<br>
							<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de</p>
							<br>
							<button class="btn btn-default">Saiba Mais</button>
						</div>

					</div>
				</div>
			</div>
			<div class="imagem-slider">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/grupo.png" width="100%" height="330px">
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</header>

<div class="container">
    <!--  Blog -->
    <section id="blog" class="row">
        <div class="titulos-de-contexto ">
            <h1>ÚLTIMAS NOTÍCIAS</h1>
        </div>
		
		
			<?php 
				$args = array('post_type'=>'post', 'showposts'=>3);
				$my_posts = get_posts( $args );
				if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );
			 ?>


            <div id="post"  class="col-md-4 col-sm-6 col-xs-12">
                <div class="single_post">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>
                    <div class="descricao-post">
                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    </div>
                </div>
            </div>
<!--            <div id="post" class="col-md-4 col-sm-6 col-xs-12">
                <div class="single_post">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/grupo.png" alt="Logo empresa cenoura frita" />
                    <div class="descricao-post">
                        <p>Descrição do post</p>
                    </div>
                </div>
            </div>
            <div id="post" class="col-md-4 col-sm-6 col-xs-12">
                <div class="single_post">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/grupo.png" alt="Logo grupo-conceito" />
                    <div class="descricao-post">
                        <p>Descrição do post</p>
                    </div>
                </div>
            </div>
            <div id="post" class="col-md-4 col-sm-6 col-xs-12">
                <div class="single_post">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/grupo.png" alt="Logo tom valin" />
                    <div class="descricao-post">
                        <p>Descrição do post</p>
                    </div>
                </div>
            </div>
            <div id="post" class="col-md-4 col-sm-6 col-xs-12">
                <div class="single_post">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/grupo.png" alt="Logo pizza na pedra" />
                    <div class="descricao-post">
                        <p>Descrição do post</p>
                    </div>
                </div>
            </div>-->
		
		<?php
		    	endforeach;
		    	endif;
	     	?>
	     	<div class="clear"></div>

        </div>
    </section><!--  o grupo conceito -->


</div>

<!--  contato  -->
<section id="contato" class="contato content">

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
                                <input type="email" class="form-control" name="email" id="email" value="" placeholder="email*" required
                                       data-error="Por favor, informe um e-mail válido.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="telefone" id="telefone" value="" placeholder="telefone*" required
                                       data-error="Por favor, somente números.">
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
                    <div class="informacoes-contato">
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> tonvalim@tonvalim.com</p>
                        <p><i class="fa fa-whatsapp" aria-hidden="true"></i> (062) 3636-0111</p>
                        <p><i class="fa fa-globe" aria-hidden="true"></i> Rua 88-B, nº 73, Setor Sul, Goiânia - GO, 74085-030</p>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();
