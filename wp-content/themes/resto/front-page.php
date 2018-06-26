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
        <img src="<?php echo(get_template_directory_uri());?>/assets/img/banner.png" alt="Main site banner">
        <h1 class="main-banner__heading">It is awesome template.</h1>
        <span class="main-banner__desc">reto restaurants page website template</span> 
      </div>

      <div class="wrapper">
        <section class="menu-section">
          <h2 class="menu-section__heading">The Menu</h2>
          <ul class="menu-list">
            <li class="menu-list__item">
              <div class="menu-list__wrap">
                <span class="menu-list__name">Voluptate cillum fugiat</span>
                <span class="menu-list__price">$50</span>

                <span class="menu-list__desc">Chees,e tomato, mushroom, onions.</span>
              </div>
            </li>
            <li class="menu-list__item">
              <div class="menu-list__wrap">
                <span class="menu-list__name">Voluptate cillum fugiat</span>
                <span class="menu-list__price">$50</span>

                <span class="menu-list__desc">Chees,e tomato, mushroom, onions.</span>
              </div>
            </li>
            <li class="menu-list__item">
              <div class="menu-list__wrap">
                <span class="menu-list__name">Voluptate cillum fugiat</span>
                <span class="menu-list__price">$50</span>

                <span class="menu-list__desc">Chees,e tomato, mushroom, onions.</span>
              </div>
            </li>
            <li class="menu-list__item">
              <div class="menu-list__wrap">
                <span class="menu-list__name">Voluptate cillum fugiat</span>
                <span class="menu-list__price">$50</span>

                <span class="menu-list__desc">Chees,e tomato, mushroom, onions.</span>
              </div>
            </li>
            <li class="menu-list__item">
              <div class="menu-list__wrap">
                <span class="menu-list__name">Voluptate cillum fugiat</span>
                <span class="menu-list__price">$50</span>

                <span class="menu-list__desc">Chees,e tomato, mushroom, onions.</span>
              </div>
            </li>
            <li class="menu-list__item">
              <div class="menu-list__wrap">
                <span class="menu-list__name">Voluptate cillum fugiat</span>
                <span class="menu-list__price">$50</span>

                <span class="menu-list__desc">Chees,e tomato, mushroom, onions.</span>
              </div>
            </li>
            <li class="menu-list__item">
              <div class="menu-list__wrap">
                <span class="menu-list__name">Voluptate cillum fugiat</span>
                <span class="menu-list__price">$50</span>

                <span class="menu-list__desc">Chees,e tomato, mushroom, onions.</span>
              </div>
            </li>
            <li class="menu-list__item">
              <div class="menu-list__wrap">
                <span class="menu-list__name">Voluptate cillum fugiat</span>
                <span class="menu-list__price">$50</span>

                <span class="menu-list__desc">Chees,e tomato, mushroom, onions.</span>
              </div>
            </li>
          </ul>
        </section>

        <section class="feautred-dishes">

          <h2 class="feautred-dishes__heading">Feautred Dishes</h2>
          <ul class="dishes-list">
            <li class="dish-box">
              <a href="#" class="dish-box__link">
                <img src="<?php echo(get_template_directory_uri());?>/assets/img/dinner1.png" alt="Dish number 1" class="dish-box__img">
                <span class="dish-box__name">Fugiat nulla sint</span>
                <span class="dish-box__price">$30</span>
                <span class="dish-box__rating">
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
              </span>
              </a>
            </li>
            <li class="dish-box">
              <a href="#" class="dish-box__link">
                <img src="<?php echo(get_template_directory_uri());?>/assets/img/dinner1.png" alt="Dish number 1" class="dish-box__img">
                <span class="dish-box__name">Fugiat nulla sint</span>
                <span class="dish-box__price">$30</span>
                <span class="dish-box__rating">
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                </span>
              </a>
            </li>
            <li class="dish-box">
              <a href="#" class="dish-box__link">
                <img src="<?php echo(get_template_directory_uri());?>/assets/img/dinner1.png" alt="Dish number 1" class="dish-box__img">
                <span class="dish-box__name">Fugiat nulla sint</span>
                <span class="dish-box__price">$30</span>
                <span class="dish-box__rating">
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                </span>
              </a>
            </li>
            <li class="dish-box">
              <a href="#" class="dish-box__link">
                <img src="<?php echo(get_template_directory_uri());?>/assets/img/dinner1.png" alt="Dish number 1" class="dish-box__img">
                <span class="dish-box__name">Fugiat nulla sint</span>
                <span class="dish-box__price">$30</span>
                <span class="dish-box__rating">
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                  <span class="dish-box__star"></span>
                </span>
              </a>
            </li>
          </ul>
        </section>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
