<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TwentyTwentyOne
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
		<div>text added for Testing</div>
		<div>text added for Testing</div>
		<div>text added for Testing</div>
		<div>text added for Testing</div>
		<div>text added for Testing</div>
		<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'espied' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'espied' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'espied' ), 'Sidespied', '<a href="https://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
