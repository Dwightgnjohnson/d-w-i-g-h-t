<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="row center-xs">
				<div class="col-md-12">
					<div class="box">
						<h1 id="page_title" class="page_title"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
			<br class="clear">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
