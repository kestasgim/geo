
		<p class = "center">
			<small class="block">&copy; 2018 All Rights Reserved.</small> 
			<small class="block">Designed by <a href="#" >Noob</a></small>
		</p>
		<div class = "center">
		<?php
	// patikriname ar repeater saugo duomenis
if( have_rows('footer_social_menu_repeater', 'option') ):
 	// pereiname per kiekviena repeater irasa
    while ( have_rows('footer_social_menu_repeater', 'option') ) : the_row();
        // repeater viduje i laukus kreipiames naudodami:
        // the_sub_field('sub_field_name');
        // get_sub_field('sub_field_name');
        $link = get_sub_field('link');
		// url - nuoroda
		// title - nuorodos tekstas
		// target - saugomas target atributas
		
		if($link['target']){
			$target = 'target='.$link['target'].'"';
		}else{
			$target = '';
		}
		?>
        <!-- html blokas -->
			<a href="<?php echo $link['url']; ?>" <?php echo $target;?>>
				<i class= "fa <?php the_sub_field('icon'); ?>"></i>
			</a>
        <?php
    endwhile;
endif;
?>
		</div>
	
	<?php wp_footer(); ?>
	</body>
</html>