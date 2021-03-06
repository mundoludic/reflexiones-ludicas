<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title>El Blog <?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Google schema microdata -->
    <script type="application/ld+json">
        {
          "@type": "http://schema.org/EntertainmentBusiness",
          "http://schema.org/aggregateRating": {
            "@type": "http://schema.org/AggregateRating",
            "http://schema.org/ratingValue": "5",
            "http://schema.org/reviewCount": "137"
          },
          "http://schema.org/description": "Blog sobre actividades para niños: fiestas infantiles, talleres educativos, propuestas culturales y lúdicas... Reflexiones más que lúdicas para familias inteligentes.",
          "http://schema.org/email": "mailto:info@mundoludic.com",
          "http://schema.org/name": "Blog de Mundo Ludic | Reflexiones más que lúdicas",
          "http://schema.org/telephone": "668804150",
          "http://schema.org/url": {
            "@id": "http://www.mundoludic.com/blog"
          }
        }
    </script>
	<!-- Fin Google schema microdata -->

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/icons/foundation-icons.css" />

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />

<?php wp_head(); ?>

</head>

<body <?php body_class('antialiased'); ?>>

<!-- <header class="contain-to-grid"> -->
	<!-- Starting the Top-Bar -->
	<div id="menu" class="fixed">
	<nav class="top-bar sticky" data-topbar>
	    <ul class="title-area">
	        <li class="name">
	        	<h1><a href="http://www.mundoludic.com" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class="logo-top-bar" src="<?php echo get_template_directory_uri(); ?>/images/icons/logoTopBarEmpty.png" title="Mundo Ludic">MUNDO LUDIC</a></h1>
	        </li>

			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<!-- <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li> -->
	    </ul>
	    <section class="top-bar-section">
	    	<ul>
	    		<li><a href="http://www.mundoludic.com"><i class="fi-thumbnails"></i>Actividades</a></li>
	    		<li><a href="http://www.mundoludic.com/zona-proveedores/"><i class="fi-widget"></i>Acceso artistas</li>
	    	</ul>
	    	<ul class="right">
	    		<li><a href="http://www.mundoludic.com/#/quienes-somos">Quienes somos</a></li>
	    		<li><a href="http://www.mundoludic.com/#/preguntas-frecuentes">Preguntas frecuentes</a></li>
	    	</ul>
	    <?php
	        // wp_nav_menu( array(
	        //     'theme_location' => 'primary',
	        //     'container' => false,
	        //     'depth' => 0,
	        //     'items_wrap' => '<ul class="left">%3$s</ul>',
	        //     'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	        //     'walker' => new reverie_walker( array(
	        //         'in_top_bar' => true,
	        //         'item_type' => 'li',
	        //         'menu_type' => 'main-menu'
	        //     ) ),
	        // ) );
	    ?>
	    <?php
	    	// Uncomment the following to enable the right menu (additional menu)
			
	    	/*
	        wp_nav_menu( array(
	            'theme_location' => 'additional',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="right">%3$s</ul>',
	            'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li',
	                'menu_type' => 'main-menu'
	            ) ),
	        ) );
	        */
	    ?>
	    </section>
	</nav>
	</div>
	<!-- End of Top-Bar -->
<!-- </header> -->

    <!-- HEAD -->
    <div class="container">
      <div id="head" class="small-12 large-12 columns">

        <div class="small-12 large-12 columns social-head">

          <div class="small-6 large-6 columns switch-lang">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>es/">Castellano</a><a href="<?php echo esc_url( home_url( '/' ) ); ?>ca/">Català</a>
          </div>
        <div class="small-6 large-6 columns text-right">
          <a href="https://www.facebook.com/mundoludic.Page" target="_blank"><img class="facebook" src="<?php echo get_template_directory_uri(); ?>/images/icons/social-icon-empty.png"></a>
          <a href="https://twitter.com/MundoLudic" target="_blank"><img class="twitter" src="<?php echo get_template_directory_uri(); ?>/images/icons/social-icon-empty.png"></a>
        </div>

      </div>

      <div class="small-12 large-12 columns text-center">
        <a href="http://www.mundoludic.com"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-empty.png"></a>
      </div>

      <div class="small-12 large-12 columns text-center slogan">
        <h3>Reflexiones más que lúdicas.</h3> <h2>El blog de</h2><h1>&nbsp;<a href="http://www.mundoludic.com" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">MUNDO LUDIC</a></h1>
        <h5><a href="http://www.mundoludic.com">Actividades para tus fiestas infantiles</a></h5>
      </div>

      </div>
    </div>

<!-- Start the main container -->
<div class="container" role="document">
	<div class="row">