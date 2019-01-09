		<div class="main-header">
			<div class="container">
				<h1 class="main-heading"><?php the_field('text'); ?></h1>
			</div>
		</div>
		<section class="capitals">
			<div class="container flex-container">
			<?php
				// patikriname ar repeater saugo duomenis
				if( have_rows('home_capital_repeater') ):
					// pereiname per kiekviena repeater irasa
					while ( have_rows('home_capital_repeater') ) : the_row();
						// repeater viduje i laukus kreipiames naudodami:
						// the_sub_field('sub_field_name'); - spauzdina
						// get_sub_field('sub_field_name'); - grazina
						$image = get_sub_field('image');
						//<?php the_sub_field('icon'); 
			?>
				<div class="capital">
					<img src="<?php echo $image['sizes']['large']; ?>" alt="">
					<h2 class="name"><?php the_sub_field('name'); ?></h2>
				</div>
			<?php
					endwhile;
				endif;
			?>
			</div>
		</section>