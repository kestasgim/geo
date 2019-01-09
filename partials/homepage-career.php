 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
 <?php
	if( have_rows('career_slides_repeater') ):
		while ( have_rows('career_slides_repeater') ) : the_row();
			$image = get_sub_field('image'); 
?>	
	<div class="mySlides fade">
    <div class="numbertext"></div>
		<img src="<?php echo $image['sizes']['large']; ?>" style="width:100%">
		<div class="text"><?php the_sub_field('title'); ?></div>
	</div>
<?php
		endwhile;
	endif;
?>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> 
