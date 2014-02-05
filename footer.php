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
        <a href="#/"><img class="logo-foot" src="<?php echo get_template_directory_uri(); ?>/images/logo-empty.png"></a>
      	</div>
      	<div class="small-12 large-12 columns text-center slogan slogan-foot">
        	<h3>Mueve el mundo <strong class="mundoludic">MUNDO LUDIC</strong></h3>
      	</div>
	</div>
	<div class="row">
		<div class="small-12 large-12 columns">

	          <div class="small-6 large-6 columns">
	            <p>&copy; <?php echo date('Y'); ?> Mundo Ludic</p>
	          </div>
	        <div class="small-6 large-6 columns text-right social-foot">
	          <a href="https://www.facebook.com/mundoludic.Page" target="_blank"><img class="facebook-grey" src="<?php echo get_template_directory_uri(); ?>/images/icons/social-icon-empty.png"></a>
	          <a href="https://twitter.com/MundoLudic" target="_blank"><img class="twitter-grey" src="<?php echo get_template_directory_uri(); ?>/images/icons/social-icon-empty.png"></a>
	        </div>

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
	
</body>
</html>