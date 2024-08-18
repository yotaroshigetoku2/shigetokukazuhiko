let wrapper = $('#contact_outline .modal-content')
let open = $('.modalon_out')
let bg = $('.modal_bg')
let hide = document.querySelector(".hide-btn");
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
  $(hide).click(() => {
    $(open).fadeIn();
    $(wrapper).fadeOut();
    $(bg).fadeOut();
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
//     if ($(window).scrollTop() > offset.heihgt()) {
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

// 制作モーダルウィンドウ
// const show_pop_list = document.getElementsByClassName("show_pop");
// const pop = document.getElementsByClassName("pop");

// for(let i = 0; i < show_pop_list.length ; i++){
//   show_pop_list.item(i).addEventListener('click',(event) => {
//   let bg = document.getElementsByClassName("js-modal-close");
//   let pop = document.getElementsByClassName("pop");
//   bg.style.display = 'block';
  

//   });
// }

// メニュー途中から固定

window.addEventListener('scroll',() => {
  let nav = document.querySelector("#header-nav");
  let header = document.querySelector(".header");
  let scroll = window.scrollY;
  let headerY = header.clientHeight;
  console.log(scroll)
  
  if (scroll >  headerY) {
    nav.classList.replace('global-nav','nav-fixed');
  }else{
    nav.classList.replace('nav-fixed','global-nav');
  }
});

window.addEventListener('scroll',() => {
  let nav = document.querySelector("#header-nav");
  let header = document.querySelector(".page-header");
  let scroll = window.scrollY;
  let headerY = header.clientHeight;
  
  if (scroll >  headerY) {
    nav.classList.replace('global-nav','nav-fixed');
  }else{
    nav.classList.replace('nav-fixed','global-nav');
  }
});

// モバイル版メニュー
const hide_btn = document.querySelector(".hide-btn");
let mobile_menu_btn = document.querySelector(".mobile-menu-btn");
mobile_menu_btn.addEventListener('click',() =>{
  let mobile_menu = document.querySelector(".mobile-menu");
  let span2 = document.querySelector(".span2")
  mobile_menu.classList.replace('mobile-menu','mobile-menu-click');
  mobile_menu_btn.classList.replace('mobile-menu-btn','dn')
  hide_btn.style.display = "flex"
  span2.classList.add("dn")
}); 


hide_btn.addEventListener('click', () =>{
  let mobile_menu = document.querySelector('.mobile-menu-click');
  let span2 = document.querySelector(".span2")
  console.log(this)
  mobile_menu.classList.replace('mobile-menu-click','mobile-menu');
  mobile_menu_btn.classList.replace('dn','mobile-menu-btn');
  hide_btn.style.display = 'none'
  span2.classList.remove("dn")
});

window.addEventListener('scroll',() => {
  let nav = document.querySelector(".global-nav-move");
  let header = document.querySelector(".page-header");
  let scroll = window.scrollY;
  let headerY = header.clientHeight;
  let btn = document.querySelector('.mobile-menu-btn')
  let logo = document.querySelector(".logo")
  
 if (scroll >  headerY) {
    nav.classList.add('mobile-fix');
    logo.style.display = 'block'
  }else{
    nav.classList.remove('mobile-fix');
    logo.style.display = 'none'
  }
});
window.addEventListener('scroll',() => {
  let nav = document.querySelector(".global-nav-move");
  let header = document.querySelector(".header");
  let scroll = window.scrollY;
  let headerY = header.clientHeight;
  let btn = document.querySelector('.mobile-menu-btn');
  let logo = document.querySelector(".logo");
  
  if (scroll >  headerY) {
    nav.classList.add('mobile-fix');
    logo.style.display = 'block'
  }else{
    nav.classList.remove('mobile-fix');
    logo.style.display = 'none'
  }
});
