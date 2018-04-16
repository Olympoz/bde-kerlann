<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jokers
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="row footer_row">

			<div class="col-sm-6 ">

				bonjour

			</div>

			<div class="col-sm-6">

				bonjour

			</div>

		</div>








		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jokers' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'jokers' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jokers' ), 'jokers', '<a href="http://bde-kerlann.fr/">jokers dev</a>' );
			?>
		</div><!-- .site-info -->



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
