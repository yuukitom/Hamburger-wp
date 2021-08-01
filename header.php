<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="ハンバーガーサイト">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hamburger</title>
  <link rel="stylesheet" href="css/ress.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ded60250de.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="l-container">
    <div class="l-container__left">
      <header class="l-header p-header">
        <nav class="p-header__gnav u-displayNone--pc js_navBtn"><button>Menu</button></nav>
        <div class="p-header__top">
          <h1 class="p-header__topTitle"><a href="<? echo esc_url(home_url("/")); ?>"><?php bloginfo("name"); ?></a></h1>
          <?php get_search_form(); ?>
        </div>
      </header>