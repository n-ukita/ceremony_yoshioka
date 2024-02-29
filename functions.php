<?php

function my_theme_scripts() {
  wp_enqueue_style('googlefonts','https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;700&display=swap');
  wp_enqueue_style('vegas','https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css');
  wp_enqueue_style('styles',get_theme_file_uri('/css/styles.css'));

  if(is_front_page()) {
    wp_enqueue_script('jquery-min','https://code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script('vegasjs','https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js');
  }
  wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.6.0.js');
  wp_enqueue_script('gsap','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js');
  wp_enqueue_script('scrolltrigger','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js');
  wp_enqueue_script('script',get_theme_file_uri('/js/script.js'));
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');


/*------------------------------------------
 *  アーカイブページを有効にする
 *----------------------------------------*/
function post_has_archive($args, $post_type){
  if ('post' == $post_type) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'archive';
      $args['label'] = 'お知らせ一覧';
  }
  return $args;
  }
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/*------------------------------------------
 *  コンタクトフォーム7で自動挿入されるタグを削除
 *----------------------------------------*/

  add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
  function wpcf7_autop_return_false() {
    return false;
  } 

/*------------------------------------------
 *  コンタクトフォーム7を動的に読み込む
 *----------------------------------------*/
function add_original_choices() {
  ob_start();

  $args= [
    'post_type' => 'offering-order',
    'posts_per_page' => 16,
    'orderby' => 'title',
    'order' => 'ASC',
  ];

  $the_query = new WP_Query($args);
  $i=1;
  if ($the_query -> have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post();
  
?>
  <div class="p-offering-form__checkbox">
    <input type="checkbox" name="order_item[]" value="<?php the_title(); ?>" id="order<?php echo $i?>"><label for="order<?php echo $i?>"><?php echo $i?></label>
  </div>
<?php
  $i++;
  endwhile;
  wp_reset_postdata();
  endif;
  return ob_get_clean();
}
wpcf7_add_form_tag('add_original_tag', 'add_original_choices');

