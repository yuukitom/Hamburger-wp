<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="ハンバーガーサイト">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="l-container">
    <div class="l-container__left">
      <header class="l-header p-header">
        <nav class="p-header__gnav u-displayNone--pc js_navBtn"><button>Menu</button></nav>
        <div class="p-header__top">
          <h1 class="p-header__topTitle"><a href="<?php echo esc_url(home_url("/")); ?>"><?php bloginfo("name"); ?></a></h1>
          <?php get_search_form(); ?>
        </div>
      </header>