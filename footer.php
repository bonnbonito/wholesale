<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MLA_Wordpress_Theme
 */

?>

				</div><!-- #content -->

				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mla' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'mla' ), 'WordPress' ); ?></a>
						<span class="sep"> | </span>
						<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'mla' ), 'mla', '<a href="http://www.mlawebdesigns.co.uk/" rel="designer">MLA WebDesigns</a>' ); ?>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
