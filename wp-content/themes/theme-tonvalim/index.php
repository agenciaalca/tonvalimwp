<?php get_header(); ?>
<?php include_once 'mail.php'; ?>

<header>
	<div id="slider" class="slider">
		<div id="carousel-example-generic" class="carousel slide background-header" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div  id="carousel-slider" class="carousel-inner" role="listbox">

				<div class="item active">
					<div class="container">
						<div class="conteudo-slider col-md-4">
							<fieldset>
								<legend>PALESTRAS</legend> 
								<p>2. Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de</p>
							</fieldset>
							<br>
							<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de</p>
							<br>
							<a href="#" class="btn btn-default">Saiba Mais</a>
						</div>
						<div class="imagem-slider">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/grupo.png" width="100%">
						</div>
					</div>
				</div>
				<div class="item">
					<div class="container">
						<div class="conteudo-slider col-md-4">
							<fieldset>
								<legend>PALESTRAS</legend> 
								<p>1. Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de</p>
							</fieldset>
							<br>
							<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de</p>
							<br>
							<a href="#" class="btn btn-default">Saiba Mais</a>
						</div>
						<div class="imagem-slider">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/grupo.png" width="100%">
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

<div id="insta">
<!--	 LightWidget WIDGET <script src="//lightwidget.com/widgets/lightwidget.js"></script>
	<iframe src="//lightwidget.com/widgets/8000e570dd565b669fd5951f73d503d8.html"
			scrolling="no" allowtransparency="true" class="lightwidget-widget" 
			style="width: 100%; border: 0; overflow: hidden;"></iframe>-->

<h1><i class="fa fa-instagram"></i> nada</h1>
<div id="gram-wrapper">
	<ul id="gram-carousel"></ul>
	<i class="prev-btn fa fa-chevron-left"></i>
	<i class="next-btn fa fa-chevron-right">
		
	</i>
</div>


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"/>


</div>

 <div class = "myslider"> </ div>

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
