<div class="splide people-carousel">

	<div class="splide__track">
		<ul class="splide__list">
			<?php if (have_rows('people_repeater','option')) { 
				while (have_rows('people_repeater','option')) { the_row();
					$group = get_sub_field('group');
					$name = get_sub_field('name');
					$job = get_sub_field('job');
					$biography = get_sub_field('biography');
					$image = get_sub_field('image');
					if($image){
					$small = $image['sizes']['fp-small'];
					$medium = $image['sizes']['fp-medium'];
					$large = $image['sizes']['fp-large'];
					}

					?>
			<li class="splide__slide">
				<div class="image" data-interchange="[<?php echo $small; ?>, small], [<?php echo $small; ?>, medium]"></div>
			<div class="info">
			<?php if($name){ ?>
				<h5><?php echo $name; ?></h5>
				<?php } ?>
			<?php if($job){?>
				<p><?php echo $job; ?></p>
				<?php } ?>
				<?php if($biography){?>
				<p><?php echo $biography; ?></p>
				<?php } ?>
		
			</div>
			</li>
			<?php } ?>
			<?php } ?>
		</ul>
	
	
	</div>
	<div class="splide__arrows splide__arrows--ltr">
		<button class="splide__arrow splide__arrow--prev" type="button" aria-label="Go to last slide" aria-controls="splide03-track">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><polygon points="23.82 11.33 31.69 19.2 5.23 19.2 5.23 20.8 31.69 20.8 23.82 28.67 24.96 29.81 34.77 20 24.96 10.19 23.82 11.33" /></svg>
	
		</button>
		<button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide" aria-controls="splide03-track">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><polygon points="23.82 11.33 31.69 19.2 5.23 19.2 5.23 20.8 31.69 20.8 23.82 28.67 24.96 29.81 34.77 20 24.96 10.19 23.82 11.33" /></svg>
	
		</button>
	</div>
</div>