<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="row">
			<div class="col-xs-12">
				<h1><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
			</div>

			<div class="col-xs-2">
				<?php wp_nav_menu( array( 'menu' => 'categories' ) ); ?>
			</div>

			<div class="col-xs-10">


			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
		</div>

	</div>
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
