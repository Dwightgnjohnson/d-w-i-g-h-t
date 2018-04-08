<?php /* Template Name: d-w-i-g-h-t Template */ get_header(); ?>

	<main role="main">

		<div class="row center-xs">

			<div class="col-xs-3">
				<div class="test box">
				<?php wp_nav_menu( array( 'menu' => 'categories' ) ); ?>
			  </div>
			</div>

			<div class="col-xs-9">
				<div class="test box">
					<br class="clear">

					<!-- <div id="homepage_nav" class="hide">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</div> -->
					<div id="container">
						<div id="content" role="main">

						<?php
						// get all the categories from the database
						$cats = get_categories();

							// loop through the categries
							foreach ($cats as $cat) {
								// setup the cateogory ID
								$cat_id= $cat->term_id;
								// Make a header for the cateogry
								echo "<h2>".$cat->name."</h2>";
								// create a custom wordpress query
								query_posts("cat=$cat_id&posts_per_page=100");
								// start the wordpress loop!
								if (have_posts()) : while (have_posts()) : the_post(); ?>
							 <div class="row middle-xs">
                <div class="col-xs-3">
                    <div class="test box">
											<a href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail( $post_id, array( 100, 100), array('class' => 'homepage_feature_image') ); ?></a>
										</div>
                </div>
								<div class="col-xs-9">
										<div class="test box">
											<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
										</div>
								</div>
							</div>

									<?php echo '<hr/>'; ?>

								<?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
							<?php } // done the foreach statement ?>

						</div><!-- #content -->
					</div><!-- #container -->




				</div>
			</div>
			<div class="col-xs-3">
				<?php// include 'instagram_feed.php';?>
			</div>
		</div>
		<br class="clear">
		<br class="clear">
	</main>
<?php get_footer(); ?>
