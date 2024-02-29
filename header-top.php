<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>セレモニー吉岡</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="icon" href="" />

  <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
  <header class="p-header p-header--top">
    <div class="l-header">
      <div class="p-header__wrapper">
        <h1 class="p-header__logo p-header__logo--top">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            セレモニー吉岡  
          </a>
        </h1>
        <nav class="p-header__nav">
          <ul class="p-header__lists">
            <li class="p-header__list p-header__list--top"><a href="<?php echo esc_url(home_url('/')); ?>#hall">ホール紹介</a></li>
            <li class="p-header__list p-header__list--top"><a href="<?php echo esc_url(home_url('/merit')); ?>">選ばれる理由</a></li>
            <li class="p-header__list-mark p-header__list-mark--top">
              <a class="p-header__list-markLink" href="">料金・プラン</a>
              <div class="p-header__list-nav">
                <ul class="p-header__list-navLists">
                  <li class="p-header__list-navList"><a class="p-header__list-navLink" href="<?php echo esc_url(home_url('/ceremony-yoshioka')); ?>">セレモニー吉岡</a></li>
                  <li class="p-header__list-navList"><a class="p-header__list-navLink" href="<?php echo esc_url(home_url('/hartwell-house')); ?>">ハートウェル・ハウス</a></li>
                </ul>
              </div>
            </li>
            <li class="p-header__list p-header__list--top"><a href="<?php echo esc_url(home_url('/offering')); ?>">供物・供花</a></li>
            <li class="p-header__list p-header__list--top"><a href="<?php echo esc_url(home_url('/info')); ?>">会社概要</a></li>
            <li class="p-header__list p-header__list--top"><a href="<?php echo esc_url(home_url('/consultation')); ?>">事前相談</a></li>
          </ul>
          <div class="p-header__btn">
            <a href="<?php echo esc_url(home_url('/consultation')); ?>#contact" class="p-header__btn-mail">
              <div class="p-header__btn-mailWrapper">
                <div class="p-header__btn-mailIcon">
                  <img src="<?php echo esc_url(get_theme_file_uri('/images/mail-icon.svg'))?>" alt="メールアイコン">
                </div>
                <span class="p-header__btn-mailText">お問い合わせ</span>
              </div>
            </a>
            <a href="0223452515" class="p-header__btn-tel">
              <div class="p-header__btn-telWrapper">
                <div class="p-header__btn-telText-up">お急ぎの方はこちら</div>
                <div class="p-header__btn-telText">022-345-2515</div>
                <div class="p-header__btn-telText-bottom">24時間受付</div>
              </div>
            </a>
          </div>
        </nav>
        <div class="c-drawer-icon">
          <div class="c-drawer-icon__bars">
            <div class="c-drawer-icon__bar"></div>
            <div class="c-drawer-icon__bar"></div>
            <div class="c-drawer-icon__bar"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="c-drawer-content">
      <ul class="c-drawer-content__lists">
        <li class="c-drawer-content__list"><a href="#hall">ホール紹介</a></li>
        <li class="c-drawer-content__list"><a href="<?php echo esc_url(home_url('/merit')); ?>">選ばれる理由</a></li>
        <li class="c-drawer-content__list">
          <a href="<?php echo esc_url(home_url('/ceremony-yoshioka')); ?>">セレモニー吉岡
            <span>－料金・プラン</span>
          </a>
        </li>
        <li class="c-drawer-content__list">
          <a href="<?php echo esc_url(home_url('/hartwell-house')); ?>">ハートウェル・ハウス
            <span>－料金・プラン</span>
          </a>
        </li>
        <li class="c-drawer-content__list"><a href="<?php echo esc_url(home_url('/offering')); ?>">供物・供花</a></li>
        <li class="c-drawer-content__list"><a href="<?php echo esc_url(home_url('/info')); ?>">会社概要</a></li>
        <li class="c-drawer-content__list"><a href="<?php echo esc_url(home_url('/consultation')); ?>">事前相談</a></li>
      </ul>
    </div>
  </header>