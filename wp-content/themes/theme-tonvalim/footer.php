<footer>
    <div class="copyright">© TON VALIM. ALL RIGHTS RESERVED. DESENVOLVIDO POR 
		<a href="http:agenciaalca.com" >AGÊNCIA ALCA</a>
	</div>        
</footer>  
<?php wp_footer(); 
if ( is_home() ) :
?>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
<?php esle :
	echo 'texte';
	endif; ?>

</body>

</html>