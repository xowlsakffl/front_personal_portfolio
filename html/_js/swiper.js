var swiper = new Swiper(".swiper-container", {
    slidesPerView: 2,
    spaceBetween: 60,
    loop: true,
    speed : 1200,
    visibilityFullFit: true,
    autoResize: false,
    autoplay: {
        //자동슬라이드 (false-비활성화)          
        delay: 2500, // 시간 설정          
        disableOnInteraction: false, //false-스와이프 후 자동 재생        
    },
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {  
      '100': {
        slidesPerView: 1,
        spaceBetween: 30,},
      '480': {
        slidesPerView: 2,
        spaceBetween: 30,},
      '1000': {
        slidesPerView: 2,
        spaceBetween: 60,},
      '1150': {
        slidesPerView: 2,
        spaceBetween: 80,},
      '1299': {
        slidesPerView: 3,
        spaceBetween: 60, },
      '1500': {
        slidesPerView: 3,
        spaceBetween: 60, },
      '1800': {
        slidesPerView: 3,
        spaceBetween: 65, },
    },
});