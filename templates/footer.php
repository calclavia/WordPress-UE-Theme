<div class="footerwrap bluewrap">
	<footer class="content-info container" role="contentinfo">
		<div class="spacer"></div>
		<div class="row">
			<div class="col-lg-12 section-header">
				<?php dynamic_sidebar('sidebar-footer'); ?>
				<p>Content &copy; 2010-<?php echo date('Y'); ?> Calclavia - About - Copyright - Terms of Use - Login<br />
				Site Design &copy; <?php echo date('Y'); ?> Tyrantelf<br />
				Proudly Powered by Wordpress</p>
				<div class="spacer"></div>
				<div class="no-underline"><a class="no-underline" href="https://www.creeperhost.net/"><img class="sponsor" src="<?php echo get_template_directory_uri(); ?>/assets/img/creeper-host.png" /></a></div>
				<div class="spacer"></div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>
