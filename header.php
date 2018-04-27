<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); //wp:n funktioiden head-osioon tarvitsemat koodit ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
	<header class="site-header row">
		<div class="col-sm-3">
			<div class="site-logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" />
			</a>
			</div>
		</div>
		<div class="col-sm-9">
			<nav>
				<?php wp_nav_menu( ['theme_location' => 'primary'] );?>
			</nav>
		</div>
		<div class="col-sm-12"><hr></div>
	</header>
	<div class="row">