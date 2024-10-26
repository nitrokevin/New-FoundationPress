<?php

/**
 * Carousel Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'carousel-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-carousel';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
$carousel_type = get_field('carousel_type');
$section_background = get_field('section_background');

?>
<section id="<?php echo esc_attr($id); ?>" class="wp-block <?php echo esc_attr($className); ?>  <?php echo $carousel_type; ?>   <?php echo $section_background; ?> " >
    <div class="block-carousel-container "> 
		<div class="block-carousel-grid" >
			<div class="block-carousel-content" >
		
	<?php if($carousel_type == 'people-carousel'){
		 get_template_part('template-parts/content', 'people-carousel'); 
		 } if($carousel_type == 'slide-carousel'){ 
			 get_template_part('template-parts/content', 'slide-carousel'); 

		 } if($carousel_type == 'gallery-carousel'){ 
			
			get_template_part('template-parts/content', 'gallery-carousel'); 

		} ?>
			</div>
	</div>
</section>
