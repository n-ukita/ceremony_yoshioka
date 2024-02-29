<footer class="p-footer l-footer">
    <div class="l-inner">
      <div class="p-footer__wrapper">
        <div class="p-footer__left">
          <div class="p-footer__logo">セレモニー吉岡</div>
          <p class="p-footer__address">〒981-3627<br>宮城県黒川郡大和町吉岡東２丁目１３－７</p>
          <p class="p-footer__tel"><a href="0223452515" class="p-footer__tel-link">TEL：022-345-2515</a><span>24時間受付</span> </p>
          <a href="<?php echo esc_url(home_url('/consultation')); ?>#contact" class="p-footer__btn">
            <span class="p-footer__btn-text">メールでのお問い合わせ</span>
          </a>
        </div>
        <div class="p-footer__right">
          <ul class="p-footer__right-menu1">
            <li class="p-footer__menu-item"><a href="/hall.html">ホール紹介</a></li>
            <li class="p-footer__menu-item"><a href="<?php echo esc_url(home_url('/merit')); ?>">選ばれる理由</a></li>
            <li class="p-footer__menu-item p-footer__menu-item--lh"><a href="<?php echo esc_url(home_url('/ceremony_yoshioka')); ?>">セレモニー吉岡<br>－料金・プラン</a></li>
            <li class="p-footer__menu-item p-footer__menu-item--lh"><a href="<?php echo esc_url(home_url('/hartwell_house')); ?>">ハートウェル・ハウス<br>－料金・プラン</a></li>
          </ul>
          <ul class="p-footer__right-menu2">
            <li class="p-footer__menu-item2"><a href="<?php echo esc_url(home_url('/offering')); ?>">供物・供花注文</a></li>
            <li class="p-footer__menu-item2"><a href="<?php echo esc_url(home_url('/info')); ?>">会社概要</a></li>
            <li class="p-footer__menu-item2"><a href="<?php echo esc_url(home_url('/archive')); ?>">お知らせ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>