<?php get_header(); ?>
<h1> ARCHIVE </h1>
<?php 
	#gauname uzklausos objekta, t.y. duomenis, kuriuos
	//WP paprase gauti is D
	$category = get_queried_object();
	//$image = get_field('image', $category);
	echo $category->name;
	echo $category->description;
?>
<?php
if ( have_posts() ):
    while ( have_posts() ):
        the_post();
        ?>
        <!-- html blokas -->
		<div style="background-image: url(<?php the_post_thumbnail_url('large')?>);">
			<a href="<?php the_permalink();?>"> <?php the_title();?></a>
			<br/>
			<?php the_excerpt();?>
		</div>
		
        <?php
    endwhile; // end while
endif; // end if
?>
<div>
	<?php echo paginate_links();?>
</div>
<?php get_footer(); ?>