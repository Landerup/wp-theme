<?php get_header(); ?>

<div class="px-2 py-2 my-2 text-center">
    <img class="d-block mx-auto mb-4 img-fluid" src="http://wpintro.test/wp-content/uploads/2022/06/ross-parmly-rf6ywHVkrlY-unsplash.jpg" alt="" style="width: 100%; height: 600px">
    <h1 class="display-5 fw-bold text-success">Travel Land</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">En fantastikt hemsida som kan ta dig till vilken världsdel du önskar, det kostar sjukt mycket men det är värt varenda krona, vi lovar dig. Bara köp!</p>
      <div class="d-grid gap-5 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-outline-success px-10">Nothing</button>
        <button type="button" class="btn btn-outline-success px-10">Nothing</button>
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
  					<img class="card-img-top" src="<?php the_post_thumbnail_url('first_theme'); ?>" alt="Card image cap" style="max-width: 100%; height: 180px">
  				<div class="card-body">
    				<h5 class="card-title text-success"> <?php the_title(); ?> </h5>
    				<p class="card-text"> <?php the_excerpt(); ?> </p>
    				<a href="<?php the_permalink() ?>" class="btn btn-outline-success">Läs mer..</a>
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

<?php get_footer(); ?>