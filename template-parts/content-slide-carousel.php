<div class="swiper slide-carousel">
    <div class="swiper-button-prev" aria-label="Go to previous slide"></div>
    <div class="swiper-button-next" aria-label="Next slide"></div>
	  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

    <div class="swiper-wrapper">
        	<?php if ((have_rows('repeater_content_carousel_left') ) ||  (have_rows('repeater_content_carousel') )) { 
            while ((have_rows('repeater_content_carousel_left')) || (have_rows('repeater_content_carousel')) ){ the_row();
                $carousel_heading = get_sub_field('carousel_heading');
                $carousel_image = get_sub_field('carousel_image');
                $carousel_background_color = get_sub_field('carousel_background_color');
                $carousel_content = get_sub_field('carousel_content');
                if($carousel_image){
                    $small = $carousel_image['sizes']['fp-small'];
                    $medium = $carousel_image['sizes']['fp-medium'];
                    $large = $carousel_image['sizes']['fp-large'];
                };
                ?>
                <div class="swiper-slide <?php echo esc_attr($carousel_background_color); ?>">
                   <div class="info">
				<h3><?php echo $carousel_heading ?></h3>

				<?php echo $carousel_content; ?>
			</div>
				<?php if($carousel_image){ ?>
				<div class="image image-decoration">
				<img src="<?php 
					$image_src = wp_get_attachment_image_url($image['id'], 'square');
					$image_srcset = wp_get_attachment_image_srcset($image['id'], 'square');
					echo esc_url($image_src); ?>"
					srcset="<?php echo esc_attr($image_srcset); ?>"
					sizes="(max-width: 100vw) 480px" alt="<?php echo $image['alt']; ?> "/>
			</div>
			<?php } ?>
                </div>
            <?php } ?>
        <?php } ?>

			<?php if (have_rows('repeater_content_carousel_right') ) { 
				while (have_rows('repeater_content_carousel_right')) { the_row();
					$carousel_heading = get_sub_field('carousel_heading');
					$image = get_sub_field('carousel_image');
					$carousel_background_color = get_sub_field('carousel_background_color');
					$carousel_content = get_sub_field('carousel_content');
					if($image){;
					$small = $image['sizes']['small-square'];
					$medium = $image['sizes']['square'];
					
					};

					?>
			 <div class="swiper-slide <?php echo esc_attr($carousel_background_color); ?>">
			<div class="info">
				<h3><?php echo $carousel_heading ?></h3>

				<?php echo $carousel_content; ?>
			</div>
				<?php if($carousel_image){ ?>
				<div class="image image-decoration">
				<img src="<?php 
					$image_src = wp_get_attachment_image_url($image['id'], 'square');
					$image_srcset = wp_get_attachment_image_srcset($image['id'], 'square');
					echo esc_url($image_src); ?>"
					srcset="<?php echo esc_attr($image_srcset); ?>"
					sizes="(max-width: 100vw) 480px" alt="<?php echo $image['alt']; ?> "/>
			</div>
			<?php } ?>
			</li>
			
			<?php } ?>
			<?php } ?>
    </div>
</div>
