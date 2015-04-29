</div>
<footer>
	<?php if (!is_single() && !is_page() && (is_active_sidebar('footer-left') || is_active_sidebar('footer-middle') || is_active_sidebar('footer-right'))) : ?>
	<div id="footer-widgets">
		<div class="container">
			<div class="col-md-4">
				<?php dynamic_sidebar('footer-left'); ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar('footer-middle'); ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar('footer-right'); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div id="footer-meta">
		<div class="container">
			<div class="col-md-12">
				<?php wp_nav_menu(array('theme_location' => 'footer','depth' => 1,'container' => false,'fallback_cb' => false)); ?> 
				<p><?php _e('Copyright &copy; ', 'griffin'); echo the_time('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>   
</body>
</html>