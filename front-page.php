<?php get_header('top'); ?>
  <main>
    <div class="p-fv">
      <div class="p-fv__img">
        <div id="slider">
        </div>
      </div>
      <div class="p-fv__wrapper">
        <!-- メインビジュアル設定 -->
        <script>
          var mainvisual1 = "<?php echo esc_url(get_field('main_view_1')); ?>"
          var mainvisual2 = "<?php echo esc_url(get_field('main_view_2')); ?>"
          var mainvisual3 = "<?php echo esc_url(get_field('main_view_3')); ?>"
          var mainvisual4 = "<?php echo esc_url(get_field('main_view_4')); ?>"
        </script>
        <div class="p-fv__box">
          <p class="p-fv__lead">心温まるお別れの瞬間を。</p>
          <p class="p-fv__text">感謝と共感の葬儀サポートをご提供します。</p>
        </div>
      </div>
    </div>
    <div class="p-urgency l-urgency">
      <div class="l-inner">
        <p class="p-urgency__lead">お急ぎの方は以下よりご連絡ください。</p>
        <div class="p-urgency__tel"><a href="0223452515">022-345-2515</a></div>
        <p class="p-urgency__tel-text">－年中無休・24時間受付中－</p>
        <div class="p-urgency__btn">
          <a href="<?php echo esc_url(home_url('/consultation')); ?>" class="c-btn1">
            <span class="c-btn1__text">事前のご相談はこちらより</span>
          </a>
        </div>
      </div>
    </div>
    <section class="p-concept l-concept">
      <div class="l-inner">
        <div class="p-concept__bg">
          <div class="p-concept__wrapper js-float">
            <div class="p-concept__body">
              <div class="p-concept__title">
                <h2 class="c-section-title1" data-en="Concept">私たちの想い</h2>
              </div>
              <p class="p-concept__text">
                まだ、自宅葬が主流だった時代にセレモニー吉岡ではいち早く、葬祭会館を建設しました。<br>
                社葬のような大規模な葬儀から家族葬のような小規模葬儀まで幅広く対応しております。<br>
                地域の皆様の心を支え続けて三十五年。想いをカタチに…大切な人との最後の時間「心を込めたお見送り」をお手伝いさせて頂きます。
              </p>
              <div class="p-concept__btn">
                <a href="<?php echo esc_url(home_url('/merit')); ?>" class="c-btn1 c-btn1--min1">
                  <span class="c-btn1__text">詳しく見る</span>
                </a>
              </div>
            </div>
            <div class="p-concept__img">
              <img src="<?php echo esc_url(get_theme_file_uri('/images/Concept-img.jpg'))?>" alt="人が手を繋いでいる写真">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-introduction l-introduction" id="hall">
      <div class="l-inner">
        <div class="p-introduction__title-wrapper">
          <div class="p-introduction__title js-float">
            <h2 class="c-section-title2" data-en="Ceremonial hall">ホール紹介</h2>
          </div>
        </div>
        <div class="p-introduction__wrapper">
          <div class="p-introduction__box js-float">
            <div class="p-introduction__img">
              <img src="<?php echo esc_url(get_theme_file_uri('/images/img-セレモニー吉岡.jpg'))?>" alt="葬祭会館セレモニー吉岡">
            </div>
            <div class="p-introduction__body">
              <h3 class="p-introduction__hall">葬祭会館セレモニー吉岡</h3>
              <div class="p-introduction__text">皆様に自由なカタチで使っていただける場所＝セレモニー吉岡　家族葬・一般葬・社葬はもちろん、さまざまな用途に合わせてご利用いただけます。　敷地内大型駐車場完備</div>
              <div class="p-introduction__meta">
                <div class="p-introduction__meta-item">
                  <div class="p-introduction__meta-title">所在地</div>
                  <div class="p-introduction__meta-text">〒981-3627 宮城県黒川郡大和町吉岡東２丁目１３−７</div>
                </div>
                <div class="p-introduction__meta-item">
                  <div class="p-introduction__meta-title">TEL</div>
                  <div class="p-introduction__meta-text">022-345-2515</div>
                </div>
              </div>
              <div class="p-introduction__btn">
                <a href="<?php echo esc_url(home_url('/ceremony_yoshioka')); ?>" class="c-btn1 c-btn1--min2">
                  <span class="c-btn1__text c-btn1__text--min">詳しく見る</span>
                </a>
              </div>
            </div>
          </div>
          <div class="p-introduction__box js-float">
            <div class="p-introduction__img">
              <img src="<?php echo esc_url(get_theme_file_uri('/images/img-ハートウェルハウス.jpg'))?>" alt="葬祭会館ハートウェル・ハウス">
            </div>
            <div class="p-introduction__body">
              <h3 class="p-introduction__hall">葬祭会館ハートウェル・ハウス</h3>
              <div class="p-introduction__text">家族葬ホール「ハートウェル・ハウス」ではご家族様、親しいご友人を中心とした少人数でのお見送りができる場所となっております。敷地内駐車場完備<br><br></div>
              <div class="p-introduction__meta">
                <div class="p-introduction__meta-item">
                  <div class="p-introduction__meta-title">所在地</div>
                  <div class="p-introduction__meta-text">〒981-3328 宮城県富谷市上桜木２丁目３−７</div>
                </div>
                <div class="p-introduction__meta-item">
                  <div class="p-introduction__meta-title">TEL</div>
                  <div class="p-introduction__meta-text">022-348-0350</div>
                </div>
              </div>
              <div class="p-introduction__btn">
                <a href="<?php echo esc_url(home_url('/hartwell_house')); ?>" class="c-btn1 c-btn1--min2">
                  <span class="c-btn1__text c-btn1__text--min">詳しく見る</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-price l-price">
      <div class="l-inner">
        <div class="p-price__title js-float">
          <h2 class="c-section-title2" data-en="Price">プラン・料金</h2>
        </div>
        <div class="p-price__img">
          <img class="js-float" src="./images/plan-example.jpg" alt="プラン・料金">
        </div>
      </div>
    </section>
    <section class="p-news l-news">
      <div class="p-news__bg"></div>
      <div class="l-inner">
          <div class="p-news__wrapper js-float">
            <div class="p-news__title">
            <h2 class="c-section-title2" data-en="News">お知らせ</h2>
            </div>
            <?php
              $args = [
                'post_type' => 'post',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC'
              ];
            ?>
            <?php $the_query = new WP_Query($args); ?>
            <?php if($the_query -> have_posts()) : ?>
              <ul class="p-news__lists">
                <?php while($the_query -> have_posts()) : $the_query -> the_post(); ?>
                  <li>
                    <a href="<?php the_permalink(); ?>" class="p-news__list">
                      <div class="p-news__date"><?php the_time('Y/m/d'); ?></div>
                      <p class="p-news__text"><?php the_title(); ?></p>
                    </a>
                  </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
            <?php endif; ?>
          </div>
        <div class="p-news__btn">
          <a href="<?php echo esc_url(home_url('/archive')); ?>" class="c-btn1 c-btn1--min1">
            <span class="c-btn1__text">一覧を見る</span>
          </a>
        </div>
      </div>
    </section>
    <?php get_template_part('template-file/links','top')?>
  </main>
<?php get_footer(); ?>
