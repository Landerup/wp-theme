<?php get_header(); ?>

<div class="container">
    <?php $wcm_travel = new WP_Query( [    'post_type' => 'wcm_travel',
                                            'ignore_sticky_posts' => 1,
										                        'posts_per_page' => 6,
										                        'orderby' => 'title',
										                        'order' => 'ASC',
        ] ); ?>
  <div class="row justify-content-center gap-5">
    <?php
      if ($wcm_travel->have_posts()) :
	      while ($wcm_travel->have_posts()) : $wcm_travel->the_post(); ?>

  <div class="card col-3">
            <?php if (!empty(get_the_post_thumbnail())) { ?>
              <?php the_post_thumbnail('medium',array( 'class = mx-auto')); ?>
          <?php } else { ?>
            <img class = "card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg"  alt="Coming Soon" style="max-width: 100%; height: 200px" />
          <?php } ?>
        <div class="card-body">
          <h3 class="card-title text-success"><?php the_title(); ?></h3>
          <p class="card-text"><?php the_excerpt(); ?></p>
          <a href=<?php the_permalink(); ?> ><button type="button" class="btn btn-outline-success">Läs mer</button></a>
        </div>
  </div>
<?php
    endwhile;
endif;
wp_reset_postdata();
?>

<?php get_footer(); ?>