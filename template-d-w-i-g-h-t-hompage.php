<?php /* Template Name: d-w-i-g-h-t Template */ get_header(); ?>

	<main role="main">

		<div class="row center-xs">
			<div class="col-md-12">
				<div class="box">
					<br class="clear">

					<div id="homepage_nav" class="hide">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</div>



				</div>
			</div>
		</div>
		<br class="clear">
		<br class="clear">
	</main>
	<img id="home_neopolitan_svg" alt="icecream cone" class="home_neopolitan_svg" src="<?php echo get_template_directory_uri() . '/img/neopolitan.svg'; ?>" />
<?php get_footer(); ?>
