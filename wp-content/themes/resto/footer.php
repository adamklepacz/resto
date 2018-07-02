<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Resto
 */

?>

  </div><!-- #content -->

  <footer class="footer">
    <div class="wrapper">
      <div class="footer-wrapper">

        <?php dynamic_sidebar( 'footer-menu-1' ); ?>

        <?php dynamic_sidebar( 'footer-menu-2' ); ?>

        <?php dynamic_sidebar( 'footer-menu-3' ); ?>

        <ul class="footer-menu">
          <li class="footer-menu__item">
            <img src="<?php echo(get_template_directory_uri());?>/src/assets/img/logo-footer.png" alt="Reto footer logo">
          </li>
          <li class="footer-menu__item">
            &copy; All rights reserved 2018.
          </li>
          <li class="footer-menu__item">
            Find more at <a href="www.pixelhint.com">Pixelhint.com</a>
          </li>
        </ul>
      </div>
    </div><!-- .wrapper -->
  </footer><!-- .footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
