<?php  get_header(); ?>

<!-- single.php refers to [blog] posts  -->

<div class="container pt-5 pb-5">
    <h1><?php the_title(); ?></h1>

    <?php  if (has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('largest') ?>" class='img-fluid'>

    <?php endif; ?>


    <?php
            if (have_posts()){
                  while(have_posts()){
                        the_post();//the_post() iterates the post index in the loop.
                        the_content();//Display the post content.
                  }

            }




    ?>
</div>

<?php  get_footer(); ?>
