<footer>
	<nav>
		<?php 
			$args = array ('theme_location' => 'footer_menu');
			wp_nav_menu($args); 
		?>
	</nav>
	&copy; <?php bloginfo('name'); echo " - " . date('Y'); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>