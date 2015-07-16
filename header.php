<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/app.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/normalize.css'; ?>">

	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<header class="header clear" role="banner">

		<div class="header--wrapper">

			<div class="header--wrapper--icon">
				<?php get_template_part('partials/svg-icon'); ?>
			</div>

			<div class="header--wrapper--menu">
				<a href="#" class="menu__toggle button button--nav icon-menu"></a>
			</div>

		</div>
		</nav>
	</header>
<?php get_template_part('partials/nav'); ?>