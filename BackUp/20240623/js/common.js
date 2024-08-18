let wrapper = $('#contact_outline .modal-content')
let open = $('.modalon_out')
let bg = $('.modal_bg')
//グローバル変数
let sX_syncerModal = 0 ;
let sY_syncerModal = 0 ;

function scrollposition(){
	//スクロール位置を記録する
	let dElm = document.documentElement , dBody = document.body;
	sX_syncerModal = dElm.scrollLeft || dBody.scrollLeft;	//現在位置のX座標
	sY_syncerModal = dElm.scrollTop || dBody.scrollTop;	//現在位置のY座標
}

$(function () {
  $('.modal_open').click(function () {
    $(wrapper).fadeIn();
    $(bg).fadeIn();
    $(open).fadeOut();
    scrollposition();
  });
  $(bg).click(function () {
    $(open).fadeIn();
    $(wrapper).fadeOut();
    $(bg).fadeOut();
    window.scrollTo( sX_syncerModal , sY_syncerModal );
  });
});

// let menu = $(".global-nav")
// let header = $(".header")
// $(function() {
//   let offset = header.offset();
//   $(window).scroll(function () {
//    if($(window).scrollTop() > offset) {
//     menu.addClass("fixed");
//   }else {
//     menu.removeClass("fixed");
//   }
//   });
// });

// $(function () {
//   const menu = $('.global-nav-move'),
//   offset = $('.header').offset();
//   $(window).scroll(function () {
//     if ($(window).scrollTop() > 100) {
//       $(menu).addClass('fixed');
//       $(menu).fadeIn();
//     } else {
//       $(menu).removeClass('fixed');
//       $(menu).fadeOut();
//     }
//   });
// });

// let nav = $('.global-nav')
//   if($('.global-nav').offset() > 100) {
//     console.log('');
  // }

// const score = Number(prompt('Score?'));

// if (score >= 90) {
//   console.log('A!');
// } else if (score >= 70) {
//   console.log('B!');
// } else {
//   console.log('C!');
// }