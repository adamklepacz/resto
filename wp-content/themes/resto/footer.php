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
        <ul class="footer-menu">
          <li class="footer-menu__item">New York restaurants</li>
          <li class="footer-menu__item">235 Amsterdam Route</li>
          <li class="footer-menu__item">New York, NY 56444</li>
          <li class="footer-menu__item">783-213-1234</li>
        </ul>

        <ul class="footer-menu">
          <li class="footer-menu__item">France restaurants</li>
          <li class="footer-menu__item">68 rue de la Courrone</li>
          <li class="footer-menu__item">759993 Paris</li>
          <li class="footer-menu__item">02.02.3232.1</li>
        </ul>

        <ul class="footer-menu">
          <li class="footer-menu__item"><a href="">Blog</a></li>
          <li class="footer-menu__item"><a href="">Carers</a></li>
          <li class="footer-menu__item"><a href="">Privacy Policy</a></li>
          <li class="footer-menu__item"><a href="">Contact</a></li>
        </ul>

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
