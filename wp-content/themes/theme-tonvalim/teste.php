<?php

$numeroAleatorio = mt_rand( 1, 4 );
$caminho = bloginfo( 'template_directory' );

switch ( $numeroAleatorio ) {
	case 1:
		?>
		<link rel="stylesheet" type="text/css" href="<?php $caminho; ?> /assets/css/cor1.css" />';
		<?php break;
	case 2:
		?>
		<link rel="stylesheet" type="text/css" href="<?php $caminho; ?> /assets/css/cor2.css" />
		<?php break;
	case 3:
	?>
		<link rel="stylesheet" type="text/css" href="<?php $caminho; ?> /assets/css/cor3.css" />
		<?php break;
	case 4:
	
		echo "";
}