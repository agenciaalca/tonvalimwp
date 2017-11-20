<footer>
    <div class="copyright">© TON VALIM. ALL RIGHTS RESERVED. DESENVOLVIDO POR 
		<a href="http:agenciaalca.com" >AGÊNCIA ALCA</a>
	</div>        
</footer>  

<?php wp_footer(); ?>


  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {

      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      
    });
</script>

</body>

</html>