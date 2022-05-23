<?php get_header(); ?>

<div class="container">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <h1><?php the_title(); ?></h1>
				<img class="card-img-top" src="<?php the_post_thumbnail_url('first_theme'); ?>" alt="Card image cap">
				<?php the_content(); ?>
            </article>
		<?php
		endwhile;

		if ( is_single() ) :
		endif;
	else :
		_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	endif;
	?>

</div>

<?php get_footer(); ?>