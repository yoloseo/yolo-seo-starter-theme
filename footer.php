<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yolo Seo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" itemtype="http://schema.org/WPFooter" itemscope="itemscope" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'yolo-seo' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'yolo-seo' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'yolo-seo' ), 'yolo-seo', '<a href="http://yoloseo.com" rel="designer">Yolo Seo</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
