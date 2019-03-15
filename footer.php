<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Royal_Event
 */

?>

	</div><!-- #content -->


	<div class="re-up-button-container">
		<a href="#top" onclick='jQuery("html, body").animate({ scrollTop: 0 }, "slow"); return false;'>
			<span><i class="fas fa-angle-up"></i></span>
			<span>Top</span>
		</a>
	</div><!-- #to top button -->


	<footer id="colophon" class="site-footer">

		<div class="site-branding__footer">
			<div class="site-branding__contacts">
				<a href="tel:<?php echo get_theme_mod('dc-phone');?>"><i class="fas fa-phone"></i><?php echo get_theme_mod('dc-phone');?></a>
				<a href="mailto:<?php echo get_theme_mod('dc-email');?>"><?php echo get_theme_mod('dc-email');?></a>
			</div>
			<div class="site-branding__logo">
				<?php the_custom_logo(); ?>
			</div>
			<div class="site-branding__address">
				<span>
					<?php echo __( '123, New Lenox', 'royal-event' ); ?>
					<br>
					<?php echo __( 'Chicago, IL 60606', 'royal-event' ); ?>
				</span>
			</div>
		</div><!-- .site-branding -->

		<div class="site-footer__socials">
			<ul>
				<li>
					<a href="<?php echo get_theme_mod('sn-twitter');?>">
						<img width="15" height="15" src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="Twitter">
					</a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod('sn-facebook');?>">
						<img width="15" height="15" src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="Facebook">
					</a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod('sn-tumblr');?>">
						<img width="15" height="15" src="<?php echo get_template_directory_uri(); ?>/img/tumblr.svg" alt="Tumblr">
					</a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod('sn-instagram');?>">
						<img width="15" height="15" src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="Instagram">
					</a>
				</li>
			</ul>
		</div>

		<div class="site-footer__copy">
			Ancora © 2016 All Rights Reserved <a href="/">Terms of Use</a> and <a href="/">Privacy Policy</a>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
