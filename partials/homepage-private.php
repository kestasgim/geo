<?php
	//kuriame uzklasos parametrus
	$query = [
		'cat' => get_field('private_event_category'),
		'posts_per_page' => get_field('limit')
	];
	//vykdome uzklausa i DB pagal nurodytus parametrus
	//rezultata issaugome
	$result = new WP_Query($query);
	
	//dump($result);
	if ( $result->have_posts() ):
		while ( $result->have_posts() ):
			$result->the_post();
			?>
			<!-- html blokas -->
			<div>
				<img src="<?php the_post_thumbnail_url('large')?>"> 
				<span>
					<a href="<?php the_permalink(); ?>"><?php the_title();?>
					</a>
					<span> <?php echo get_the_category_list(', ')?> </span>
				</span>
			</div>
			<?php
			//break;
		endwhile; // end while
	endif; // end if
	//atstatome puslapio uzklausa i pradine
	wp_reset_postdata();
	
?>