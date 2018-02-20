<?php get_header(); ?>

<main class="index_homepage">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

						<figure class="index-thumbnail full-width">
								<a href="<?php the_permalink();?>" title="<?php the_title_attribute()?>"><?php the_post_thumbnail()?></a>
						</figure>

				<?php endif; ?>
				<!-- /post thumbnail -->

				<h1 id="index_title" class="center"><a href="<?php the_permalink();?>" title="<?php the_title_attribute()?>"><?php the_title()?></a></h1>



				<article class="index_excert"><?php the_excerpt(); ?></article>
				<br/>

    <?php endwhile;
		else :
        _e( 'Sorry, nothing here.', 'textdomain' );
    endif;

?>
</main>
<?php get_footer(); ?>
