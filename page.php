<?php get_header(); ?>


<div class="container">
	<div class="border-top">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <h2 class="text-center mt-4"><?php the_title(); ?></h2>
                <div id="our-post-thumbnail">
					<?php the_post_thumbnail('medium',array( 'class = mx-auto')); ?>
                </div>
				<div class="text-center" >
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