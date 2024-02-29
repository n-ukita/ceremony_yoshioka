/*================
ヘッダーの色変更
=================*/

document.addEventListener('DOMContentLoaded', function () {
  if(this.location.pathname === '/'){
    const imgHeight = document.querySelector('.p-fv').offsetHeight;
    const header = document.querySelector('.p-header');
    const logo = document.querySelector('.p-header__logo--top');
    const nav = document.querySelector('.p-header__lists');
    const bars = document.querySelectorAll('.c-drawer-icon__bar');

    window.addEventListener('scroll', function () {
      if (window.scrollY < imgHeight) {
        header.classList.remove('change-color');
        logo.classList.remove('change-color');
        nav.classList.remove('change-color');
        bars.forEach((bar)=>{
          bar.classList.remove('change-color');
        })
      } else {
        header.classList.add('change-color');
        logo.classList.add('change-color');
        nav.classList.add('change-color');
        bars.forEach((bar)=>{
          bar.classList.add('change-color');
        })
      }
    });
  }
  

  /*================
  各セクションのアニメーション
  =================*/

  let jsItems = document.querySelectorAll('.js-float');
  jsItems.forEach((jsItem)=>{
      gsap.fromTo(jsItem,{autoAlpha:0,y:'10%'},{autoAlpha:1,y:'0%',duration:1,delay:.1,scrollTrigger:{
        trigger:jsItem,
        start:'center bottom',
    }})
  })

  const mm = gsap.matchMedia();

  mm.add('(min-width:768px)',function(){
    gsap.fromTo('.p-contact__img',{autoAlpha:0,y:'10%'},{autoAlpha:1,y:'0%',duration:1,stagger:.1,
      scrollTrigger:{
        //設定
        trigger:'.p-contact',
        start:'center bottom',
      }
    })
  })
  mm.add('(max-width:767px)',function(){
    const flows = document.querySelectorAll('.p-contact__img');
    flows.forEach((flow)=>{
      gsap.fromTo(flow,{autoAlpha:0,y:'10%'},{autoAlpha:1,y:'0%',duration:1,stagger:.05,
        scrollTrigger:{
          //設定
          trigger:flow,
          start:'top bottom',
        }
      })
    })
  })
});

/*================
アコーディオン
=================*/

window.addEventListener('load',()=>{
  let icon = document.querySelector('.c-drawer-icon');
  let bars = document.querySelectorAll('.c-drawer-icon__bar');
  let content = document.querySelector('.c-drawer-content');
  let items = document.querySelectorAll('.c-drawer-content__list a');
  let headerLogo = document.querySelector('.p-header__logo a');
  let menuTL = gsap.timeline();

  icon.addEventListener('click',function(){
    //既に開いていたら閉じる
    if(content.classList.contains('is-active')){
      menuTL
      .fromTo(items,{autoAlpha:1},{autoAlpha:0,duration:.5})
      .fromTo(content,{autoAlpha:1},{autoAlpha:0,duration:.5})
      .add(()=>{
        content.classList.remove('is-active');
        headerLogo.classList.remove('is-active');
        bars.forEach((bar)=>{
          bar.classList.remove('is-active');
        })
      },'<')
    }else{//開く
      menuTL
      .add(()=>{
        content.classList.add('is-active');
        headerLogo.classList.add('is-active');
        bars.forEach((bar)=>{
          bar.classList.add('is-active');
        })
      })
      .to(content,{autoAlpha:1,duration:.5 })
      .to(items,{autoAlpha:1,duration:.5,delay:.3})
    }
  })
});

/*================
jQuery
=================*/


jQuery(function ($) {
  
  // ページトップボタン
  var topBtn = $('.js-pagetop');
  topBtn.hide();

  // ページトップボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ページトップボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動。ヘッダーの高さ考慮。)
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });



  //fv画像の設定
if( location.pathname === '/' ){

  var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
		if (windowwidth > 768){
			var responsiveImage = [//PC用の画像
				{ src: mainvisual1},
				{ src: mainvisual2},
				{ src: mainvisual3},
				{ src: mainvisual4}
			];
		} else {
			var responsiveImage = [//タブレットサイズ（768px）以下用の画像
				{ src: mainvisual1 },
				{ src: mainvisual2 },
				{ src: mainvisual3 },
				{ src: mainvisual4 }
			];
		}
  

//Vegas全体の設定

  $('#slider').vegas({
      overlay: false,//画像の上に網線やドットのオーバーレイパターン画像を指定。
      transition: 'blur',//切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burnburn2、blurblur2、flash、flash2が設定可能。
      transitionDuration: 2000,//切り替わりのアニメーション時間をミリ秒単位で設定
      delay: 10000,//スライド間の遅延をミリ秒単位で。
      animationDuration: 20000,//スライドアニメーション時間をミリ秒単位で設定
      animation: 'kenburns',//スライドアニメーションの種類。http://vegas.jaysalvat.com/documentation/transitions/参照。kenburns、kenburnsUp、kenburnsDown、kenburnsRight、kenburnsLeft、kenburnsUpLeft、kenburnsUpRight、kenburnsDownLeft、kenburnsDownRight、randomが設定可能。
      slides: responsiveImage,//画像設定を読む
      timer:false,// プログレスバーを非表示したい場合はこのコメントアウトを外してください
    });
  }
});
