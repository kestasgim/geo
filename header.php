<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo('charset');?>">
	<title><?php wp_title() ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	</head>
	<body>
		

	<nav>
						<?php
						//nav menu
						$args = [
						'menu_class' => 'ul elemento klases',
						'container' => false,
						'theme_location' => 'primary-navigation'
						];
						wp_nav_menu($args);
						?>
	</nav>