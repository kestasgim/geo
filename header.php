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
			?>
			<label for="show-menu" class="show-menu">Show Menu</label>
			<input type="checkbox" id="show-menu" role="button">
			<?php
				wp_nav_menu($args);
			?>
			<BR>
			<br>
		</nav>