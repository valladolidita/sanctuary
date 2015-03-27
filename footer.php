<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sanctuary
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
        	<nav class="social-media">
    			<ul>
    			    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
      				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
      				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
      				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
    			</ul>
  			</nav>

  			<nav class="footer-copyright">
    			<ul>
      				<li>© copyright Sanctuary Eco-Retreat 2015</li>
    			</ul>
  			</nav>

<!--

			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'sanctuary' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'sanctuary' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'sanctuary' ), 'sanctuary', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
