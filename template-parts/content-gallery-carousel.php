<div class="splide gallery-carousel">
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
			<?php
			$carousel_gallery= (get_field('carousel_gallery'));
			foreach( $carousel_gallery as $image ):      
			$small = $image['sizes']['featured-small'];
			$medium = $image['sizes']['featured-medium'];
			$large = $image['sizes']['featured-large']; 
			$xlarge = $image['sizes']['featured-xlarge'];  ?>
			<li class="splide__slide" data-interchange="[<?php echo $small; ?>, small], [<?php echo $medium; ?>, medium], [<?php echo $large; ?>, large], [<?php echo $xlarge; ?>, xlarge]" data-index="<?php echo $counter;?>"></li>
			<?php endforeach; ?>
		</ul>	
	</div>
</div>


			
    