	</div><!-- Row End -->
</div><!-- Container End -->

<div class="full-width footer-widget">
	<div class="row">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</div>

<footer class="full-width" role="contentinfo">
	<div class="row">
		<div class="small-12 large-12 columns text-center">
        <a href="http://www.mundoludic.com"><img class="logo-foot" src="<?php echo get_template_directory_uri(); ?>/images/logo-empty.png"></a>
      	</div>
      	<div class="small-12 large-12 columns text-center slogan slogan-foot">
        	<h3>Mueve el mundo <strong class="mundoludic">MUNDO LUDIC</strong></h3>
      	</div>
	</div>
	<div class="row">
		<div class="small-12 large-12 columns">

	          <div class="small-6 large-6 columns">
	            <p>&copy; <?php echo date('Y'); ?> <a href="http://www.mundoludic.com"> Mundo Ludic</a> </p>
	          </div>
	        <div class="small-6 large-6 columns text-right social-foot">
	          <a href="https://www.facebook.com/mundoludic.Page" target="_blank"><img class="facebook-grey" src="<?php echo get_template_directory_uri(); ?>/images/icons/social-icon-empty.png"></a>
	          <a href="https://twitter.com/MundoLudic" target="_blank"><img class="twitter-grey" src="<?php echo get_template_directory_uri(); ?>/images/icons/social-icon-empty.png"></a>
	        </div>

	      </div>
      </div>
	<div class="row">
		<div class="small-12 large-12 columns text-center">
           	<h6><font size="2">Artistas para fiestas infantiles en Madrid y Barcelona. Espectáculos para cumpleaños y celebraciones: cuentacuentos, payasos, músicos, cantantes, magos, títeres, marionetas, talleres para niños, teatro, juegos, sorpresas, animación infantil, fiestas temáticas, decoración con globos, actividades para niños, escuelas y grupos...</font></h6>
      	</div>
	</div>	  
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();

		// cambiamos el estilo al boton de subscribete de RSS

		$('#BFW_submit').addClass('button tiny');

		$('#BFW').append('<hr><br><a href="http://feeds.feedburner.com/MundoLudic"><i class="fi-rss"></i><h6>Subscríbite al rss del blog</h6></a>');

		var lang = "<?php echo(get_bloginfo('language')) ?>";

		if(lang=="es-CA"){
			$('#BFW').attr("onsubmit","window.open('http://feedburner.google.com/fb/a/mailverify?uri=MundoLudic-ca', 'popupwindow', 'scrollbars=yes,width=550,height=520')");
		}

	})(jQuery);
</script>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44080229-1', 'mundoludic.com');
  ga('send', 'pageview');

</script>
	
</body>
</html>