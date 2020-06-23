<?php

/**
 * Header template part
 * 
 * PHP version 7.2
 * 
 * @category  CategoryName
 * @package   PackageName
 * @author    Original Author <author@example.com>
 * @copyright 1997-2005 The PHP Group
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://pear.php.net/package/PackageName
 */

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Roboto:400,400i,700,700i" rel="stylesheet" />
  <?php wp_head(); ?>
  <title><?php bloginfo('name') ?></title>
</head>

<body class="overflowChange">
  <header class="header container-fluid">
    <!-- search form field -->
    <div class="search-field-container" style="display: none">
      <input id="search-text" type="text" placeholder="ви обов'язково знайдете)))">
      <img class="search-field-close-btn" src="https://img.icons8.com/windows/32/000000/delete-sign.png" />
      <div class="container-fluid search-result-container">
        <div id="search-result" class="row search-result">

        </div>
        <div class="hidden"></div>
      </div>
    </div>
    <!-- end search -->
    <div class="row">
      <div class="col-md-2 col-2 header-logo-container">
        <a href="/">
          <img style="width: 60px; height:60px" src="<?php the_field('site_logo', 'option') ?>" alt="logo">
        </a>
      </div>
      <div class="col-md-5 col-lg-7 col-5 pt-3 header-menu-container">
        <div class="hamburger-container">
          <div class="hamburger closed">
            <div class="burger-main">
              <div class="burger-inner">
                <span class="top"></span>
                <span class="mid"></span>
                <span class="bot"></span>
              </div>
            </div>

            <div class="svg-main">
              <svg class="svg-circle">
                <path class="path" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
              </svg>
            </div>
            <div class="path-burger">
              <div class="animate-path">
                <div class="path-rotation"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-nav-menu">
          <?php
          $args = array(
            'container' => false,
            'items_wrap'      => '<ul id="%1$s" class="header-menu ">%3$s</ul>',
            'theme_location' => 'header_menu',

          );
          ?>
          <?php wp_nav_menu($args); ?>
        </div>
        </nav>
      </div>
      <div class=" col-md-5 col-5 col-lg-3 text-md-right header-options">
        <div class="pr-4 search_main_container"><?php echo do_shortcode('[wcas-search-form]'); ?></div>
        <div class="header-cart">
          <a class="header-cart-link" href="/cart" id="open-cart">
            <div class="header-cart-count-wrap"><span class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count() ?></span></div>
            <svg style="width: 30px; height: 30px;" aria-hidden="true" focusable="false" role="presentation" class="header-cart-icon" viewBox="0 0 100 100">
              <path d="M85 24.789H68.993v-5.66C68.993 8.581 60.474 0 50.003 0c-10.47 0-18.988 8.581-18.988 19.13v5.659H15V100h70V24.789zm-45-5.407C40 12.841 44.423 10 49.937 10 55.452 10 60 12.84 60 19.382V25H40v-5.618z" fill="#000" fill-rule="nonzero" />
            </svg>
          </a>
        </div>

      </div>
    </div>

    </div>
  </header>

<div class="row container-fluid search_container" style="margin-right: 0; padding-right: 0;">
    <div class="col-lg-9"></div>
    <div class="col-lg-3 pb-2 pt-2 search_add_container col-sm-12">
      <?php echo do_shortcode('[wcas-search-form]'); ?>
    </div>
  </div>