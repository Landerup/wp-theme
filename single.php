<?php get_header(); ?>

<div class="container">
	<div class="border-top">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>

        <article class="mt-4" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <a style="color: black;" class="text-decoration-none text-center" href="<?php the_permalink(); ?>"><h2> <?php the_title(); ?></h2>

            <div id="our-post-thumbnail">
				<?php if (!empty(get_the_post_thumbnail())) { ?>
              	<?php the_post_thumbnail('large',array( 'class = mx-auto')); ?>
          		<?php } else { ?>
            		<img class = "card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg"  alt="Coming Soon" style="width: 300px; height: 300px" />
          		<?php } ?>
            </div>

			<div class="text-center mt-4">
				<?php the_content(); ?>
			</div>
        </article>

		<div class="text-center">
			<?php
			endwhile;

			if ( is_single() ) :
				previous_post_link();
				next_post_link();
			endif;
			else :
				_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
			endif;
			?>
		</div>
	</div>
</div>

<?php
get_footer(); ?>
