window.addEventListener('load', function() {
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    centeredSlidesBounds: true,
    slidesPerView: 3,
    breakpoints: {
      640: { slidesPerView: 3, spaceBetween: 30 },
      0: { slidesPerView: 1.2, spaceBetween: 20, centeredSlidesBounds: false }
    },
    loop: true,
    speed: 600,
    autoplay: { delay: 4000, disableOnInteraction: true, pauseOnMouseEnter: true },
    coverflowEffect: { rotate: 0, stretch: -20, depth: 160, modifier: 1, slideShadows: false },
    pagination: { el: ".swiper-pagination", clickable: true },
    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }
  });
});
