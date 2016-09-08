<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<?php dynamic_sidebar('footer') ?>
	</footer><!-- #colophon -->
    <div class="clr"></div>
    <footer id="lower-footer">
        <?php wp_nav_menu(['theme_location' => 'lower-footer']) ?>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
