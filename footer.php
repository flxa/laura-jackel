<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package laura_jackel
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'laura_jackel_credits' ); ?>
			&copy; <?php echo date('Y'); ?> Laura Jackel
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- .story-content -->	
</div><!-- .story-container -->
</div><!-- #page-container -->
<?php wp_footer(); ?>
</body>
</html>