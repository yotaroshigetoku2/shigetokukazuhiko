// メニュー途中から固定
let header = document.querySelector(".page-header");

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

let wrapper = $('#contact_outline .modal-content')
let open = $('.modalon_out')
let bg = $('.modal_bg')
let contact_hide = document.querySelector(".contact-hide-btn");
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
    $(header).fadeOut();
    $('body').css('overflow-y', 'hidden'); 
    scrollposition();
  });
  $(contact_hide).click(() => {
    $(wrapper).fadeOut();
    $(bg).fadeOut();
    $(header).fadeIn();
    $('body').css('overflow-y','auto');    
  });
  $(bg).click(function () {
    $(wrapper).fadeOut();
    $(bg).fadeOut();
    $(header).fadeIn();
    $('body').css('overflow-y','auto');    
    window.scrollTo( sX_syncerModal , sY_syncerModal );
  });
});

// 政策ページドロップダウン
const show_more = document.querySelector(".show-more");

show_more.addEventListener('click', () =>{
  const text = document.querySelector(".pillar_content_ditail_text");
  const detail = document.querySelector(".pillar_content_ditail");

  if(show_more.classList.contains('is-accordion--open')){
    text.style.display = "none";
    show_more.firstElementChild.style.display = "inline";
    detail.style.height = "20vw";
  } else {
    text.style.display = "inline";
      show_more.firstElementChild.style.display = "none";
      detail.style.height = "70vw";
    }
    show_more.classList.toggle('is-accordion--open');
});