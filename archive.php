<?php get_header(); ?>

  <main>
    <section class="p-notice-mv">
      <div class="l-info-mv">
        <div class="c-mv p-notice-mv__bg">
          <div class="c-mv__title-wrapper c-mv__title-wrapper--white">
            <h1 class="c-mv__title c-mv__title--white">お知らせ</h1>
          </div>
        </div>
      </div>
    </section>
    <div class="p-notice-archive l-notice-archive">
      <div class="l-inner">
        <div class="p-notice-archive__wrapper">
          <?php if(have_posts()) : ?>
            <ul class="p-notice-archive__lists">
              <?php while(have_posts()) : the_post(); ?>
                <li class="p-notice-archive__list">
                  <a href="<?php the_permalink(); ?>" class="p-notice-archive__link">
                    <time class="p-notice-archive__date"><?php the_time('Y/m/d'); ?></time>
                    <div class="p-notice-archive__title"><span class="p-notice-archive__title-line"><?php the_title(); ?></span></div>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?> 
          <div class="p-notice-archive__pagination-inner">
            <div class="p-notice-archive__pagination">
              <a href="" class="p-notice-archive__paginationLink">←</a>
              <a href="" class="p-notice-archive__paginationLink">1</a>
              <a href="" class="p-notice-archive__paginationLink">2</a>
              <a href="" class="p-notice-archive__paginationLink">3</a>
              <a href="" class="p-notice-archive__paginationLink">4</a>
              <a href="" class="p-notice-archive__paginationReader">･･･</a>
              <a href="" class="p-notice-archive__paginationLink">10</a>
              <a href="" class="p-notice-archive__paginationLink">→</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('template-file/links')?>
  </main>
<?php get_footer(); ?>