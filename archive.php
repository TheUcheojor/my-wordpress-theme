<?php  get_header(); ?>

<!-- archive.php refers to manages the posts  -->

<div class="container pt-5 pb-5">

<!-- Single should refer to the single.php -->
  <!-- single_cat_title( string $prefix = '', bool $display = true )
Display or retrieve page title for category archive. -->



            <h1><?php single_cat_title(); ?></h1>

            <!-- Another way to do loops in php -->
            <?php if (have_posts()): while(have_posts()) : the_post(); ?>

              <div class="card mb-5">
                <div class="card-body">
                              <h3>  <?php the_title(); ?> </h3>

                              <?php the_excerpt(); ?>

                              <a href="<?php the_permalink(); ?>" class="btn btn-success" > Read more </a>

              </div>
            </div>
            <?php endwhile;endif; ?>



</div>

<?php  get_footer(); ?>