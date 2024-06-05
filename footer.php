<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$footer_phone = get_theme_mod('footer_phone_number');
$footer_email = get_theme_mod('footer_email');
$footer_company_number = get_theme_mod('footer_company_number');
$footer_copyright = get_theme_mod('footer_copyright');
$footer_address_1 = get_theme_mod('footer_address_1');
$footer_address_2 = get_theme_mod('footer_address_2');
$footer_address_3 = get_theme_mod('footer_address_3');
$footer_address_4 = get_theme_mod('footer_address_4');
$footer_address_5 = get_theme_mod('footer_address_5');
$footer_address_6 = get_theme_mod('footer_address_6');
$footer_background_image = get_theme_mod('footer_background_image');
if($footer_background_image){;
$small = wp_get_attachment_image_url( $footer_background_image, 'fp-small' ); ;
$medium =  wp_get_attachment_image_url( $footer_background_image, 'fp-medium' );
$large = wp_get_attachment_image_url( $footer_background_image, 'fp-large' );
$xlarge = wp_get_attachment_image_url( $footer_background_image, 'fp-xlarge' );
};

?>

<footer class="footer"  <?php if ($footer_background_image) { ?> data-interchange="[<?php echo $small; ?>, small], [<?php echo $medium;?>, medium], [<?php echo $large;?>, large], [<?php echo $xlarge;?>, xlarge]"<?php } ?> >
<div class="footer-container">
	<div class="footer-grid">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
	</div>
	<div class="footer-grid">

		<section>
		<?php foundationpress_footer_nav_l(); ?>
			<ul class="footer-contact menu  footer-menu">
				<li><?php echo $footer_address_1 ?></li>
				<li><?php echo $footer_address_2 ?> </li>
				<li><?php echo $footer_address_3 ?> </li>
				<li><?php echo $footer_address_4 ?> </li>
				<li><?php echo $footer_address_5 ?></li>
				<li><?php echo $footer_address_6 ?></li>
				<li><?php echo '&copy; ' . esc_attr(get_bloginfo('name', 'display')) .' ' . mysql2date('Y', get_user_option('user_registered', 1)) .  '-' .  date('Y') . "." ;?></li>
			</ul>
		
		</section>
		<section>
			<ul class="social-links menu  footer-menu align-center">
				<?php if (get_theme_mod('social-facebook')) : ?>
					<li><a href="<?php echo esc_url(get_theme_mod('social-facebook-url')); ?> " rel="noreferrer"  target="_blank" aria-label="Facebook">
							<i class="fab fa-facebook-f fa-fw"></i>
						</a></li>
				<?php endif; ?>
						<?php if (get_theme_mod('social-x')) : ?>
					<li><a href="<?php echo esc_url(get_theme_mod('social-x-url')); ?>" rel="noreferrer" target="_blank" aria-label="X">
							<i class="fab fa-x-twitter fa-fw"></i>
						</a></li>
				<?php endif; ?>
				<?php if (get_theme_mod('social-instagram')) : ?>
					<li><a href="<?php echo esc_url(get_theme_mod('social-instagram-url')); ?>" rel="noreferrer" target="_blank" aria-label="Instagram">

							<i class="fab fa-instagram fa-fw"></i>
						</a></li>
				<?php endif; ?>
				<?php if (get_theme_mod('social-linkedin')) : ?>
					<li><a href="<?php echo esc_url(get_theme_mod('social-linkedin-url')); ?>" rel="noreferrer" target="_blank" aria-label="LinkedIn">

							<i class="fab fa-linkedin-in fa-fw"></i>
						</a></li>
				<?php endif; ?>
				<?php if (get_theme_mod('social-pinterest')) : ?>
					<li><a href="<?php echo esc_url(get_theme_mod('social-pinterest-url')); ?>" rel="noreferrer" target="_blank" aria-label="Pinterest">
							<i class="fab fa-pinterest fa-fw"></i>
						</a></li>
				<?php endif; ?>
			</ul>
		</section>
		<section>
		<?php foundationpress_footer_nav_r(); ?>
		<?php
		$footer_links = get_theme_mod( 'footer_links' );
		 if($footer_links) {?>
		<div class="footer-links">
			<?php 
				foreach ( $footer_links as $footer_link ) : ?>
				<a href="<?php $footer_link['link_url']; ?>">
					<?php echo wp_get_attachment_image($footer_link['footer_image'], 'thumbnail','false',["class" => "footer-icon"] ); ?>
				</a>
			<?php endforeach; ?>
		</div>
		<?php } ?>
		</section>
	</div>
</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>