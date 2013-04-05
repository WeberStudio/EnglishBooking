<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
				<?php /*?>			<?php do_action( 'twentytwelve_credits' ); ?>
							<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
				<?php */?>		
			<div class="footer_col">
				<div style="float:left; width:100%; margin-left:50px;">
					<div class="footer_menu">
						<ul>
							<li><a href="#">English (US)</a></li>
							<li><a href="#">Español</a></li>
							<li><a href="#">Português (Brasil)</a></li>
							<li><a href="#">Français (France)</a></li>
							<li><a href="#">Deutsch</a></li>
							<li><a href="#">Italiano  </a></li>
						</ul>
					</div>
					<div class="clr"></div>
					<div class="footer_bot">
						English Booking <?php echo date('Y');?>
						<a href="#">English (US) Mobile</a> - 
						<a href="#">Find Friends</a> - 
					</div>					
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>