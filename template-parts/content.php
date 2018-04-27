<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail() && is_singular()) the_post_thumbnail(); ?>
	<header class="entry-header">
		<?php
		if ( is_singular() ):
			the_title( '<h1 class="entry-title">', '</h1>' );
		else:
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		endif; ?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>