		</div>
		<br />
		<footer class="footer" role="contentinfo">

						<small class="copyright">
							&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
							&nbsp;&nbsp;
							<?php _e('powered by', 'html5blank'); ?>
							<a href="//wordpress.org" title="WordPress">wordpress</a>
							&nbsp;&nbsp; dwightgnjohnson@gmail.com
						</small>
		</footer>

		<!-- menu -->
		<aside>
			<img id="main_menu" alt="face menu" src="<?php echo get_template_directory_uri() . '/img/face.png'; ?>" />

			<div id="sidebar_nav" class="hide">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div>
		</aside>
		<!-- /menu -->
		<script type="text/javascript">
		    var feed = new Instafeed({
		        get: 'tagged',
		        tagName: 'awesome',
		        clientId: '4bbacd51732e48d7977b4cda20dbc147',
		        template: '<a href="{{link}}"><img src="{{image}}" /></a>'
		    });
		    feed.run();
		</script>
	</body>
</html>
