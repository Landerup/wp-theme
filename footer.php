<footer>
	<?php wp_nav_menu( [
		'theme_location' => 'footer',
		'container' => 'nav',
	] ); ?>
	<?php get_template_part('template-parts/footer/site', 'footer'); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
