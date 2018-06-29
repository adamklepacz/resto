<?php
/**
 * The template for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Resto
 */

get_header();
?>

<div class="wrapper">

  <article class="post-item">
    <header class="post-item__header">
      <div class="post-item__title">
        <?php the_title(); ?>
      </div>
      <div class="post-item__category">
        <?php the_category(); ?>
      </div>
    </header>

    <section class="post-item__content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </section>
    <footer class="post-item__footer">
      <span class="post-item__author">Author: <?php the_author(); ?></span>
      <span class="post-item__date"><?php the_date(); ?></span>
    </footer>
  </article>
  
</div><!-- .wrapper -->


<?php
get_footer();
?>
