<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Resto
 */

get_header();
?>


  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <div class="main-banner">
        <img /src="<?php echo(get_template_directory_uri());?>/src/assets/img/banner.png" alt="Main site banner">
        <h1 class="main-banner__heading">It is awesome template.</h1>
        <span class="main-banner__desc">reto restaurants page website template</span>
      </div>

      <div class="wrapper">
        <section class="menu-section">
          <h2 class="menu-section__heading">The Menu</h2>
          <ul class="menu-list">
            <?php
              $menuListQuery = new WP_Query(array(
                'category_name' => 'fp-menu',
                'posts_per_page' => 8
              ));

              while($menuListQuery -> have_posts()) : $menuListQuery -> the_post();
             ?>

             <li class="menu-list__item">
               <a class="menu-list__link" href="<?php the_permalink(); ?>">
                 <div class="menu-list__wrap">
                   <span class="menu-list__name"><?php the_title(); ?></span>
                   <span class="menu-list__price"><?php echo get_post_meta( $post -> ID, 'price', true ); ?></span>
                   <span class="menu-list__desc"><?php echo get_post_meta( $post -> ID, 'dish-short-description', true ); ?></span>
                 </div>
                </a>
             </li>
           <?php endwhile; ?>
          </ul>
        </section>

        <section class="feautred-dishes">

          <h2 class="feautred-dishes__heading">Feautred Dishes</h2>

          <ul class="dishes-list">
              <?php
                // display feautred dishes on front page
                $fdQuery = new WP_Query(array(
                  'category_name' => 'fpf-dishes',
                  'posts_per_page' => '4'
                ));

                while($fdQuery -> have_posts()) : $fdQuery -> the_post();
              ?>

                <li class="dish-box">
                  <a href="<?php echo the_permalink(); ?>" class="dish-box__link">
                    <?php the_post_thumbnail( $size = 'post-thumbnail', ['class' => 'dish-box__img'] ) ?>
                    <span class="dish-box__name"><?php the_title(); ?></span>
                    <span class="dish-box__price"><?php echo get_post_meta( $post -> ID, 'price', true )?></span>
                    <span class="dish-box__rating">
                      <?php
                        $fdStars = get_post_meta( $post -> ID, 'rating', true );
                        $fdCounter = 1;

                        while($fdCounter <= $fdStars) :
                          echo '<span class="dish-box__star"></span>';
                          $fdCounter++;
                        endwhile;


                       ?>
                    </span>
                  </a>
                </li>
            <?php endwhile; ?>
          </ul>
        </section>
      </div>



    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
error_reporting(E_ALL);
