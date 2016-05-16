<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package susanne-german-tutoring
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer smallPart" role="contentinfo">
		<div class="site-info">
			<div id="footer-sidebar" class="secondary">
				<div id="footer-sidebar1">
					<?php
						if(is_active_sidebar('footer-sidebar-1')){
							dynamic_sidebar('footer-sidebar-1');
						}
					?>
				</div>
				<div id="footer-sidebar2">
					<?php
						if(is_active_sidebar('footer-sidebar-2')){
							dynamic_sidebar('footer-sidebar-2');
						}
					?>
				</div>
				<div id="footer-sidebar3">
					<?php
						if(is_active_sidebar('footer-sidebar-3')){
							dynamic_sidebar('footer-sidebar-3');
						}
					?>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<a href="#top" id="toTop"><i class="fa fa-angle-up fa-3x"></i></a>
<?php wp_footer(); ?>

</body>
</html>
