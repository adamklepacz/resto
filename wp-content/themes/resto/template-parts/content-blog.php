<?php
/**
 * Template part for displaying all posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Resto
 */

?>

<a href="<?php echo get_the_permalink(); ?>" class="post-link">
  <article class="post-box">
     <h2 class="post-box__heading"><?php the_title(); ?></h2>
     <div class="post-box__content">
      <?php the_content(); ?>
     </div>
     <footer class="post-box__footer">
       <div class="post-box__date">
          <?php echo get_the_date(); ?>
       </div>
       <div class="post-box__author">
          <?php the_author(); ?>
       </div>
     </footer>
  </article>
</a>
