//   //プラグインを定義
//   gsap.registerPlugin(ScrollTrigger);

//   const area  = document.querySelector(".js-area");
//   const wrap  = document.querySelector(".js-wrap");
//   const items = document.querySelectorAll(".js-item");
//   const num   = items.length;

//   //横幅を指定
//   gsap.set(wrap,  { width: num * 100 + "%" });
//   gsap.set(items, { width: 100 / num + "%" });
// gsap.to('.nennpyo',{
//   xPercent: -100 * ( num - 1 ),
//   scrollTrigger:{
//     trigger:'.nennpyo',
//     start:'top left',
//     markers:true,
//   }
// });

// const container = document.querySelector('.slides');
// gsap.utils.toArray(".nennpyo").forEach((container) => {
  // const slides = document.querySelectorAll('.slides');
  // const containerWidth = container.offsetHeight;
  // ScrollTrigger.batch('.slides', {
  // onEnter: batch => gsap.to( batch, {
  //   xPercent:100 * (slides.length - 1),
  //   ease: "none",
  //   scrollTrigger: {
  //       trigger: container,
  //       start: 'top center',
  //       scrub: 1,
  //       end: () => "+=" + containerWidth,
  //       anticipatePin: 1,
  //       start:'top center',
  //       invalidateOnRefresh: true,
  //       markers:true,
  //   }
  // });
//   })
// });



const listWrapperEl = document.querySelector('.slides_wraper');
gsap.utils.toArray(".slides").forEach((listEl) => {
gsap.to (listEl ,{
  x: () => (listEl.clientWidth - listWrapperEl.clientWidth),
  ease: 'none',
  duration: 1,
  scrollTrigger:{
    trigger: '.nennpyo',
    start:'top 10%',
    end: () => `+=${listEl.clientWidth - 1 * listWrapperEl.clientWidth + 3000}`,
    // markers:'true',
    scrub:true,
    pin: true,
    anticipatePin: 1,
  }
});
});

const listWrapperEl2 = document.querySelector('.slides_wraper2');
gsap.utils.toArray(".slides2").forEach((listEl2) => {
gsap.to (listEl2 ,{
  x: () => (listEl2.clientWidth - listWrapperEl2.clientWidth),
  ease: 'none',
  duration: 1,
  scrollTrigger:{
    trigger: '.nennpyo2',
    start:'top 10%',
    end: () => `+=${listEl2.clientWidth - 1 * listWrapperEl.clientWidth}`,
    // markers:'true',
    scrub:true,
    pin: true,
    anticipatePin: 1,
  }
});
});



// gsap.to(".nennpyo", {
//   x: 100, // 100px右に移動
// });