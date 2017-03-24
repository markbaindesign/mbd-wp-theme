		<!-- Site Footer -->
		<?php do_action( 'baindesign_pre_colophon' ); ?>	
		<footer id="colophon" class="section site-footer" role="contentinfo">
			<div class="container">
				<?php do_action( 'baindesign_colophon' ); ?>
			</div><!-- .container -->
		</footer><!-- #colophon -->
		<?php do_action( 'baindesign_post_colophon' ); ?>
	</div><!-- #page -->
	<?php wp_footer(); ?>
	<?php do_action( 'baindesign_body_bottom' ); ?>
</body>
<?php do_action( 'baindesign_post_body' ); ?>
</html>