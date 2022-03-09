<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
	<?php
		if ( is_single() ) {
			
		} else { ?>
			<div  class="grid-image"  data-interchange="[<?php the_post_thumbnail_url( 'fp-small' ); ?>, small], [<?php the_post_thumbnail_url( 'fp-small' ); ?>, medium]"></div>
		<?php	the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
		}
	?>
	
	</header>
	<div class="entry-content">
	<?php if ( is_single() ) { 
			the_content();
			} elseif (is_home()) {
			foundationpress_entry_meta();
			} else { the_excerpt();
			} ?>
		
	</div>
	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
	</footer>
</article>
