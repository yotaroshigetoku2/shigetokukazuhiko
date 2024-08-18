// 制作モーダルウィンドウ
const show_pop_list = document.getElementsByClassName("show_pop");
let pop = document.getElementsByClassName("pop");
let bg = document.getElementsByClassName('js-modal-close')
let sX_syncerModal = 0 ;
let sY_syncerModal = 0 ;
function scrollposition(){
	//スクロール位置を記録する
	let dElm = document.documentElement , dBody = document.body;
	sX_syncerModal = dElm.scrollLeft || dBody.scrollLeft;	//現在位置のX座標
	sY_syncerModal = dElm.scrollTop || dBody.scrollTop;	//現在位置のY座標
}

for(let i = 0;i < pop.length; i++){
  pop.item(i).style.display = 'none';
}

for(let i = 0; i < show_pop_list.length ; i++){
  show_pop_list.item(i).addEventListener('click',() => {
    bg.item(i).classList.add("bg_click");
    scrollposition();
  });
}