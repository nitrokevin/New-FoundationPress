<div class="splide slide-carousel">
	<div class="splide__arrows splide__arrows--ltr">
		<button class="splide__arrow splide__arrow--prev" type="button" aria-label="Go to last slide">
		<i class="fa-solid fa-arrow-left-long"></i>
		</button>
		<button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide">
		<i class="fa-solid fa-arrow-right-long"></i>
		</button>
	</div>
	<div class="splide__track">
	<ul class="splide__list">
			<?php if (have_rows('repeater_content_carousel')) { 
				while (have_rows('repeater_content_carousel')) { the_row();
					$carousel_heading = get_sub_field('carousel_heading');
					$carousel_image = get_sub_field('carousel_image');
					$carousel_background_color = get_sub_field('carousel_background_color');
					$carousel_content = get_sub_field('carousel_content');
					if($carousel_image){;
					$small = $carousel_image['sizes']['fp-small'];
					$medium = $carousel_image['sizes']['fp-medium'];
					$large = $carousel_image['sizes']['fp-large'];
					};

					?>
			<li class="splide__slide <?php echo $carousel_background_color ?>">
			<?php if($carousel_image){ ?><div class="image" data-interchange="[<?php echo $small; ?>, small], [<?php echo $medium; ?>, medium], [<?php echo $large; ?>, large]" ></div><?php } ?>
			
				<h3><?php echo $carousel_heading ?></h3>

				<?php echo $carousel_content; ?>
			</li>
			<?php } ?>
			<?php } ?>
		</ul>
	</div>
</div>


			
    