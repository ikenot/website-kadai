<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="final-practice">
  <title>Samurai Seitai</title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Shippori+Mincho&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Shippori+Mincho&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="kotei__header">
      <div class="header__hamberger">
        <div class="header__hamberger--cross">
          <span class="header__hamberger--line"></span>
          <span class="header__hamberger--line"></span>
          <span class="header__hamberger--line"></span>
        </div>
        <div class="header__hamberger--list">
          <a href="<?php echo home_url(); ?>/"><img class="header__logo--imagewhite" src="<?php echo get_template_directory_uri(); ?>/img/Frame 2259.png" alt="logowhite"></a>
          <ul class="header__hamberger--parent">
            <h2 class="header__hamberger--title">メニュー</h2>
            <a class="header__hamberger--child" href="<?php echo home_url(); ?>/">ホーム</a>
            <a class="header__hamberger--child" href="<?php echo home_url(); ?>/about">当院について</a>
            <a class="header__hamberger--child" href="<?php echo home_url(); ?>/course">コース・料金</a>
            <a class="header__hamberger--child" href="<?php echo home_url(); ?>/news">お知らせ</a>
            <a class="header__hamberger--child" href="<?php echo home_url(); ?>/voice">お客様の声<a>
            </ul>
          <a class="header__hamberger--link" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
        </div>
        <div class="header__hamberger--empty"></div>
      </div>
      <div class="aheader">
        <div class="aheader__logo">
          <a href="<?php echo home_url(); ?>/"><img class="aheader__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/Frame 2259.png" alt="logo"></a>
        </div>
        <div class="aheader__nav">
          <div class="header__nav--parent">
            <a class="aheader__nav--child" href="<?php echo home_url(); ?>/">ホーム</a>
            <a class="aheader__nav--child" href="<?php echo home_url(); ?>/about">当院について</a>
            <a class="aheader__nav--child" href="<?php echo home_url(); ?>/course">コース・料金</a>
            <a class="aheader__nav--child" href="<?php echo home_url(); ?>/news">お知らせ</a>
            <a class="aheader__nav--child" href="<?php echo home_url(); ?>/voice">お客様の声<a>
            <a href="<?php echo home_url(); ?>/contact"><button class="aheader__nav--btn">ご予約・お問い合わせ</button></a>
          </div>
        </div>
        <a href="#"><button class="topback"></button></a>
      </div>
    </div>
  </header>
 
