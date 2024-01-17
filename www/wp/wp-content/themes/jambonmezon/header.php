<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="タカサキ會, 女性たちだけで造るハム, 宮城県大崎市, 岩出山家庭ハム, 手作りソーセージ, 手作りハム, 若女将">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <meta property="og:title" content="ハムとソーセージの製造販売｜ジャンボン・メゾン（宮城県岩出山）">
  <meta property="og:description" content="女性たちだけの手で造られる商品。ご飯にも合うハム・ソーセージを目指して。人気のローストスペアリブを展開する岩出山家庭ハム。ブランド豚と長期熟成の完全受注生産の和ハム。季節に食材を楽しむミートローフを展開するアトリエ・ドュ・ジャンボンメゾンの3ブランドを展開しております。">
  <meta property="og:url" content="https://www.jambon-maison.com">
  <meta property="og:site_name" content="jambon-maison">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/12.jpg" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="container">

    <header id="header" class="header js-hide js-show">
      <div class="header__inner">
        <h1 class="header__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/02.svg" alt="ジャンボンメゾンロゴ画像"></a></h1>
        <input type="checkbox" id="drawer-checkbox">
        <label id="drawer-btn" for="drawer-checkbox">

          <span></span>
          <span></span>
          <span></span>
        </label>
        <label class="overlay" for="drawer-checkbox"></label>

        <nav id="js-menu" class="gnav">
          <ul class="menu content__inner">
            <li><a href="<?php echo home_url('/'); ?>#blog" class="anc">BLOG</a></li>
            <li><a href="<?php echo home_url('/'); ?>#products" class="anc">PRODUCTS</a></li>
            <li><a href="<?php echo home_url('/'); ?>#about" class="anc">ABOUT</a></li>
            <li><a href="<?php echo home_url(); ?>/loss/">KIRAWARE BACON</a></li>
            <li><a href="<?php echo home_url('/'); ?>#webshop" class="anc">WEBSHOP</a></li>
            <li><a href="<?php echo home_url('/'); ?>#contact" class="anc">CONTACT</a></li>
          </ul>
        </nav><!-- /grobalNav -->
        <p>有限会社ジャンボン・メゾン</p>
      </div><!-- /header__inner -->
    </header><!-- /header -->

