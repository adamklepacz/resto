<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Resto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title><?php echo get_bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


  <header id="masthead" class="main-header">
    <div class="wrapper">
      <a href="<?php echo get_home_url(); ?>">
        <h1 class="main-header__logo"><?php echo get_bloginfo('name'); ?></h1>
      </a>

      <nav id="site-navigation" class="main-nav">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'resto' ); ?></button>
        <?php
        wp_nav_menu( array(
          'container'  => false,
          'menu_class' => 'main-menu',
        ) );
        ?>
      </nav><!-- #site-navigation -->
    </div>
  </header><!-- #masthead -->

  <div id="content" class="site-content">
