<?php get_header(); ?>

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4 img-fluid" src="http://wpintro.test/wp-content/uploads/2022/05/pizza.jpg" alt="" style="width: 100%">
    <h1 class="display-5 fw-bold">Centered hero</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-5 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
		<button type="button" class="btn btn-outline-danger btn-lg px-4">Third</button>
		</div>
    </div>
</div>

<div class="">
<div><?php
        $wcm_travels = new WP_Query( [ 'post_type' => 'wcm_travel',
                                        'ignore_sticky_posts' => 1,
										'posts_per_page' => 6,
										'orderby' => 'title',
										'order' => 'ASC',
        ] ); ?>
            <?php
            if ( $wcm_travels->have_posts() ) : ?>
			<div class="container">
			<div class="row justify-content-center gap-5">


             <?php
                while ( $wcm_travels->have_posts() ) {
                    $wcm_travels->the_post();
                    ?>
			<div class="card col-3">
  					<img class="card-img-top" src="<?php the_post_thumbnail_url('first_theme'); ?>" alt="Card image cap" style="max-width: 150 px">
  				<div class="card-body">
    				<h5 class="card-title"> <?php the_title(); ?> </h5>
    				<p class="card-text"> <?php the_excerpt(); ?> </p>
    				<a href="<?php the_permalink() ?>" class="btn btn-primary">Read more</a>
				</div>
			</div>

            <?php
			} ?>
            <?php
            endif; ?>
			</div>
			</div>
            <?php wp_reset_postdata(); ?>
    </div>

</div>

<div class="">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<div id="our-post-thumbnail">
					<?php the_post_thumbnail( 'wcm-gallery' ); ?>
				</div>
				<?php the_excerpt(); ?>
			</article>
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

<?php get_footer(); ?>