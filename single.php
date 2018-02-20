<?php get_header(); ?>
	<main role="main">

	<!-- single content end-->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<figure id="single_featureimage" class="full-width">
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

					<?php the_post_thumbnail(); // Fullsize image for the single post ?>

			<?php endif; ?>
			</figure>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1 class="single_title center"><?php the_title(); ?></h1>
			<!-- /post title -->

			<!-- post details -->
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Nothing here yet', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

</section>
<!-- single content end-->
<!-- pagination start -->

<div id="single_previousnext" class="full-width row">
	<div class="col-xs">
		<div class="box-row">
			<div class="single_previous">
				<?php previous_post_link('<p><strong><</strong> %link</p>'); ?>
			</div>
		</div>
	</div>
	<div class="col-xs">
		<div class="box-row">
			<div class="single_next">
				<?php next_post_link('<p>%link <strong>></strong></p>'); ?>
			</div>
		</div>
	</div>
</div>
	<!-- pagination start -->

	</main>



<?php get_footer(); ?>
