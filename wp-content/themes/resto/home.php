<?php
/**
 * The template for displaying all posts
 *
 * This is the template that displays all posts made in WordPress.
 * No sorting by category, id or something.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Resto
 */

get_header();
?>
<div class="wrapper">
  <div class="post-list">
    <?php
      while(have_posts()) {
        the_post();

        get_template_part('template-parts/content-blog');
      }
    ?>
  </div>
</div>

<?php
  get_footer();
?>
