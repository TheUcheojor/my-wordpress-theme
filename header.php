<!DOCTYPE html>

<html>

        <head>
            <!-- This is an hook -->
          <?php wp_head();?>

          <!-- We could do this -->
          <!-- <link href="bootstrap.min.css" rel="stylesheet" /> -->
          <!-- We do not want to go directly into out header -->

        </head>


<body <?php body_class(); ?>  >

<header class="sticky-top">

  <div class="container">

    <?php
            // wp_nav_menu( array $args = array() )
            wp_nav_menu(
                  array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'navigation',
                  )
              );


      ?>


  </div>


</header>
