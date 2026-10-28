window.addEventListener('load', function() {
  new Swiper('.mySwiper', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    centeredSlidesBounds: true,
    slidesPerView: 'auto',
    loop: true,
    initialSlide: 3,
    speed: 300,
    coverflowEffect: {
      rotate: 0,
      stretch: -10,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
  });
});
