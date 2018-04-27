<?php get_header(); ?>
	<div class="content-area col-md-8">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ):
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;
			the_posts_navigation();
		endif; ?>

		</main>
	</div>
<?php
get_sidebar();
get_footer();