<?php

/**
 * 50 / 50 Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'full-width-50-50-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'full-width-50-50';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$counter=0;
$section_background = get_field('section_background');
$section_background_image = get_field('section_background_image');

if ($section_background_image) {;
$small = $section_background_image['size']['featured-small'];
$medium = $section_background_image['sizes']['featured-medium'];
$large = $section_background_image['sizes']['featured-large'];
};
$left_content = get_field('left_content');
$left_background = get_field('left_background');
$left_overlay = get_field('left_overlay');
$left_background_image = get_field('left_background_image');
$slider_control_left = get_field('slider_control_left');
if ($left_background_image) {;
$left_small = $left_background_image['sizes']['fp-small'];
$left_medium = $left_background_image['sizes']['fp-medium'];
$left_large = $left_background_image['sizes']['fp-large'];
};
$right_content = get_field('right_content');
$right_background = get_field('right_background');
$right_overlay = get_field('right_overlay');
$right_background_image = get_field('right_background_image');
$slider_control_right = get_field('slider_control_right');
if ($right_background_image) {;
$right_small = $right_background_image['sizes']['fp-small'];
$right_medium = $right_background_image['sizes']['fp-medium'];
$right_large = $right_background_image['sizes']['fp-large'];
};
$counter++;

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> full-width-50-50-outer-container <?php echo $section_background; ?>  <?php if ($section_background_image) { ?> section-background-image<?php } ?>" <?php if ($section_background_image) { ?> data-interchange="[<?php echo $small; ?>, small], [<?php echo $medium; ?>, medium], [<?php echo $large; ?>, large]" <?php } ?>>
    <div class="full-width-50-50-container"> 
		<div class="full-width-50-50-grid" >
				
			<article class="<?php echo $left_background; ?> <?php if($left_overlay == 1){?>overlay<?php }?>" <?php if ($left_background_image) { ?> data-interchange="[<?php echo $left_small; ?>, small], [<?php echo $left_medium; ?>, medium], [<?php echo $left_large; ?>, large]" <?php } ?>>	
				<div class="article-padding ">
			    	<div class="article-grid ">
				    <div class="entry-content">
					    <?php echo $left_content; ?>
						
							<?php if ($slider_control_left) {
								echo '<div class="slide-carousel-container">';
						 get_template_part( 'template-parts/content', 'slide-carousel' ); 
						 echo '</div>';
							} ?>
						
				    </div>
				</div>
				</div>
			</article>
			<article class="<?php echo $right_background; ?> <?php if($right_overlay == 1){?>overlay<?php }?>" <?php if ($right_background_image) { ?> data-interchange="[<?php echo $right_small; ?>, small], [<?php echo $right_medium; ?>, medium], [<?php echo $right_large; ?>, large]" <?php } ?>>	
				<div class="article-padding ">
			    	<div class="article-grid ">
				    <div class="entry-content">
					    <?php echo $right_content; ?>
								<?php if ($slider_control_right) {
										echo '<div class="slide-carousel">';
						 get_template_part( 'template-parts/content', 'slide-carousel' ); 
						  echo '</div>';
							} ?>
				    </div>
				</div>
				</div>
			</article>
		
		</div>
	</div>
</section>
