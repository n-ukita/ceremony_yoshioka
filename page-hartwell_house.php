<?php get_header(); ?>

  <main>
    <section class="p-hall-mv">
      <div class="l-hall-mv">
        <div class="c-mv p-hall-mv__bg">
          <div class="c-mv__title-wrapper c-mv__title-wrapper--white">
            <h1 class="c-mv__title c-mv__title--white"><span class="c-mv__title-hall">ホール紹介</span><br>ハートウェル・ハウス</h1>
          </div>
        </div>
      </div>
    </section>
    <div class="p-hall-message l-hall-message">
      <div class="l-inner">
        <div class="p-hall-message__wrapper js-float">
          <div class="p-hall-message__img">
            <img src="<?php echo esc_url(the_field('ceremony_image')); ?>">
          </div>
          <div class="p-hall-message__lead"><?php echo esc_url(the_field('catch_copy_title')); ?></div>
          <p class="p-hall-message__text"><?php echo esc_url(the_field('catch_copy_text')); ?></p>
        </div>
      </div>
    </div>
    <section class="p-hall-equipment l-hall-equiment">
      <div class="l-inner">
        <div class="p-hall-equipment__title-wrapper">
          <div class="p-hall-equipment__title js-float">
            <h2 class="c-section-title2" data-en="Equipment">設備紹介</h2>
          </div>
        </div>
        <div class="p-hall-epuipment__wrapper">
          <?php
            $args = [
              'post_type' => 'h-equipment',
              'posts_per_page' => -1,
              'orderby' => 'title',
              'order' => 'ASC'
            ];
          ?>
          <?php $the_query = new WP_Query($args); ?>
          <?php if($the_query -> have_posts()) : ?>
            <?php while($the_query -> have_posts()) : $the_query -> the_post(); ?>
              <div class="p-hall-equipment__card js-float">
                <div class="p-hall-equipment__card-img">
                  <img src="<?php echo esc_url(the_field('equipment-image')); ?>">
                </div>
                <h3 class="p-hall-equipment__card-title"><?php echo esc_url(the_field('equipment-head')); ?></h3>
                <div class="p-hall-equipment__card-text"><?php echo esc_url(the_field('equipment-text')); ?></div>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <section class="p-hall-plan l-hall-plan">
      <div class="l-inner">
        <div class="p-hall-plan__title js-float">
          <h2 class="c-section-title2" data-en="Plan">プラン紹介</h2>
        </div>
        <div class="p-hall-plan__wrapper js-float">
          <div class="p-hall-plan__img">
            <img src="./images/hall-plan-example.jpg" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="p-hall-access l-hall-access">
      <div class="l-inner">
        <div class="p-hall-access__title-wrapper">
          <div class="p-hall-access__title js-float">
            <h2 class="c-section-title2" data-en="Access">アクセス</h2>
          </div>
        </div>
        <div class="p-hall-access__wrapper js-float">
          <div class="p-hall-access__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3125.181818840838!2d140.89587097632818!3d38.437269073721886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8977774b0cd275%3A0xb956b87c7cb70dfd!2z44CSOTgxLTM2Mjcg5a6u5Z-O55yM6buS5bed6YOh5aSn5ZKM55S65ZCJ5bKh5p2x77yS5LiB55uu77yR77yT4oiS77yX!5e0!3m2!1sja!2sjp!4v1706687622951!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="p-hall-access__meta">
            <dl>
              <dt>所在地</dt>
              <dd>〒981-3627　宮城県黒川郡大和町吉岡東2丁目13-7</dd>
            </dl>
            <dl>
              <dt>電話番号</dt>
              <dd><a href="022-345-2515">022-345-2515</a></dd>
            </dl>
            <dl>
              <dt>アクセス</dt>
              <dd>大和インターチェンジより車で5分</dd>
            </dl>
            <dl>
              <dt>駐車場</dt>
              <dd>100台以上</dd>
            </dl>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>