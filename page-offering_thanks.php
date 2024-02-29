<?php get_header(); ?>
  
  <main>
    <section class="p-offering-mv">
      <div class="l-offering-mv">
        <div class="c-mv p-offering-mv__bg">
          <div class="c-mv__title-wrapper c-mv__title-wrapper--white">
            <h1 class="c-mv__title c-mv__title--white">供物・供花</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="p-offering-order">
      <div class="l-offering-order">
        <div class="l-inner">
          <div class="p-offering-order__box">
            <h2 class="p-offering-order__title js-float">供物・供花のご注文はこちらより</h2>
            <p class="p-offering-order__text js-float">セレモニー吉岡では供花をはじめ、洗練されたお供物の数々をご用意致しております。弊社が施行しておりますご喪家様をはじめ、他社様で施工しておりますご喪家様や、会館にも変わらず丁寧にお供えさえていただきます。是非、お世話になった方への御礼をカタチにこめてお届けしてはいかがでしょうか。</p>
            <p class="p-offering-order__comments js-float">友の会会員の方は15%OFFとなります。</p>
          </div>
          <div class="p-offering-order__wrapper">
            <?php
              $args= [
                'post_type' => 'offering-order',
                'posts_per_page' => 16,
                'orderby' => 'title',
                'order' => 'ASC',
              ]
            ?>
            <?php $the_query = new WP_Query($args); ?>
            <?php if($the_query -> have_posts()) : ?>
              <?php while($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <div class="p-offering-order__item">
                  <div class="p-offering-order__img">
                    <img src="<?php the_field('offering-image')?>">
                  </div>
                  <div class="p-offering-order__body">
                    <div class="p-offering-order__item-box">
                      <div class="p-offering-order__item-title"><?php the_title(); ?></div>
                    </div>
                    <div class="p-offering-order__item-price"><?php the_field('offering-price'); ?></div>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <section class="p-offering-form l-offering-form" id="offering_form">
      <div class="l-inner">
        <div class="p-offering-form__wrapper">
          <div class="p-offering-form__title">
            <h2 class="c-section-title1 c-section-title1--center" data-en="Form">ご注文フォーム</h2>
          </div>
          <div class="p-offering-form__box" method="post">
            承りました。ご注文ありがとうございます。<br>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>