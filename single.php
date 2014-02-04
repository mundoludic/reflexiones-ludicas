<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php the_date(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p class="entry-tags"><?php the_tags(); ?></p>
				<?php edit_post_link('Edit this Post'); ?>
			</footer>
		</article>
		<!-- AddToAny BEGIN -->
			<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
			<a class="a2a_dd" href="http://www.addtoany.com/share_save"></a>
			<a class="a2a_button_facebook"></a>
			<a class="a2a_button_twitter"></a>
			<a class="a2a_button_google_plus"></a>
			<a class="a2a_button_linkedin"></a>
			<a class="a2a_button_email"></a>
			</div>
			<script type="text/javascript">
			var a2a_config = a2a_config || {};
			a2a_config.locale = "es";
			a2a_config.color_main = "D7E5ED";
			a2a_config.color_border = "AECADB";
			a2a_config.color_link_text = "333333";
			a2a_config.color_link_text_hover = "333333";
			</script>
			<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
		<!-- AddToAny END -->
		<!-- <div class="entry-author panel">
			<div class="row">
				<div class="large-3 columns">
					<?php echo get_avatar( get_the_author_meta('user_email'), 95 ); ?>
				</div>
				<div class="large-9 columns">
					<h4><?php the_author_posts_link(); ?></h4>
					<p class="cover-description"><?php the_author_meta('description'); ?></p>
				</div>
			</div>
		</div> -->
		<br>
		<?php comments_template(); ?>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>