<?php
/**
 * The template for displaying our story page
 * Template Name: Our story
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Resto
 */

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <div class="wrapper page-content">
        <?php
        while ( have_posts() ) :
          the_post();

          get_template_part( 'template-parts/content', 'page' );

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;

        endwhile; // End of the loop.
        ?>

        <article>
          <h2 class="wwd-heading">What we do?</h2>

          <ul class="wwd-list">
            <?php

              $wwdQuery = new WP_Query(array(
                'category_name' => 'wwd',
                'posts_per_page' => 6
              ));
              while ($wwdQuery-> have_posts() ) :
                $wwdQuery -> the_post();
             ?>
                <li class="wwd-box">
                  <?php the_post_thumbnail('post-thumbnail', ['class' => 'wwd-box__img']) ?>
                  <h3 class="wwd-box__title"><?php the_title(); ?></h3>
                  <div class="wwd-box__content"><?php the_content(); ?></div>
                  <a href="<?php the_permalink(); ?>" class="special-button">Read more</a>
                </li>
             <?php
              endwhile;
              ?>
          </ul>

        </article>

      </div><!-- .wrapper -->
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
