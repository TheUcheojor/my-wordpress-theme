<?php  get_header(); ?>

<div class="container pt-5 pb-5">
    <h1><?php the_title(); ?></h1>


    <?php
            if (have_posts()){
                  while(have_posts()){
                        the_post();//the_post() iterates the post index in the loop.
                        the_content();//Display the post content.
                  }

            }




    ?>
</div>



<!-- Below are the commented code using the enqueued bootstraps css file -->
<!-- <div class="container">

    <div class="row">

          <div class="col">

                  Left side
          </div>

          <div class="col">

                Right side
          </div>

    </div>

</div> -->

<?php  get_footer(); ?>
