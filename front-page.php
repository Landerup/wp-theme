<?php get_header(); ?>

<div class="container">
    <?php $wcm_travels = new WP_Query( [    'post_type' => 'wcm_travel',
                                            'ignore_sticky_posts' => 1,
										    'posts_per_page' => 6,
										    'orderby' => 'title',
										    'order' => 'ASC',
        ] ); ?>
  <div class="row justify-content-center gap-5">
    <?php
      if ($wcm_travels->have_posts()) :
	      while ($wcm_travels->have_posts()) : $wcm_travels->the_post(); ?>

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

<div class="d-flex justify-content-center mt-5" id="newsletter">

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label text-success" for="inlineCheckbox1">Sportresor</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label text-success" for="inlineCheckbox2">Resor</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        <label class="form-check-label text-success" for="inlineCheckbox3">Fotbollsresor</label>
    </div>
</div>

<div class="d-flex justify-content-center mb-5" id="subscribe">
    <form class="row g-3">
  <div class="col-auto">
    <label for="inputemail" class="visually-hidden"></label>
    <input type="password" class="form-control" id="inputemail" placeholder="Din email">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-outline-success">Prenumerera</button>
  </div>
</form>
</div>

<?php get_footer(); ?>