<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<header class="header-container">
	<div class="header-text-content">
		<div class="header-content">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="header-image-content">
		<?php get_template_part( 'template-parts/featured-image' ); ?>
	</div>
</header>
<?php get_template_part( 'template-parts/share-links' ); ?>
<div class="main-container">
	<div class="main-grid">
	<?php if ( !empty( get_the_content() ) ) {?> 
		<main class="main-content-full-width">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; ?>
		</main>
		<?php } ?>
		<?php if (have_rows('sidebar_sections')) : ?>
		
			<aside class="sidebar">
		
				<?php while (have_rows('sidebar_sections')) : the_row();
					get_template_part('template-parts/acf-sidebar-content');
						get_template_part('template-parts/acf-shortcode');
				endwhile; ?>
		
					</aside>
				
			<?php endif;?>
	</div>
</div>

<?php
if (have_rows('sections')) :
	while (have_rows('sections')) : the_row();
		get_template_part('template-parts/flexible-layout-article');
		get_template_part('template-parts/acf-cta');
		get_template_part('template-parts/acf-tabs');
	endwhile;
endif;
?>
<?php
get_footer();
