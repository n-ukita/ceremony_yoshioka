<?php get_header(); ?>

  <main>
    <section class="p-detail-mv">
      <div class="l-info-mv">
        <div class="c-mv p-detail-mv__bg">
          <div class="c-mv__title-wrapper c-mv__title-wrapper--white">
            <div class="c-mv__title c-mv__title--white">お知らせ</div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-detail-article l-detail-article">
      <div class="l-inner">
        <div class="p-detail-article__wrapper">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <div class="p-detail-article__card">
                <time class="p-detail-article__date"><?php the_time('Y/m/d'); ?></time>
                <h1 class="p-detail-article__title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          
          <div class="p-detail-article__pagination">
            <a href="" class="p-detail-article__pagination-prev">←</a>
            <a href="" class="p-detail-article__pagination-link">一覧へ戻る</a>
            <a href="" class="p-detail-article__pagination-next">→</a>
          </div>
        </div>
      </div>
    </section>
    <div class="p-contact l-contact">
      <div class="l-inner">
        <div class="p-contact__wrapper">
          <a href="/offering.html" class="p-contact__img">
            <img src="./images/order-img.jpg" alt="供物・供花注文">
            <span class="p-contact__title"><span>供物・供花注文</span></span>
          </a>
          <a href="/consultation.html" class="p-contact__img">
            <img src="./images/inquiry-img.jpg" alt="事前相談・お問い合わせ">
            <span class="p-contact__title"><span>事前相談・お問い合わせ</span></span>
          </a>
        </div>
        <div class="p-contact__wrapper-price  js-float">
          <a href="/hall.html" class="p-contact__price-btn">
            <img src="./images/price_btn.jpg" alt="料金・プラン">
            <span class="p-contact__title"><span>料金・プラン</span></span>
          </a>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>