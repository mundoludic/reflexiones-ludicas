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
<!-- 	<div class="row">
		<div class="large-12 columns">
			<p>&copy; <?php echo date('Y'); ?> Mundo Ludic</p>
		</div>
	</div> -->
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
	})(jQuery);
</script>
	
</body>
</html>