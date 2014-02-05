<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" id="content" role="main">
	
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title">
					<?php
			      		if (get_bloginfo('language')=="es-ES"){
			                _e('Upppsss... parece que no hemos encontrado la página que buscas!', 'reverie');
			            }else{
			                _e('Upppsss... sembla que no hem trobat la pàgina que busques!', 'reverie');
						}
					?>
				</h1>
			</header>
			<div class="entry-content">
				<div class="error">
					<p class="bottom">
						<?php
				      		if (get_bloginfo('language')=="es-ES"){
				                _e('Tal vez haya cambiado o el vínculo este roto.', 'reverie');
				            }else{
				                _e('Pot ser que n’hagi canviat o l’enllaç està trencat.', 'reverie');
							}
						?>
					</p>
				</div>
				<p>
					<?php
				      	if (get_bloginfo('language')=="es-ES"){
				               _e('Puedes acceder a los siguientes sitios:', 'reverie');
				           }else{
				               _e('Pots accedir als següents llocs:', 'reverie');
						}
					?>
				</p>
				<ul> 
					<!-- <li><?php _e('Check your spelling', 'reverie'); ?></li> -->
					<li>
						<?php
					      	if (get_bloginfo('language')=="es-ES"){
					               printf(__('Vuelve a la página de inicio del blog <a href="%s">Blog</a>', 'reverie'), home_url());
					           }else{
					               printf(__('Torna a la pàgina d’inici del <a href="%s">Blog</a>', 'reverie'), home_url());
							}
						?>
					</li>
					<li>
						<?php
					      	if (get_bloginfo('language')=="es-ES"){
					               printf(__('Ver actividades en la <a href="http://www.mundoludic.com">Home</a> de Mundo Ludic', 'reverie'));
					           }else{
					               printf(__('Veure activitats a la <a href="http://www.mundoludic.com">Home</a> de Mundo Ludic', 'reverie'));
							}
						?>
					</li>
					<li>
						<?php
					      	if (get_bloginfo('language')=="es-ES"){
					               _e('<a href="javascript:history.back()">Volver</a> a la última página visitada.', 'reverie');
					           }else{
					               _e('<a href="javascript:history.back()">Tornar</a> a la darrera pàgina visitada', 'reverie');
							}
						?>
					</li>
				</ul>
			</div>
		</article>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>